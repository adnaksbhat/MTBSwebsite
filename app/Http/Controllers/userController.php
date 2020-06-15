<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\movie;
use App\theatre;
use App\booking;
use Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    //
     // public function store(Request $req){

     //        $email = $req->input('email');
     //        $user = $req->input('name');
     //        $pass = $req->input('pass');
     //        $user = new user;
     //        $user->id=NULL;
     //        $user->email = $email;
     //        $user->username = $user;
     //        $user->password = $pass;
     //        if($user->save()){
     //            return redirect('/main');}
     //        else{
     //            return redirect('register');
     //        }
     //    }



                public function store(Request $request){
                  

                 $result=DB::insert("insert into \"user\" values (DEFAULT,? ,? ,?)", [$request->input('name'),$request->input('pass'), $request->input('email')]);
                   
                    return redirect('/');
                }













    public function login(Request $req){
    	$r_user = $req->input('user');
    	$r_pass = $req->input('pass');
    	$res = user::where('username','=',$r_user)->where('password','=',$r_pass)->get();
    	if(count($res)>0){
    		$id = user::where('username','=',$r_user)->where('password','=',$r_pass)->value('id');
    		Session::put('id',$id);
    		return redirect('/main');
    	}
    	else{
    		return redirect('/');
    	}
    }

    public function book(){
    	$res = movie::all();
    	return view('show_movies',compact('res'));
    }
    public function booking($id){
    	$res = movie::where('id','=',$id)->get();
    	$res2 = theatre::all();
    	return view('booking',compact('res','res2'));
    }
    public function bookNow(Request $req){
    	$uid = Session::get('id');
        $uemail=user::where('id','=',$uid)->value('email');
    	$mname = $req->input('mname');
    	$tname = $req->input('tname');
    	$not = $req->input('no');
    	$book = new booking;
    	$mid = movie::where('mname','=',$mname)->value('id');
    	$tid = theatre::where('tname','=',$tname)->value('id');
        $seats = theatre::where('tname','=',$tname)->value('seats');
        if($not > $seats){
            // echo "<script>alert('Housefull');
            //  </script>";

            // return redirect('/book')->with('status','------Housefull------');

             echo "<script>
                    alert('Housefull!! :(');
                    window.location.href = '/book';
                </script>";
        }
        $cseats = $seats - $not;
        theatre::where('tname','=',$tname)->update(['seats'=>$cseats]);
    	$book->uid = $uid;
    	$book->mid = $mid;
    	$book->tid = $tid;
    	$book->not = $not;
    	if($book->save()){
 			$mres = movie::where('mname','=',$mname)->get();
 			$tres = theatre::where('tname','=',$tname)->get();
 			$bres = booking::where('mid','=',$mid)->where('tid','=',$tid)->where('not','=',$not)->get();



 			return view('book_details',compact('mres','tres','bres','uemail'));
    	}

    }
}
