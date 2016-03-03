<?php

namespace App\Http\Controllers;

use App\Models\Entertainment\EntBookShop;
use App\Models\Entertainment\EntCentre;
use App\Models\Entertainment\EntField;
use App\Models\Entertainment\EntFitnessBeauty;
use App\Models\Entertainment\EntMusicalGroup;
use App\Models\Entertainment\EntNGO;
use App\Models\Entertainment\EntPark;
use App\Models\Entertainment\EntServiceProvider;
use App\Models\Entertainment\EntShishuPark;
use App\Models\Entertainment\EntTheatre;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ApiConstants;

class EntertainmentController extends Controller
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

        $arr2 = EntServiceProvider::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntBookShop::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntCentre::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntField::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntFitnessBeauty::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntMusicalGroup::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntNGO::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntPark::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntShishuPark::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        $arr2 = EntTheatre::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }



    public function EntBookShop()
    {
        $arr2 = EntBookShop::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function EntCentre()
    {
        $arr2 = EntCentre::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function EntField()
    {
        $arr2 = EntField::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function EntFitnessBeauty()
    {
        $arr2 = EntFitnessBeauty::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function EntMusicalGroup()
    {
        $arr2 = EntMusicalGroup::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function EntNGO()
    {
        $arr2 = EntNGO::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function EntPark()
    {
        $arr2 = EntPark::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function EntShishuPark()
    {
        $arr2 = EntShishuPark::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function EntTheatre()
    {
        $arr2 = EntTheatre::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
    /*API Resource Listing Ends*/




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
