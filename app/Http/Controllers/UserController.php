<?php

namespace App\Http\Controllers;
use App;
use App\Artical;
use App\User;
use Input;
use App\Http\Controllers\Controller;
use App\Http\Requests\formValidate;

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

    public function setArtical(formValidate $request)
    //public function setArtical()
    {
        # code...
        info('testing'.print_r(Input::all(),true));

        

        $flight = new Artical;
        $flight->title = Input::get('title');
        $flight->body = Input::get('body');
        $flight->save();

        return redirect('Artical');
    }

    public function storeArtical(){
        return view('pages.add');
    }

    public function deleteArtical($id){

        $flight = App\Artical::find($id);
        $flight->delete();

        return redirect('Artical');

    }
}