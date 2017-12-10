<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


/**
* 
*/
class AlbumController extends Controller
{

	public function albumplay(Request $ans){

		$alid = $ans->alid;
		$uname =  Session::get('uname');

		DB::insert('insert into albumrecord(uname, alid, apdate) values (?,?,?)',[$uname,$alid,now()]);

        return view('albumplay',compact('alid'));

		
	}




}





?>