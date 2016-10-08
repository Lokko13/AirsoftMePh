<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AirsoftSite;

class AirsoftSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AirsoftSite::all();
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
    public function store(Request $request)
    {
        $site = new AirsoftSite;
        $site->name = $request->name;
        $site->longitude = $request->longitude;
        $site->latitude = $request->latitude;
        $site->game_fee = $request->game_fee;
        $site->host_id = $request->host_id;
        $site->save();

        if($site !== null){
            return array(
                'status_code' => '200',
                'message' => 'Airsoft Site saved with Id:' . $site->id,
                'data' => $site
            );
        }
        else{
            return array(
                'status_code' => '500',
                'message' => 'Internal Server Error'
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $site = AirsoftSite::find($id);

        if($site !== null){
            return $site;
        }
        else{
            return array(
                'status_code' => '404',
                'message' => 'Not Found'
            );
        }
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
        $site = AirsoftSite::find($id);

        if($site !== null){
            $site->name = isset($request->name)? $request->name : $site->name;
            $site->longitude = isset($request->longitude)? $request->longitude : $site->longitude;
            $site->latitude = isset($request->latitude)? $request->latitude : $site->latitude;
            $site->game_fee = isset($request->game_fee)? $request->game_fee : $site->game_fee;
            $site->host_id = isset($request->host_id)? $request->host_id : $site->host_id;
            $site->save();
            
            return array(
                'status_code' => '200',
                'message' => 'Airsoft Site with Id:' . $site->id . ' has been updated',
                'data' => $site
            );
        }
        else{
            return array(
                'status_code' => '404',
                'message' => 'Not Found'
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $site = AirsoftSite::find($id);

        if($site !== null){
            $site->delete();
            return array(
                'status_code' => '200',
                'message' => 'Airsoft Site with Id:' . $site->id . ' has been deleted'
            );
        }
        else{
            return array(
                'status_code' => '404',
                'message' => 'Not Found'
            );
        }
    }
}
