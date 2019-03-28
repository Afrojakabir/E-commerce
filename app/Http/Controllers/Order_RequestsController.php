<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Product;
use App\User;
use App\Cart;
use App\Checkout;
use Session;
use App\Order_Request;
use PDF;

class Order_RequestsController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request,[
            'name' =>['required','min:3'],
            'img' =>'image|nullable',
            'quantity'=>['required'],
            'address' =>['required','min:4'],
            'phone_no' =>['required','min:11'],
            'payment'=>['required'],
            'price'=>['required'],
          
        ]);

           
            if($request->hasFile('img'))
            {
                $fileNameWithExt = $request->file('img')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('img')->storeAs('public/image',$fileNameToStore);
             }
         
                $datas = new Order_Request;
                $datas->name=$request->input('name');
                $datas->phone_no=$request->input('phone_no');
                $datas->quantity=$request->input('quantity');
                $datas->address=$request->input('address');
                $datas->payment=$request->input('payment');
                $datas->price=$request->input('price');
                $datas->user_id=auth()->user()->id;
          if($request->hasFile('img')){
         
                $datas->img = $fileNameToStore;
                }
             
               $datas->save();
               return redirect('/homepage');
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
       
           $datas =Order_Request::where('user_id',auth()->id())->get();
          //dd( $datas);
       return view('user.show',compact('datas'));
    }


  public function adminshow()
    {
       
           $datas =Order_Request::all();
          //dd( $datas);
       return view('user.admin_view_req',compact('datas'));
    }



     public function downloadPDF(){

      $datas = Order_Request::all();

      $pdf = PDF::loadView('user.pdf', compact('datas'));
    
    return $pdf->download('special_order.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data =Order_Request::findorFail($id);
         return view('user.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $this->validate($request,[
            
              'confirmation'=>['required'],
              'status'=>['required'],   
        ]);
        

           $data =Order_Request::findorFail($id);

        $data->confirmation=$request->input('confirmation');
           
             $data->status=$request->input('status');
        
       $data->save();
       return redirect('/reqshow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data= new Order_Request();
          Order_Request::findorFail($id)->delete();
           return redirect('/reqshow');
    }
}
