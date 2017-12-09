<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


/**
* 
*/
class TrackController extends Controller
{
	public function search(Request $request){
		
		//List all songs where the track title or artist title matches some set of keywords
		$keyword = $request->input('keyword');
		if($keyword == '')
			$keyword = "your input is empty, make me embrass";

		//all combination
		$search = DB::select("Select t.ttitle, t.duration, t.tgenre, t.artistname from track t natural join album al Where t.ttitle LIKE '%{$keyword}%' or t.artistname LIKE '%{$keyword}%' or al.altitle LIKE '%{$keyword}%'");

		//search track
		$searchTrack = DB::select("Select t.tid, t.ttitle, t.duration, t.tgenre, t.artistname from track t Where t.ttitle LIKE '%{$keyword}%'");

		//search artist
		$searchArtist = DB::select("Select a.aid, a.aname, a.atype, a.adescription from artist a Where a.aname LIKE '%{$keyword}%'");

		//search album
		$searchAlbum = DB::select("Select * from album Where altitle LIKE '%{$keyword}%'");

		//search playlist
		$searchPlaylist = DB::select("Select * from playlist Where ptitle LIKE '%{$keyword}%'");



		return view('search',compact('searchPlaylist','searchTrack','searchArtist','searchAlbum'));		
	}

	//calcuate the sum of tracks, playlists and album for index page
	public function numbers(){
		
		//index get all numbers for each category
		$tk = DB::select("select count(tid) as ct from track");
		$pl = DB::select("select count(pid) as ct from playlist");
		$al = DB::select("select count(alid) as ct from album");
		$data = array(
            'trackNumber'=> $tk[0]->ct,
            'plNumber'=>$pl[0]->ct,
            'albumNumber'=>$al[0]->ct
            );

		//display latest 5 records each

		// track
		$displayTrack = DB::select("select * from track order by tid DESC limit 5");

		// album
		$displayAlbum = DB::select("select * from album order by aldate DESC limit 5");

		// playlist
		$displayPlaylist = DB::select("select * from playlist order by pldate DESC limit 5");

        return view('index',compact('data','displayTrack','displayAlbum','displayPlaylist') );

		
	}


}





?>