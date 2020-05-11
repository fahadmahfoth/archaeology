<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Archaeology ;

class indexController extends Controller
{

    public function index()
    {        
        return view('welcome')->with([
            'archaeology'=> Archaeology::where('archaeology_type', 'archaeology')->take(6)->get() ,
            'governorates'=>Archaeology::where('archaeology_type', 'governorate')-> take(6)->get()
        ], );
    }



    public function archaeology()
    {

        return view('archaeology')->with([
            'archaeology'=> Archaeology::orderBy('created_at','desc')->where('archaeology_type', 'archaeology')->get() ,
 
        ], );



    }

    public function governorates()
    {

        return view('governorates')->with([
            'governorates'=> Archaeology::orderBy('created_at','desc')->where('archaeology_type', 'governorate')->get() ,
 
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
