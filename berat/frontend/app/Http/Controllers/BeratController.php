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
		DB::table('tbl_berat')->insert([
            'tanggal' => $request->tanggal,
            'max' => $request->berat_max,
            'min' => $request->berat_min
        ]);

        return redirect('/index')->with('message','Sukses Nambah Data');
	}

	public function edit_view($id)
	{
        $berat_data = DB::table('tbl_berat')->where('id', $id)->get();
        return view('berat/edit_berat',['berat_data' => $berat_data]);
	}

	public function update_process(Request $request)
	{
		DB::table('tbl_berat')->where('id',$request->id)->update([
			'tanggal' => $request->tanggal,
            'max' => $request->berat_max,
            'min' => $request->berat_min
		]);

		return redirect('/index')->with('message_edit','Sukses Edit Data');;
	}

    public function show_detail($id)
    {
        $berat_data = DB::table('tbl_berat')->where('id', $id)->get();
        return view('berat/show_berat',['berat_data' => $berat_data]);
    }
}