<?php

namespace App\Http\Controllers;

use App\Models\Finance\Bills;
use App\Models\Finance\FNode;
use App\Models\Finance\Insurance;
use App\Models\Finance\Loan;
use App\Models\Finance\PaymentDocs;
use App\Models\Finance\Social;
use App\Models\Finance\Transaction;
use App\Models\Finance\Tuition;
use App\Models\Finance\Tax;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ApiConstants;
include(app_path() . '/Helpers/api.php');

class Finance_allController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $arr = join_table(new FNode, array(
                array(
                        "variable" => "Bills",
                        "node" => new Bills,
                        "from" => "node_id",
                        "to" => "f_node_id"
                    ),
                array(
                        "variable" => "Insurance",
                        "node" => new Insurance,
                        "from" => "node_id",
                        "to" => "f_node_id"
                    ),
                array(
                        "variable" => "Loan",
                        "node" => new Loan,
                        "from" => "node_id",
                        "to" => "f_node_id"
                    ),
                array(
                        "variable" => "PaymentDocs",
                        "node" => new PaymentDocs,
                        "from" => "node_id",
                        "to" => "f_node_id"
                    ),
                array(
                        "variable" => "Social",
                        "node" => new Social,
                        "from" => "node_id",
                        "to" => "f_node_id"
                    ),
                array(
                        "variable" => "Transaction",
                        "node" => new Transaction,
                        "from" => "node_id",
                        "to" => "f_node_id"
                    ),
                array(
                        "variable" => "Tuition",
                        "node" => new Tuition,
                        "from" => "node_id",
                        "to" => "f_node_id"
                    ),
                array(
                        "variable" => "Tax",
                        "node" => new Tax,
                        "from" => "node_id",
                        "to" => "f_node_id"
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

