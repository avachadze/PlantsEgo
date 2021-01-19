<?php

namespace App\Http\Controllers;

use App\Models\ContactMessages;
use App\Http\Requests\ContactMessagesRequest;

class ContactMessagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Notifications= ContactMessages::all();
        return view('ContactMessages.index')->with('Notifications', $Notifications);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactMessagesRequest $request)
    {
        //Validation
        $data= $request->validated();

        //Model instance creation
        $newEntry= new ContactMessages();

        //Assingn values to the model
        $newEntry->fromName= $data['nameC'];
        $newEntry->fromEmail= $data['emailC'];
        $newEntry->subject= $data['form-Subject'];
        $newEntry->message= $data['msg'];

        //Save the model in the DB
        $newEntry->save();

        //returning to the page
        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message= ContactMessages::find($id);
        return view('ContactMessages.show')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDelete= ContactMessages::find($id);
        $toDelete->delete();
        return redirect('/message');
    }
}
