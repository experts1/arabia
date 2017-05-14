<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Face;
use Session;

class FaceController extends Controller
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
        $faces=Face::orderBy('id','desc')->paginate(1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //return view('face.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate($request,[
            'title'=>'required|max:255',
            'body'=> 'required',

        ]);

        //insert data to database
        $face = new Face;

        $face->title= $request->title;
        $face->body= $request->body;
        $face->save();

        //show flash message

        Session::flash('success','تم التحديث');

        //redirect to home page

        return view('pages.home');
        









    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $face=Face::find($id);
        return view('face.show')->withFace($face);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $face=Face::find($id);
         
        return view ('face.edit')->withFace($face);
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
        $this->validate($request, array(
               'title'=> 'required|max:255',
               'body'=> 'required'
            ));  

               //Insert Data to Database
               $face =Face::find($id);

               $face->title =$request -> input('title');
               $face->body =$request -> input('body');

               $face->save();

               //Show Flash Message

               Session::flash('success','تم حفظ التعديلات');

               //Redirect to another Page 

               return redirect()->route('face.show', $face->id);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
