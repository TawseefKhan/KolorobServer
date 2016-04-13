<?php

namespace App\Http\Controllers;

use App\Models\Health\HNode;
use App\Models\Health\HPharmacy;
use App\Models\Health\HService;
use App\Models\Health\HSpecialist;
use App\Models\Health\HVaccine;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ApiConstants;

class Health_newController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arr = array();
        $i = 0;

        $nodes = HNode::get();


        $i=0;
        foreach($nodes as $node)
        {
            $arr[$i] = $node;
            $arr[$i]["pharmacy"] = DB::table('h_pharmacy')->get();
            $arr[$i]["service"] = HService::where('node_id', $node["node_id"]);
            $arr[$i]["specialist"] = HSpecialist::where('node_id', $node["node_id"]);
            $arr[$i]["vaccine"] = HVaccine::where('node_id', $node["node_id"]);
        }


        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
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
        //
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
        //
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
