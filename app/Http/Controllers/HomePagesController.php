<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\User;
use App\Cart;
use App\Checkout;
use App\Order;
use Session;
use App\Order_Product;
use App\Image;
use App\Category;


class HomePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //home page
    public function index()
    {
        $image = Image::all();
        $datas = Product::where('category_id', 2)->get();
      $mens = Product::where('category_id', 1)->get();
      $babys = Product::where('category_id', 3)->get();
      $devices = Product::where('category_id', 4)->get();
        return view('homepage.index',compact('datas','mens','babys','devices','image'));
//compact('users','projects','foods')

    }

        public function search(Request $request){
         $search = $request->get('term');
      
          $result = Product::where('name', 'LIKE', '%'. $search. '%')->get();
          // return response()->compact('result');
          //dd($result);
          return response()->json($result);

    }

    //women page

    public function womenindex() 
    {
        $datas = Product::where('category_id', 2)->get();

        return view('homepage.women',compact('datas'));
    }
//men page
 

        public function menindex() 
    {
        $mens = Product::where('category_id',1)->get();

        return view('homepage.men',compact('mens'));
    }

    //baby page
        public function babyindex() 
    {
        $babys = Product::where('category_id',3)->get();

        return view('homepage.baby',compact('babys'));
    }

      //electronicindex page
        public function electronicindex() 
    {
        $devices = Product::where('category_id',4)->get();

        return view('homepage.electronicDevices',compact('devices'));
    }


//get product from cart

     public function getCart()

    {
        

         if (!Session::has('cart')) {
            return view('cart.index');
        }
        $oldCart  = Session::get('cart');
        $cart = new Cart($oldCart);
//dd(Session::get('cart'));
            return view('cart.index',['datas'=>$cart->items, 'totalPrice'=> $cart->totalPrice]);
    }

 public function GetCheckout()
    { 
           $uid=auth()->user()->id;
      // 
          $users = User::find($uid);
          // dd($users );
          if (!Session::has('cart')) {
            return view('cart.index');
         }
           $oldCart  = Session::get('cart');
           $cart = new Cart($oldCart);
           $total = $cart->totalPrice;

      
          
      return view('cart.checkout',['datas'=>$cart->items,'total'=>$total],compact('users'));
    }

      /*  public function GetCheckout(Request $request,$id)
    {
          
          if (!Session::has('cart')) {
            return view('cart.index');
         }
           $oldCart  = Session::get('cart');
           $cart = new Cart($oldCart);
           $total = $cart->totalPrice;
            $datas =User::all();
          
      return view('checkout.index',compact('datas'), ['total'=>$total]);
    }*/


    /*  public function getAddToCart(Request $request, $id)
    {
         $data =Product::findorFail($id);
         $oldCart  = Session::has('cart') ? Session::get('cart') : null;

         $cart = new Cart($oldCart);
         $cart->add($data, $data->id);

         $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));

           return redirect('/homepage');
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //save checkout data into the database

    public function postCheckout(Request $request)

    {
         
        
         if (!Session::has('cart')) {
            return view('cart.index');
        }

        $this->validate($request,[
            
           
          'payment' =>['required'],
        ]);
          $oldCart  = Session::get('cart');
           $cart = new Cart($oldCart);

            $datas = new Order;
            $datas->payment=$request->input('payment');
            $datas->user_id=auth()->user()->id;
            $datas->total_price=$cart->totalPrice +75;
            $datas->save();



            if($datas){
           $carts  = Session::get('cart');
         
           
           foreach($carts->items as $cart){
          //  $id =
            // $data =Product::find($id);
           
             $order = new Order_Product;
             $order->product_id=$cart['item']['id'];
             $order->order_id=$datas->id;
             $order->name=$cart['item']['name'];
             $order->quantity=$cart['qty'];
             $order->price=$cart['item']['price'];
             $order->img=$cart['item']['img'];
             $order->save();

          //$data
  //dd($data);
             $id =$cart['item']['id'];
             $data =Product::find($id);
             $data->quantity=$cart['item']['quantity']-$cart['qty'];
             $data->save(); 
           $uid=auth()->user()->id;
           $u = User::find($uid);
           $u->address=$request->input('address');
           $u->phone_no=$request->input('phone_no');
           $u->save();

        

             }


            }


            Session::forget('cart');
          
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //

    public function show(Request $request,$id)
    { 
          


        $data =Product::findorFail($id);
       // dd($data);
        $oldCart  = Session::has('cart') ? Session::get('cart') : null;
        // if($action !== null){
            $cart = new Cart($oldCart);

        
            $cart->add($data, $data->id);
            $request->session()->put('cart',$cart);
        // }
         
     // dd($request->session()->get('cart'));

           return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sid)
    {
        $new = explode('_',$sid);
        $id = $new[0];
        $action = $new[1];
        $data =Product::findorFail($id);
        $oldCart  = Session::has('cart') ? Session::get('cart') : null;
        if($action == 'a'){
            $cart = new Cart($oldCart);
            $cart->add($data, $data->id);
            $request->session()->put('cart',$cart);
        }else{
            $ss = Session::get('cart');

            if($ss->items[$id]['qty']>1){
                $cart = new Cart($oldCart);
                $cart->delete($data, $data->id);
                $request->session()->put('cart',$cart);
            }else{
                $this->destroy($id);
            }
            
        }

        return redirect('/cart');
    }

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       

        $data =Product::findorFail($id);
         $oldCart  = Session::has('cart') ? Session::get('cart') : null;
         $cart = new Cart($oldCart);
            $cart->productDeleteToCart($data, $data->id);
             Session::put("cart", $cart); 
             Session::save();
        // }
        unset( $cart->items[$id]);
        //dd($cart);
        
         $cart=  Session::get('cart');
        $totalQty =$cart->totalQty;
      if($totalQty == 0){
            Session::forget('cart');
            Session::flush();
//dd(Session::get('cart'));
    }
     return redirect('/cart');

   

  /* $cart->destroy($id);
     $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -=  $this->items[$id] * $this->items[$id]['qty'];
        $this->subTotal = $this->totalPrice + $this->shippingCost;

        // and remove the item
        unset($this->items[$id]);

    return redirect('/cart');*/
    }








    

}
 