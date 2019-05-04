<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use App\Comment;
use DB;

class ArtikelController extends Controller
{
    public function index()
    {
    	$artikel=artikel::all();
    	// var_dump($artikel); return;
		return view('artikel.index',compact('artikel'));
    }
}
