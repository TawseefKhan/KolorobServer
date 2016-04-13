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
include(app_path() . '/Helpers/api.php');

class Entertainment_allController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = join_table(new EntServiceProvider, array(
                array(
                        "variable" => "EntBookShop",
                        "node" => new EntBookShop,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "EntCentre",
                        "node" => new EntCentre,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "EntField",
                        "node" => new EntField,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "EntFitnessBeauty",
                        "node" => new EntFitnessBeauty,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "EntMusicalGroup",
                        "node" => new EntMusicalGroup,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "EntNGO",
                        "node" => new EntNGO,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "EntPark",
                        "node" => new EntPark,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "EntShishuPark",
                        "node" => new EntShishuPark,
                        "from" => "node_id",
                        "to" => "node_id"
                    ),
                array(
                        "variable" => "EntTheatre",
                        "node" => new EntTheatre,
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
