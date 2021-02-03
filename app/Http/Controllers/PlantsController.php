<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $plants = Plant::All();
        
        $plantsToShow = array();
        $id=$request->id;
        foreach($plants as $plant){
            if($plant->system_id==$request->id){
                array_push($plantsToShow,$plant);
            }
        }
        return view('pages.plants')->with(compact('plantsToShow','id'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showStoreForm(Request $request){
        return view('pages.addPlant')->with('id',$request->id);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'type'=>'required',
            'description' => 'required'
        ]);
        $plantName = $request->input('name');
        $plantType = $request->input('type');
        $plantDescription = $request->input('description');
        $plantSystemID = $request->input('systemID');
        $plant = new Plant();
        $plant->name = $plantName;
        $plant->type = $plantType;
        $plant->description = $plantDescription;
        $plant->system_id = $plantSystemID;
        $plant->save();
        return redirect('/systems/'.$plantSystemID);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $plant = DB::table('plants')->where('id', $request->plantid)->first();
        $sensors = Sensor::All();
        $sensorsToShow = array();
        foreach($sensors as $sensor){
            if($sensor->plant_id==$plant->id){
                array_push($sensorsToShow, $sensor);
            }
        }
        return view('pages.statistics')->with(compact('plant','sensorsToShow'));

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
        $plant= Plant::find($request->id);
        $plant->name= $request->name;
        $plant->type=$request->type;
        $plant->description=$request->description;
        $plant->save();
        return redirect('/systems/'.$request->system_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
        public function destroy(Request $request)
        {
            $plant = Plant::find($request->id);
            $plant->delete();
            return redirect('/systems/'.$request->system_id);
        }
   
}
