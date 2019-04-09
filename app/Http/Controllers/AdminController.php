<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Order_Product;
use App\Product;
use App\Order_Request;
use Auth;
use Carbon\Carbon;
use PDF;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        
        if(Auth::user()->role != 'admin'){
            return redirect('/homepage');
        }
        

        // $totals=Order::count();
        $totals=Order::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
         $product=Order_Product::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
         $items=Product::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
         $sp=Order_Request::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
        

          //$products =Product::all();
        return view('admin.index' ,compact('totals','product','items','sp'));
    }

    public function downloadPDF(){

      $totals=Order::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
      $product=Order_Product::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
      $items=Product::where('created_at', '>=', Carbon::now()->startOfMonth())->count();
      $sp=Order_Request::where('created_at', '>=', Carbon::now()->startOfMonth())->count();

      $pdf = PDF::loadView('admin.pdf', compact('totals','product','items','sp'));
      return $pdf->download('Monthly.pdf');
    }

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
    public function show()
    {
       
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
