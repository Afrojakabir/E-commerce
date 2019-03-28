<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_Category;
use App\Category;

class Sub_CategorysController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas =Sub_Category::all();


           return view('sub_category.index',compact('datas'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        
        $datas = Category::all();
         return view('sub_category.create',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sub_Category  $datas)
    {
           

             Sub_Category::create(request()->validate([
            'name' =>['required','min:3'],
            'category_id' =>['required'],
          
        ]));
                
                return redirect('/sub_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
    // $data =Category::findorFail($id);
        //  $data =Category::findorFail(3)->sub_categorys;
         // dd($data);
       //return view('sub_category.show',compact('data'));

           $data =Sub_Category::findorFail($id);
          
       return view('sub_category.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       

        $data =Sub_Category::findorFail($id);
         
          return view('sub_category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        $data =Sub_Category::findorFail($id);
         $data->update(request(['name']));
        $data->save();

        return redirect('/sub_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $data= new Sub_Category();
           Sub_Category::findorFail($id)->delete();
           return redirect('/sub_category');
    }
}
