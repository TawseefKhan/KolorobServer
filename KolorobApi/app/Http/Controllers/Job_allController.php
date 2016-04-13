<?php

namespace App\Http\Controllers;

use App\Models\Job\ServiceProvider;
use App\Models\Job\Subcategory;
use App\Models\Job\TypeSubcategory;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ApiConstants;
include(app_path() . '/Helpers/api.php');

class Job_allController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $arr = join_table(new ServiceProvider, array(
                array(
                        "variable" => "Subcategory",
                        "node" => new Subcategory,
                        "from" => "job_subcategory_id",
                        "to" => "job_subcategory_id"
                    ),
                array(
                        "variable" => "TypeSubcategory",
                        "node" => new TypeSubcategory,
                        "from" => "serviceprovider_id",
                        "to" => "identifier_id"
                    )
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
