<?php

namespace App\Http\Controllers;
use App;
use App\Artical;
use App\User;
use Input;
use App\Http\Controllers\Controller;
use App\Http\Requests\formValidate;
use Illuminate\Http\Request;

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

    public function editArtical($id){

        $flights = Artical::findOrFail($id);
        return view('pages.edit',compact("flights"));
    }

    public function updateArtical($id , formValidate $request){
        $flights = Artical::findOrFail($id);
        $flights->update($request->all());
        
        return redirect('Artical');

    } 

    public function searchArtical(){
        
        if(!empty($_REQUEST['val'])){
            $sort = $_REQUEST['val'];
            $flights = Artical::orderBy('title', $sort)->get();
            return view('pages.artical',compact("flights"));

        }else{

            $flights = Artical::Where('title', 'like', '%' . Input::get('title') . '%')->orWhere('body', 'like', '%' . Input::get('title') . '%')->get();
            return view('pages.artical',compact("flights"));
        }
        
    }
}