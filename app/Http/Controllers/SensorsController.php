<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Sensor;
use \App\Models\Mqttdata;
use Illuminate\Support\Facades\DB;

class SensorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sensors = Sensor::All();
        $mqttdatasdb = Mqttdata::All();
        $sensorsToShow=array();
        $mqttdatas=array();
        $dataToSend= array();
        foreach($sensors as $sensor){
            if($request->plantid == $sensor->plant_id){
                array_push($sensorsToShow, $sensor);
                foreach($mqttdatasdb as $mqttdata){
                    if($sensor->topic == $mqttdata->topic){
                        array_push($mqttdatas, $mqttdata);
                    }   
                }
            }
        }
        array_push($dataToSend, $sensorsToShow);
        array_push($dataToSend, $mqttdatas);
      
        return response()->json($dataToSend,201);
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
        return view('pages.addSensor')->with('id',$request->plantid);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'topic' => 'required',
            'plant_id'=>'required'
            
        ]);
        $sensorName = $request->name;
        $sensorTopic = $request->topic;
        $sensorPlantId = $request->plant_id;
        $sensor = new Sensor();
        $sensor->name = $sensorName;
        $sensor->topic = "/plantsego/".$sensorTopic;
        $sensor->plant_id = $sensorPlantId;
        $sensor->save();
       return redirect('/systems/'.$request->system_id.'/'.$request->plant_id);
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
    public function update(Request $request, $id)
    {
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       
            $system = Sensor::find($request->id);
            $system->delete();
            return redirect('/systems/'.$request->systemId.'/'.$request->plantId);
      
    }
}
