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
include(app_path() . '/Helpers/api.php');

class Legal_allController extends Controller
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
                        "from" => "category_id",
                        "to" => "category_id"
                    ),
                array(
                        "variable" => "LegalAdvice",
                        "node" => new LegalAdvice,
                        "from" => "identifier_id",
                        "to" => "identifier_id"
                    ),
                array(
                        "variable" => "Salishi",
                        "node" => new Salishi,
                        "from" => "identifier_id",
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
