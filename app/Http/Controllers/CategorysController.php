<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Sub_Category;

class CategorysController extends Controller
{


       public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas = Category::all();

           return view('category.index',compact('datas'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Category  $datas)
    {
            

             Category::create(request()->validate([
            'name' =>['required','min:3'],
            

        ]));
                
                return redirect('/category')->with('success','category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        
      $data =Category::findorFail($id);
          
       return view('category.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $data =Category::findorFail($id);
         
          return view('category.edit',compact('data'));
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
        $data =Category::findorFail($id);
         $data->update(request(['name']));
        $data->save();

        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $data= new Category();
           Category::findorFail($id)->delete();
           return redirect('/category');
    }
}
