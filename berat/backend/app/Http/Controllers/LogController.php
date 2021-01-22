<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use GuzzleHttp;
use App\Log;

class LogController extends Controller
{
    public function SaveLog($message,$message_type,$from_api){
        $log_dt = new Log;
        $log_dt->message = $message;
        $log_dt->message_type = $message_type;
        $log_dt->from_api = $from_api;
        $log_dt->created_datetime = date("Y-m-d H:i:s"); 
        $saveInfo = $log_dt->save();

        return $saveInfo;
    }    
}