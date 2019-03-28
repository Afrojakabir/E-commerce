<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Category;
use App\Sub_Category;
use App\User;
use App\Product;
use PDF;


class ProductsController extends Controller
{
     
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::all();

           return view('product.index',compact('datas'));
       
    }

     public function downloadPDF(){

      $datas = Product::all();

      $pdf = PDF::loadView('product.pdf', compact('datas'));
    
    return $pdf->download('invoice.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Category::all();
         return view('product.create',compact('datas'));
       
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
            'price' =>['required'],
            'quantity'=>['required'],
            'code' =>['required'],
            'category_id' =>['required'],
          
        ]);




            if($request->hasFile('img')){
         

                $fileNameWithExt = $request->file('img')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('img')->storeAs('public/image',$fileNameToStore);

            }
         
            $datas = new Product;
            $datas->name=$request->input('name');
            $datas->price=$request->input('price');
             $datas->quantity=$request->input('quantity');
              $datas->code=$request->input('code');
               $datas->category_id=$request->input('category_id');
                $datas->user_id=auth()->user()->id;
if($request->hasFile('img')){
         
             $datas->img = $fileNameToStore;
         }
              //$datas =  Product::create($attributes + ['user_id' => auth()->id()]);

     // $datas =  Product::create(request()(['user_id' => auth()->id()]));
       // $datas->user_id=auth()->user()->id;
        $datas->save();

 return redirect('/product/create');


       
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data =Product::findorFail($id);
         
          return view('Product.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //$data =Product::findorFail($id);
         //$data->update(request(['name','price', 'quantity','code', 'img']));

   $this->validate($request,[
            'name' =>['required','min:3'],
            'img' =>'image|nullable',
            'price' =>['required'],
            'quantity'=>['required'],
            'code' =>['required'],
            
        ]);
        if($request->hasFile('img')){
                $fileNameWithExt = $request->file('img')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('img')->storeAs('public/image',$fileNameToStore);
        }
        else{
            $filenNameToStore = 'noimage.jpg';
            }

           $data =Product::findorFail($id);
           $data->name=$request->input('name');
           $data->price=$request->input('price');
           $data->quantity=$request->input('quantity');
           $data->code=$request->input('code');
       if ($request->hasFile('img')) {
            $data->img = $fileNameToStore;
        }
 $data->save();
return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= new Product();
          Product::findorFail($id)->delete();
           return redirect('/product');
    }


     
  
}
