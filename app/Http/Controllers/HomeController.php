<?php

namespace App\Http\Controllers;

use App\Name;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','setVar']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //dd(User::find(14)->name);

       /* $name = Name::where('name', '=' ,'khbkhuk')->firstOrFail()->user->toArray();
        dd($name);*/




      //  dd(Name::where([['name'=>'khbkhuk']])->get()->user);

       // dd(Phone::where['name'=>'khbkhuk']->user);


        return view('home');
    }
}
