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
			$keyword = "fdaskdfsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaafdsafsdafsafds";
		//all combination
		$search = DB::select("Select t.ttitle, t.duration, t.tgenre, t.artistname from track t natural join album al Where t.ttitle LIKE '%{$keyword}%' or t.artistname LIKE '%{$keyword}%' or al.altitle LIKE '%{$keyword}%'");

		//search track
		$searchTrack = DB::select("Select t.tid, t.ttitle, t.duration, t.tgenre, t.artistname from track t Where t.ttitle LIKE '%{$keyword}%'");

		//search artist
		$searchArtist = DB::select("Select a.aid, a.aname, a.atype, a.adescription from artist a Where a.aname LIKE '%{$keyword}%'");

		//search album
		$searchAlbum = DB::select("Select * from album Where altitle LIKE '%{$keyword}%'");




		return view('search',compact('seachTop','searchTrack','searchArtist','searchAlbum'));		
	}

}





?>