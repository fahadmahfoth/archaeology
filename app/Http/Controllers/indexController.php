<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Archaeology ;
use App\Governorate ;   


class indexController extends Controller
{

    public function index()
    {        
        return view('welcome')->with([
            'archaeology'=> Archaeology::take(6)->get() ,
            'governorates'=>Governorate::take(6)->get()
        ], );
    }



    public function archaeology()
    {

        return view('archaeology')->with([
            'archaeology'=> Archaeology::orderBy('created_at','desc')->get() ,
 
        ], );



    }

    public function governorates()
    {

        return view('governorates')->with([
            'governorates'=> Governorate::orderBy('created_at','desc')->get() ,
 
        ], );



    }

    public function archaeologybycity($id)
    {

        return view('archaeology')->with([
            'archaeology'=> Archaeology::orderBy('created_at','desc')->where('city_id',$id)->get() ,
 
        ], );



    }



    public function show($id){

        return view('page')->with(
            'archaeology', Archaeology::find($id)   

        );
    }




    public function search(Request $request){

        $request->validate([
            'q'=> 'required'
        ]);

        $q = $request->q ;

        $filterArchaeology = Archaeology::where('title','like','%'.$q.'%')->get();

        if ($filterArchaeology) {
            return view('search')->with([
                "archaeology"=>$filterArchaeology,
                'q'=>$q 
            ]);
        } else {
            return redirect('/search')->with('s', 'لايوجد نتائج حاول مرة اخرى');
        }
        

    }
    
}
