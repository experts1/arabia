<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;

class ContactsController extends Controller
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
        $contacts=Contact::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'callus'=>'required',
            'email'=>'required',
            'address'=>'required',

            ]);

        $contact = new Contact;

        $contact->callus =$request->callus;
        $contact->email =$request->email;
        $contact->address =$request->address;
        $contact->save();

        Session::flash('success','تم التحديث');

        //redirect to home page

        return view('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contact.show')->withContact($contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $contact = Contact::find($id);
        return view('contact.edit')->withContact($contact);

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
        $this->validate($request, [

            'callus'=>'required',
            'email'=>'required',
            'address'=>'required',

            ]);

        $contact = Contact::find($id);

        $contact->callus =$request->input('callus');
        $contact->email =$request->input ('email');
        $contact->address =$request->input ('address');
        $contact->save();

        Session::flash('success','تم التحديث');

        //redirect to home page

        return redirect()->route('contact.show', $contact->id);
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
