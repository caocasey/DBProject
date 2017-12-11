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
		date_default_timezone_set('America/New_York');
		
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
		$tracks = DB::select("Select * from playlistTrack p join track t on p.tid=t.tid where pid=?",[$pid]);
		return view('playlist',compact('pl','tracks'));	
	}

	public function playlistplay(Request $ans){

		$pid = $ans->pid;
        return view('playlistplay',compact('pid'));

		
	}

	public function addTrack(Request $ans){

		$tid = $ans->tid;
		Session::put('addtid', $tid);
		
		$uname =  Session::get('uname');
		$data = DB::select("Select * from playlist where uname=?",[$uname]);

        return view('addtoplaylist',compact('tid', 'data'));

		
	}

	public function adding(Request $ans){

		$pid = $ans->input('adding');
		$tid =  Session::get('addtid');

		//insert track to playlist
		DB::insert('insert into playlistTrack(pid,tid) values (?,?)',[$pid,$tid]);
			
		$url = "playlist/".$pid;
        return redirect($url);

		
	}





}





?>