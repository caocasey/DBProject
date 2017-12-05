<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
/**
* 
*/
class ArtistController extends Controller
{
	//Get selected artist information
	public function info($aid){
		
		$lists = DB::select('Select aid, aname, atype, adescription from artist where aid = ?',[$aid]);
		$aname = $lists[0]->aname; 
		
		//get all the album list by select artist
		$albumlists = DB::select('Select alid from track where artistname = ?',[$aname]);
		return view('artist',compact('lists', 'albumlists'));		
	}


	//For each artist, list their ID, name, and how many times their tracks have been played by users
	public function list(){
		$lists = DB::select('Select a.aid, a.aname, count(distinct ptime) From artist a left join track t on a.aid = t.aid left join playrecord pl on pl.tid = t.tid Group by a.aid, a.aname');
		dd($lists);
		//return view('',compact('lists'));		
	}


	//List all artists that are mainly playing a type of track
	public function listWithGenre(){
		$genre = "Jazz";
		$listWithGenre = DB::select("Select temp1.aid from 
										(Select aid, count(distinct tid) as ct From track Where tgenre='{$genre}' Group by aid) as temp1, 
										(Select aid, count(distinct tid) as ct
											From track Group by aid) as temp2
									Where temp1.aid = temp2.aid and temp1.ct >= temp2.ct/2");


		dd($listWithGenre);
		//return view('',compact('listWithGenre'));		
	}

	//Find pairs of related artists, where two artists are related if they have many fans in common.
	public function commonFuns(){
		$commonFuns = DB::select('Select a1.aid as artist1, a2.aid as artist2 From (select * from artist natural join likes ) as a1, (select * from artist natural join likes ) as a2 Where a1.aid < a2.aid and a1.uname = a2.uname Group by a1.aid, a2.aid Having count(a1.uname) >= ((Select count(uname) From likes Where aid = a1.aid)+(Select count(uname) From likes Where aid = a2.aid)-count(a1.uname))/2');
		dd($commonFuns);
		//return view('',compact('commonFuns'));		
	}
}





?>