<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Product;
use App\User;
use App\Cart;
use App\Checkout;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Product::all();

          return view('user.index',compact('datas'));
    }

    //user list

         public function listindex()
    {
        $datas =User::all();
          //$products =Product::all();
        return view('user.listindex',compact('datas'));
    }

     public function getCart()
    {
         if (!Session::has('cart')) {
            return view('cart.index');
        }
        $oldCart  = Session::get('cart');
        $cart = new Cart($oldCart);

            return view('cart.index',['datas'=>$cart->items, 'totalPrice'=> $cart->totalPrice]);
    }


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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    { 


        $data =Product::findorFail($id);
        $oldCart  = Session::has('cart') ? Session::get('cart') : null;
        // if($action !== null){
            $cart = new Cart($oldCart);

        
            $cart->add($data, $data->id);
            $request->session()->put('cart',$cart);
        // }
         
        // dd($request->session()->get('cart'));

           return redirect('/homepage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $sid)
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
    }*/

        public function update(Request $request, $id)
    {
         $data =User::findorFail($id);
         $data->role=$request->input('role');
         $data->save();
         return redirect()->back();
    }

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function destroy($id)
    {
           $data= new User();
           User::findorFail($id)->delete();
           return redirect()->back();


    }



    

}
 