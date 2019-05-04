<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PertanyaanController extends Controller
{
    //
     public function index()
    {
    	// mengambil data dari table pegawai
    	$pertanyaan = DB::table('questions')->get();
 
    	// mengirim data pegawai ke view index
    	return view('/pertanyaan/index',['pertanyaan' => $pertanyaan]);
 
    }

    public function tambah()
	{
	 
		// memanggil view tambah
		return view('/pertanyaan/tambah');
	 
	}
    public function store(Request $request)
	{
		// insert data ke table pegawai
		$request->id = Auth::id();
		$request->upvote = 0;
		DB::table('questions')->insert([
			'id_user' => $request->id,
			'judul' => $request->judul,
			'pertanyaan' => $request->pertanyaan,
			'upvote' => $request->upvote
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pertanyaan');
	 
	}
}
