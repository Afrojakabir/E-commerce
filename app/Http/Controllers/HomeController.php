<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$user_id = auth()->user()->id;
       // $user =User::find($user_id);
        if (auth()->user()->role == 'admin') {
        return redirect('/admin');
    }
   

    else {
        return redirect('/homepage');
    }
    }

   
}
