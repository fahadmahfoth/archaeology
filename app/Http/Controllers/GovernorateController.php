<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Governorate ;   
use Image;

class GovernorateController extends Controller
{
    public function index()
    {

    $governorate =   Governorate::orderBy('created_at','desc')->paginate(20);
        
        return view('cityAdmin.cityAdmin')->with('governorate',$governorate);
    }




    public function create()
    {
        return view('cityAdmin.create');
    }



    public function store(Request $request)
    {
        if($request->isMethod('post')){

            echo $request ;

            if($request->hasFile('image')){  

                $filenameWithExtention = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameStore = $fileName .'_'.time().'.'.$extension;
            
                $path = $request->file('image')->move(base_path() . '/public/city/', $fileNameStore);
                
                
               
                 echo $fileNameStore;
              
             
                        
                    }else{
                            $fileNameStore = 'noImage.jpg';
                          }

            

            $project = new Governorate();

        $project->title = $request->input('title');
        $project->image   = $fileNameStore ;
        $project->save();
        

      

        

        }


        return redirect('/cityAdmin')->with('success', 'Done successfully');




    }



    public function edit($id)
    {
        $governorate =   Governorate::find($id);

        return view('cityAdmin.edit')->with('governorate',$governorate);
    }




    public function update(Request $request, $id)
    {
        if($request->isMethod('PUT')){

            echo $request ;

            if($request->hasFile('image')){  

                $filenameWithExtention = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameStore = $fileName .'_'.time().'.'.$extension;
            
                $path = $request->file('image')->move(base_path() . '/public/city/', $fileNameStore);
            
               
                 echo $fileNameStore;
              
             
                        
                    }else{
                            $fileNameStore = 'noImage.jpg';
                          }

            

        $project =   Governorate::find($id);
        $project->title = $request->input('title');
        $project->image   = $fileNameStore ;
        $project->save();

                        }

        return redirect('/cityAdmin')->with('success','Edit successfully');
        

      
    }



    public function destroy($id)
    {
        $item =   Governorate::find($id);


        if($item->image != 'noImage.jpg'){
            \Storage::delete('/public/city/'.$item->image);
         
        }
        
        
                $item->delete() ;   
               
                return redirect('/cityAdmin')->with('success', 'Delete successfully');
    }


}
