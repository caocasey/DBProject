<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


/**
* 
*/
class PlaylistController extends Controller
{
	public function createPlaylist(Request $request){
		
		$uname =  Session::get('uname');
		$plname = $request->input('plname');
		$private = $request->input('private');

		if($private == "on")
			$private = 1;
		else
			$private = 0;
		
		DB::insert('insert into playlist(ptitle,pldate,private,uname) values (?,?,?,?)',[$plname,now(),$private,$uname]);
			
		return redirect('index');		
	}


	public function list(Request $ans){
		
		$uname =  Session::get('uname');
		$pid = $ans->pid;

		$pl = DB::select("Select * from playlist where pid=?",[$pid]);
		return view('playlist',compact('pl'));	
	}

	public function playlistplay(Request $ans){

		$pid = $ans->pid;
        return view('playlistplay',compact('pid'));

		
	}




}





?>