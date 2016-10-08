<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Team::all();
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
        $team = new Team;
        $team->name = $request->name;
        $team->save();

        if($team !== null){
            return array(
                'status_code' => '200',
                'message' => 'Team saved with Id:' . $team->id,
                'data' => $team
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
        $team = Team::find($id);

        if($team !== null){
            return $team;
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
        $team = Team::find($id);

        if($team !== null){
            $team->name = isset($request->name)? $request->name : $team->name;
            $team->save();

            return array(
                'status_code' => '200',
                'message' => 'Team with Id:' . $team->id . ' has been updated',
                'data' => $team
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
        $team = Team::find($id);

        if($team !== null){
            $team->delete();
            return array(
                'status_code' => '200',
                'message' => 'Team with Id:' . $team->id . ' has been deleted'
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
