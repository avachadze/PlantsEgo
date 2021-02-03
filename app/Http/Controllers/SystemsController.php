<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\System;
use Illuminate\Support\Facades\Auth;
class SystemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $systems = System::All();
        $systemsToShow=array();
        if(Auth::User()->companyID!=null){
            foreach($systems as $system){
                if($system->companyID == Auth::User()->companyID){
                    array_push($systemsToShow, $system);
                }
            }
        }
        else{
            foreach($systems as $system){
                if($system->userID == Auth::User()->id){
                    array_push($systemsToShow, $system);
                }
        }
        return view('pages.systems')->with('systems',$systemsToShow);
    }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function sendLocation(Request $request){
        $id= $request->id;
        $system = System::find($id);
        
        $latitude = $system->latitude;
        $longitude = $system->longitude;
        $location = [];
        array_push($location, $latitude);
        array_push($location, $longitude);
        
       return response()->json($location,201);
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'type' => 'required',
            'description'=>'required',
            'latitude'=>'required',
            'longitude'=>'required'
            
        ]);
        $systemName = $request->input('name');
        $systemCompanyID = $request->input('companyID');
        $systemUserID = $request->input('userID');
        $systemType = $request->input('type');
        $systemDescription = $request->input('description');
        $systemLatitude = $request->input('latitude');
        $systemLongitude = $request->input('longitude');
        $system = new System();
        $system->name=$systemName;
        $system->companyID=$systemCompanyID;
        $system->userID=$systemUserID;
        $system->type= $systemType;
        $system->latitude = $systemLatitude;
        $system->longitude= $systemLongitude;
        $system->description=$systemDescription;

        $system->save();
        return redirect('/systems');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $system = System::find($request->id);
        $system->name=$request->name;
        $system->type=$request->type;
        $system->description= $request->description;
        $system->save();
        return redirect('/systems');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $system = System::find($id);
        $system->delete();
        return redirect('/systems');
    }
}
