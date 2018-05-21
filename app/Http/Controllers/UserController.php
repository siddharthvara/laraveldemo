<?php

namespace App\Http\Controllers;
use App;
use App\Artical;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function contact()
    {

    

        $name = "siddharth";
        //return view('contact')->with('name',$name);
        return view('pages.contact',compact("name"));
        
    }

    public function getArtical()
    {
        $flights = Artical::all();
        return view('pages.artical',compact("flights"));
    }

    public function showArtical($id)
    {
        $flights = Artical::findOrFail($id);
        return view('pages.show',compact("flights"));
    }
}