<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archaeology ;
use Image;


class AechaeologyController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    $aechaeology =   Archaeology::orderBy('created_at','desc')->paginate(10);
        
        return view('archAdmin.archaeologyAdmin')->with('archaeology',$aechaeology);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archAdmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){

            echo $request ;

            if($request->hasFile('image')){  

                $filenameWithExtention = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameStore = $fileName .'_'.time().'.'.$extension;
            
                $path = $request->file('image')->move(base_path() . '/public/images/', $fileNameStore);
                $img = Image::make($path)->resize(1920, 1080, function($constraint) {
                    $constraint->aspectRatio();
                });
               
                 echo $fileNameStore;
              
             
                        
                    }else{
                            $fileNameStore = 'noImage.jpg';
                          }

            

            $project = new Archaeology();

        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->archaeology_type = $request->input('archaeology_type');
        $project->location = $request->input('location');
        $project->image   = $fileNameStore ;
        $project->save();
        

      

        

        }


        return redirect('/archaeologyAdmin')->with('success', 'Done successfully');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aechaeology =   Archaeology::find($id);

        return view('archAdmin.edit')->with('archaeology',$aechaeology);
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
        if($request->isMethod('PUT')){

            echo $request ;

            if($request->hasFile('image')){  

                $filenameWithExtention = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameStore = $fileName .'_'.time().'.'.$extension;
            
                $path = $request->file('image')->move(base_path() . '/public/images/', $fileNameStore);
            
               
                 echo $fileNameStore;
              
             
                        
                    }else{
                            $fileNameStore = 'noImage.jpg';
                          }

            

            $project =   Archaeology::find($id);

        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->archaeology_type = $request->input('archaeology_type');
        $project->location = $request->input('location');
        $project->image   = $fileNameStore ;
        $project->save();

                        }

        return redirect('/archaeologyAdmin')->with('success','Edit successfully');
        

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =   Archaeology::find($id);


        if($item->image != 'noImage.jpg'){
            \Storage::delete('/public/images/'.$item->image);
         
        }
        
        
                $item->delete() ;   
               
                return redirect('/archaeology')->with('success', 'Delete successfully');
    }
}
