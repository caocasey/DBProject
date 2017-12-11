<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Mail;
/**
* 
*/
class UsersController extends Controller
{
	
	public function signup(Request $users){
		

		//Create a record for a new user account, with a name, a login name, and a password.
		//get information from html form 
		$uname = $users->input('uname');
		$urname = $users->input('urname');
		$upassword = $users->input('password1');

		$usex = $users->input('usex');
		$uemail = $users->input('uemail');
		$dbirth = $users->input('dbirth');
		$uphone = $users->input('uphone');

		$country = $users->input('country');
		$state = $users->input('state');
		$city = $users->input('city');
		$zip = $users->input('zip');
	
		if($uname == '' || $urname == '' || $upassword  == '' || $uemail  == '' || $country  == '' || $state  == '' || $city  == '')
			return view('signup');

		//session
		Session::put('uname', $uname);

		$uname1 = DB::select('select uname from users where uname = ?',[$uname]);
		if(!empty($uname1))
			return view('exist');
		else{
			$encryptPassword = md5($upassword);
			DB::insert('insert into users(uname,urname,upassword, usex, uemail, dbirth, country, state, city, zip, uphone) values (?,?,?,?,?,?,?,?,?,?,?)',[$uname,$urname,$encryptPassword,$usex,$uemail,$dbirth,$country,$state,$city,$zip,$uphone]);
			return redirect('index');
		}
		
		
		//return view('');
	}
	public function login(Request $users){
	
		$uname = $users->input('uname');
		$password = $users->input('password');
		$encryptPassword = md5($password);
		if($uname == '' || $password  == '')
			return view('login');

		$noUser = DB::select('select uname from users where uname = ?',[$uname]);

		//user name not exist or password not correct
		if(empty($noUser))
			return "User does not exsist";
		$noPassword = DB::select('select uname from users where uname = ? and upassword = ?',[$uname, $encryptPassword]);
		if(empty($noPassword))
			return "Password not correct";


		$uname = DB::select('select uname from users where uname = ? and upassword = ?',[$uname, $encryptPassword]);
		Session::put('uname', $uname[0]->uname);

		return redirect('index');
		//return view('welcome');
	}

	public function logout(){

		Session::put('uname', '');
		return view('welcome');

	}

//task for project1
	/*public function rate(){
		
		//Insert a new rating given by a user for a track.
		//get information from html form 
		//$uname = $rating->input('uname');
		//$tid = $rating->input('tid');
		//$star = $rating->input('star');
		//$rtime = $rating->input('rtime');
	
		$uname = "lily16";
		$tid = 1;
		$star = 3;
		$rtime = "2014-08-16 12:05:00";

		DB::insert('insert into rate(uname,tid,star,rtime) values (?,?,?,?)',[$uname,$tid,$star,$rtime]);
		
		//return view('');
	}

	public function findPlaylist(){
		
		//For a particular user, say “NancyInQueens”, list all playlists that were made by users that she follows.
		//get information from html form 
		//$uname = $rating->input('uname');
		//$tid = $rating->input('tid');
		//$star = $rating->input('star');
		//$rtime = $rating->input('rtime');
	
		$followerName = "NancyInQueens";
		$findPlaylist = DB::select("Select pid, ptitle, pldate, private
									From playlist
									Where uname IN
										(Select uname
										 From follow
										 Where followerName = '{$followerName}' and private = 0)");


		dd($findPlaylist);
		//return view('',compact('findPlaylist'));		
	}*/

	//list user information
	public function info(){

		$uname =  Session::get('uname');
		$lists = DB::select('Select * from users where uname = ?',[$uname]);
	
		return view('account',compact('lists'));		

	}

	/*public function follow(){

		//follow
		$uname1 =  Session::get('uname');
		$uname2 =  "test";
		DB::insert('insert into follow(uname,followerName,ftime) values (?,?,?)',[$uname2,$uname1,now()]);
		
		//return view('',compact('followlist'));		
	}*/
/*for project1 
	public function likes(){

		//like
		$uname =  Session::get('uname');
		$aid = "1uNFoZAHBGtllmzznpCI3s";
		DB::insert('insert into likes(uname,aid,ltime) values (?,?,?)',[$uname,$aid,now()]);	
		//return view('',compact('followlist'));		

	}*/
	
	public function forgot(Request $femail){

		$uemail = $femail->input('femail');
		/*$uname = "Dear";
		$title = "Reset your password";
		$message = "Hi, thank you for your support, please contact admin.";

		Mail::send('welcome', ['title' => $title, 'message' => $message], function ($message) use($uemail)
		{
		    $message->from('yingxi.cao@nyu.edu', 'music');
		    $message->to($uemail);
		});*/
		//dd($uemail);
		return view('email',compact('uemail'));		

	}

	//get user's persionalize information
	public function mymusic(){

		$uname =  Session::get('uname');

		$artistlike = DB::select('select * from likes natural join artist where uname=?',[$uname]);

		$playlist = DB::select('select * from playlist where uname=?',[$uname]);
		$follow = DB::select('select uname from follow where followerName=?',[$uname]);
		//append followplaylist to playlist
		if(!empty($follow)){
			$followplaylist = DB::select('select * from playlist where private=0 and uname=?',[$follow[0]->uname]);
			$totalPlaylist = array_merge($playlist, $followplaylist);
		}else
		$totalPlaylist = $playlist;
		
		


		$tracks = DB::select('select * from track where tid IN (select tid from playrecord where uname=?)',[$uname]);
		$albums = DB::select('select * from album where alid IN (select alid from albumrecord where uname=?)',[$uname]);
		/*$albums1 = DB::select("select a.alid,a.altitle,a.aldate,count(distinct ar.apdate) as ct from album a left join albumrecord ar on a.alid = ar.alid join albumTrack ac on ac.alid = a.alid where uname = ? Group by a.alid ORDER BY `ct` desc limit 5",[$uname]);*/


		return view('mymusic',compact('artistlike','totalPlaylist','tracks','albums'));		


	}


	public function follow(Request $uname){
		
		date_default_timezone_set('America/New_York');
		
		$uname1 = $uname->uname;
		$followername =  Session::get('uname');

		DB::insert('insert into follow(uname,followerName,ftime) values (?,?,?)',[$uname1,$followername,now()]);

		return back();
	}

	public function unfollow(Request $uname){
		
		$uname1 = $uname->uname;
		$followername =  Session::get('uname');

		
		DB::delete('delete from follow where uname= ? and followerName=?',[$uname1,$followername]);
		
		return back();
	}



	


}





?>