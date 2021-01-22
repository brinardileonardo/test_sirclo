<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class BeratController extends Controller
{
    public function UpdateData(Request $request){
        $dtIn = file_get_contents('php://input');
        $request = json_decode($dtIn, true);

        $id      = $request['id'];
        $tanggal = $request['tanggal'];
        $min     = $request['min'];
        $max     = $request['max'];

        $request_db = array(
            'Api' => 'Request Update Berat',
            'id'  => $id,
            'tanggal' => $tanggal,
            'max' => $max,
            'min' => $min
        );
        $message = json_encode($request_db);

        $message_type = '01RQ';
        $from_api = 'UpdateData';
        $save_log = app('App\Http\Controllers\LogController')->SaveLog($message, $message_type, $from_api);

        $data_update = [
            'tanggal'   => $tanggal,
            'min'       => $min,
            'max'       => $max
        ];
        DB::table('tbl_berat')->where('id',$id)->update($data_update);

        $content = array(
            'code' => '00',
            'message' => 'Update Data Berhasil'
        );

        $message_type = '02RP';
        $save_log = app('App\Http\Controllers\LogController')->SaveLog(json_encode($content), $message_type, $from_api);

        return response($content, 200);
    }


    public function SaveData(Request $request){
        $dtIn = file_get_contents('php://input');
        $request = json_decode($dtIn, true);

        $tanggal = $request['tanggal'];
        $max     = $request['max'];
        $min     = $request['min'];

        $request_db = array(
            'Api' => 'Request Save Berat',
            'tanggal' => $tanggal,
            'max' => $max,
            'min' => $min
        );
        $message = json_encode($request_db);

        $message_type = '01RQ';
        $from_api = 'SaveData';
        $save_log = app('App\Http\Controllers\LogController')->SaveLog($message, $message_type, $from_api);


        DB::table('tbl_berat')->insert([
            'tanggal' => $tanggal,
            'min' => $min,
            'max' => $max
        ]);

        $content = array(
            'code' => '00',
            'message' => 'Insert Data Berhasil'
        );

        $message_type = '02RP';
        $save_log = app('App\Http\Controllers\LogController')->SaveLog(json_encode($content), $message_type, $from_api);


        return response($content, 200);
    }
}