<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiConstants;

use App\Models\Education\EducationServiceProvider;
use App\Models\Education\EducationServiceProviderCourse;
use App\Models\Education\EduExamFees;
use App\Models\Education\EduResults;
use App\Models\Education\EduSubCategory;

use App\Http\Requests;
use App\Http\Controllers\Controller;
include(app_path() . '/Helpers/api.php');

class Education_allController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $arr = join_table(new EducationServiceProvider, array(
                array(
                        "variable" => "EducationServiceProviderCourse",
                        "node" => new EducationServiceProviderCourse,
                        "from" => "identifier_id",
                        "to" => "identifier_id"
                    ),
                array(
                        "variable" => "EduExamFees",
                        "node" => new EduExamFees,
                        "from" => "identifier_id",
                        "to" => "identifier_id"
                    ),
                array(
                        "variable" => "EduResults",
                        "node" => new EduResults,
                        "from" => "identifier_id",
                        "to" => "identifier_id"
                    ),
                array(
                        "variable" => "EduSubCategory",
                        "node" => new EduSubCategory,
                        "from" => "category_id",
                        "to" => "category_id"
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

