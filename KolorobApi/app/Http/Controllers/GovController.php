<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiConstants;

use App\Models\Gov\Gov;
use App\Models\Gov\ServiceCenter;
use App\Models\Gov\ServiceCenterData;

use App\Http\Requests;
use App\Http\Controllers\Controller;
include(app_path() . '/Helpers/api.php');

class GovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $arr = Gov::get();


        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function service_center()
    {
        $arr = ServiceCenter::get();


        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }

    public function service_center_data()
    {
        $arr = ServiceCenterData::get();


        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
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

