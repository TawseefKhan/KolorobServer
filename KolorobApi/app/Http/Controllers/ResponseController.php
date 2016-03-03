<?php

namespace App\Http\Controllers;

use App\ApiConstants;
use App\Http\Requests;

class ResponseController extends Controller
{

    // Success-responders
    public static function getSuccessResponse( $arr = array() ) {
        $ret = array(ApiConstants::$KEY_STATUS => ApiConstants::$KEY_SUCCESS);
        $ret = array_merge($ret, $arr);
        return json_encode($ret);
    }

    // Error-responders
    public static function getErrorResponse( $arr = array() ) {
        $ret = array(ApiConstants::$KEY_STATUS => ApiConstants::$KEY_ERROR);
        $ret = array_merge($ret, $arr);
        return json_encode($ret);
    }

    // Error-responders
    public static function getTokenFailedResponse( $arr = array() ) {
        $ret = array(ApiConstants::$KEY_STATUS => ApiConstants::$KEY_ERROR_AUTH);
        $ret = array_merge($ret, $arr);
        return json_encode($ret);
    }

    // Error-responders
    public static function getInvalidDataResponse( $arr = array() ) {
        $ret = array(ApiConstants::$KEY_STATUS => ApiConstants::$KEY_ERR_INVALID);
        $ret = array_merge($ret, $arr);
        return json_encode($ret);
    }
}
