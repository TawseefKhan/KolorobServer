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

include(app_path() . '/Helpers/api.php');

class Health_allController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = join_table(new HNode, array(
                array(
                        "variable" => "pharmacy",
                        "node" => new HPharmacy,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "service",
                        "node" => new HService,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "specialist",
                        "node" => new HSpecialist,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "vaccine",
                        "node" => new HVaccine,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
            ));


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
