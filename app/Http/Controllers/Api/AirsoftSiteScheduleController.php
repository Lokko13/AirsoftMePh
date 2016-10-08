<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AirsoftSite;
use App\SiteSchedule;
use Carbon\Carbon;

class AirsoftSiteScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($site_id)
    {
        $site = AirsoftSite::find($site_id);

        if($site !== null){
            return $site->schedules()->get();
        }
        else{
            return array(
                'status_code' => '404',
                'message' => 'Not Found'
            );
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($site_id, Request $request)
    {
        $schedule = new SiteSchedule;
        $game_schedule = Carbon::createFromFormat('m/d/Y', $request->game_schedule)->toDateTimeString();
        $schedule->game_schedule = $game_schedule;
        $schedule->site_id = $site_id;
        $schedule->save();

        if($schedule !== null){
            return array(
                'status_code' => '200',
                'message' => 'Airsoft Site saved with Id:' . $schedule->id,
                'data' => $schedule
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
    public function show($site_id, $id)
    {
        //$schedule = AirsoftSite::find($site_id)->schedules()->where('id', $id)->get();
        $schedule = SiteSchedule::find($id);

        if($schedule !== null){
            return $schedule;
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
    public function update(Request $request, $site_id, $id)
    {
        //$schedule = AirsoftSite::find($site_id)->schedul,es()->where('id', $id)->get();
        $schedule = SiteSchedule::find($id);

        if($schedule !== null){
            $game_schedule = $schedule->game_schedule;

            if(isset($request->game_schedule)){
                $game_schedule = Carbon::createFromFormat('m/d/Y', $request->game_schedule)->toDateTimeString();
            }
            
            $schedule->game_schedule = $game_schedule;
            $schedule->save();
            
            return array(
                'status_code' => '200',
                'message' => 'Airsoft Site with Id:' . $schedule->id . ' has been updated',
                'data' => $schedule
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
    public function destroy($site_id, $id)
    {
        //$schedule = AirsoftSite::find($site_id)->schedules()->where('id', $id)->get();
        $schedule = SiteSchedule::find($id);

        if($schedule !== null){
            $schedule->delete();
            return array(
                'status_code' => '200',
                'message' => 'Airsoft Site with Id:' . $schedule->id . ' has been deleted'
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
