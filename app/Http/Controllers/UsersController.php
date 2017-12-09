<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

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


	public function rate(){
		
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
	}

	//list user information
	public function info(){

		$uname =  Session::get('uname');
		$lists = DB::select('Select * from users where uname = ?',[$uname]);
	
		return view('account',compact('lists'));		

	}

	public function follow(){

		//follow
		$uname1 =  Session::get('uname');
		$uname2 =  "test";
		DB::insert('insert into follow(uname,followerName,ftime) values (?,?,?)',[$uname2,$uname1,now()]);
		
		//return view('',compact('followlist'));		
	}

	public function likes(){

		//like
		$uname =  Session::get('uname');
		$aid = "1uNFoZAHBGtllmzznpCI3s";
		DB::insert('insert into likes(uname,aid,ltime) values (?,?,?)',[$uname,$aid,now()]);	
		//return view('',compact('followlist'));		

	}
	
	



	


}





?>