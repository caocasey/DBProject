<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
/**
* 
*/
class TrackController extends Controller
{
	public function search(){
		
		//List all songs where the track title or artist title matches some set of keywords
		$keyword = "love";
		$search = DB::select("Select t.ttitle, a.aname, t.duration, t.tgenre, a.atype
							  From track t join artist a on a.aid = t.aid
							  Where t.ttitle LIKE '%{$keyword}%' or a.aname LIKE '%{$keyword}%'
							");
		dd($search);
		//return view('',compact('search'));		
	}

}





?>