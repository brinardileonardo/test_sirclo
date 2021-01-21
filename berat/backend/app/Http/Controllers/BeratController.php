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

        $data_update = [
            'tanggal'   => $tanggal,
            'min'       => $min,
            'max'       => $max
        ];
        DB::table('tbl_berat')->where('id',$id)->update($data_update);

        $content = array(
            'code' => '00',
            'message' => 'Success Update'
        );

        return response($content, 200);
    }


    public function SaveData(Request $request){
        $dtIn = file_get_contents('php://input');
        $request = json_decode($dtIn, true);

        $tanggal = $request['tanggal'];
        $max     = $request['max'];
        $min     = $request['min'];

        DB::table('tbl_berat')->insert([
            'tanggal' => $tanggal,
            'min' => $min,
            'max' => $max
        ]);

        $content = array(
            'code' => '00',
            'message' => 'Insert Data Berhasil'
        );

        return response($content, 200);
    }
}