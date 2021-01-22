<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeratController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$berat_data = DB::table('tbl_berat')->orderBy('tanggal', 'desc')->get();
    	$rata_rata = DB::table('tbl_berat')
    				->selectRaw('AVG(max) as avg_max, AVG(min) as avg_min, AVG(max-min) as avg_perbedaan')
    				->first();
    	return view('berat/index',['berat_data' => $berat_data,'rata_rata' => $rata_rata]);
    }

    public function add_view()
	{
		return view('berat/add_berat');
	}

	public function add_process(Request $request)
	{
        $postfields = array(
            "tanggal" => $request->tanggal,
            "max" => $request->berat_max,
            "min" => $request->berat_min
        );

        $hasil = json_encode($postfields);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://localhost:9000/save_berat');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $hasil);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec ($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close ($ch);

        $a = json_decode($server_output, true);

        if($httpcode == 200){
            return redirect('/index')->with('message',$a['message']);
        }else{
            return redirect('/index')->with('message_error','Api Timeout !');
        }
	}

	public function edit_view($id)
	{
        $berat_data = DB::table('tbl_berat')->where('id', $id)->get();
        return view('berat/edit_berat',['berat_data' => $berat_data]);
	}

	public function update_process(Request $request)
	{
        $postfields = array(
            "id" => $request->id,
            "tanggal" => $request->tanggal,
            "max" => $request->berat_max,
            "min" => $request->berat_min
        );

        $hasil = json_encode($postfields);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://localhost:9000/update_berat');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $hasil);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec ($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close ($ch);

        $a = json_decode($server_output, true);

        if($httpcode == 200){
            return redirect('/index')->with('message',$a['message']);
        }else{
            return redirect('/index')->with('message_error','Api Timeout !');
        }
	}

    public function show_detail($id)
    {
        $berat_data = DB::table('tbl_berat')->where('id', $id)->get();
        return view('berat/show_berat',['berat_data' => $berat_data]);
    }
}