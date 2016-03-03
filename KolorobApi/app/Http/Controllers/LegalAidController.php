<?php

namespace App\Http\Controllers;

use App\Models\Legal_aid\LegalAdvice;
use App\Models\Legal_aid\Salishi;
use App\Models\Legal_aid\ServiceProvider;
use App\Models\Legal_aid\Subcategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ApiConstants;

class LegalAidController extends Controller
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
	$arr2 = ServiceProvider::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );

    }
     public function salishi()
    {
        //
        $arr = array();
        $i = 0;
    $arr2 = Salishi::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );

    }
     public function advice()
    {
        //
        $arr = array();
        $i = 0;
    $arr2 = LegalAdvice::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        
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
