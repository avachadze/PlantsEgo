<?php

namespace App\Http\Controllers;

use App\Mail\contactResponse;
use App\Models\ContactMessages;
use App\Http\Requests\ContactMessagesRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;

class ContactMessagesController extends Controller
{

    /**
     * Display a listing of the resource. (unreplied messages)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Notifications= ContactMessages::unreplied();
        $replied= false;
        return view('ContactMessages.index')->with(['Notifications' => $Notifications, 'replied' => $replied]);
    }

    /**
     * Display a listing of the resource. (replied messages)
     *
     * @return \Illuminate\Http\Response
     */
    public function index_replied()
    {
        $Notifications= ContactMessages::replied();
        $replied= true;
        return view('ContactMessages.index')->with(['Notifications' => $Notifications, 'replied' => $replied]);
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
        Session::flash('savedMessage', 'Message saved successfully');
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
        $userID= \Illuminate\Support\Facades\DB::table('users')->where('email', $message->fromEmail)->value('id');
        return view('ContactMessages.show')->with(['message' => $message, 'userID' => $userID]);
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

    /**
     * Send the email response to the user
     */
    public function mailResponse(Request $request, $id)
    {
        $msg= ContactMessages::find($id);
        $user= User::where('email', $msg->fromEmail)->get();
        Mail::to($user)->send(new contactResponse($request));
        Session::flash('sentReply', 'Message sent successfully');

        $msg->replied= true;
        $msg->save();

        return redirect('/message');
    }
}
