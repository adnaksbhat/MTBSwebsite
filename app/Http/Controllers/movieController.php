<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;



// use App\actor;
// use App\director;
use App\movie;
use App\user;
// use App\music;
// use App\user;
use App\admin;
use App\theatre;
use App\songs;
use App\userauth;
use App\booking;


class movieController extends Controller
{
    //
    // public function login(Request $req){
    //     $r_user = $req->input('user');
    //     $r_pass = $req->input('pass');
    //     $user = movie::where('username','=',$r_user)->get();
    //     $pass = movie::where('password','=',$r_pass)->get();
    //     if(count($user)>0 && count($pass)>0){
    //         return view('main');
    //     }
    //     else{
    //         return redirect('/')->with('status','Username/Password Incorrect');
    //     }
    // }
    // public function reg(Request $req){
    //     $user = new user;
    //     $r_user = $req->input('user');
    //     $r_pass = $req->input('pass');
    //     $r_mail = $req->input('email');
    //     $user->name = $r_user;
    //     $user->password = $r_pass;
    //     $user->email = $r_mail;
    //     if($user->save()){
    //         return view('index');
    //     }
    // }
    // public function add(Request $req){
    //     $movie = new movie;
    //     $name = $req->input('name');
    //     $movie->name = $name;

    //     $genre = $req->input('genre');
    //     $movie->genre=$genre;

    //     $imdb = $req->input('imdb');
    //     $movie->imdb=$imdb;

    //     $cast = $req->input('cast');
    //     $movie->cast=$cast;












    //     if($movie->save()){
    //         return redirect('/add')->with('status','Successfullllll');
    //     }
    //     }



    


       
    //     public function auth(Request $req)
    // {
    // 	$usera = $req->input('user');
    // 	$passa = $req->input('pass');
    // 	$p = student::where('username','=',$usera)
    //                 ->where('password','=',$passa)
    //                 ->get();

    	 

    // 	if(count($p)>0)
    // 	{  
    //         $usn = student::where('username','=',$usera)
    //                 ->where('password','=',$passa)
    //                 ->value('usn');
    //                 Session::put('usn',$usn);
    // 		echo "<script>
    // 			window.location = '/home';
    // 			</script>
    // 		";
    		
    // 	}
    //     else{
    //         echo "
    //         <script>
    //         alert('Username or Password incorrect');
    //         window.location = '/';
    //         </script>
    //         ";          
    //     }
    	


    //      public function home()
    // {
    //     $usn = Session::get('usn');
    //     $res = student::where('usn','=',$usn)->get();
    //     return view('student_home',compact('res'));
    // public function logged_in(Request $req){
    //     $usera=$req->input('user');
    //     $passa=$req->input('pass');
    //         $p = movie::where('username','=',$usera)
    //                 ->where('password','=',$passa)
    //                 ->post();

         

        // if(count($p)>0)
        // {  
            
               
        //     echo "<script>
        //         window.location = '/main';
        //         </script>
        //     ";
            
        // }
        // else{
        //     echo "
        //     <script>
        //     alert('Username or Password incorrect');
        //     window.location = '/';
        //     </script>
        //     ";          
        // }
        
// 
    // }













    ///////////////////////////////admin////////////////////////////////////
    public function adminLogin(Request $req){
        $r_user = $req->input('username');
        $r_pass = $req->input('password');
        $res = admin::where('username','=',$r_user)->where('password','=',$r_pass)->get();
        if(count($res)>0){
            return redirect('/adminhome');
        }
        else
        {
            return redirect('admin_login');
        }

    }

    //to put into db
    public function add_movie(Request $req){
        //variable =$req->input(name near placeholder)
        $mname=$req->input('mname');
        $genre=$req->input('genre');
        $imdb=$req->input('imdb');


        $movie = new movie;
        //movi database du object create aaitu
        $movie->mname = $mname;

        // variable->databaseattribute=variable above
        $movie->genre = $genre;
        $movie->imdb = $imdb;
        if($movie->save()){
            return redirect('/adminhome')->with('status','Save Successfullllll');
        }
        else{
            return redirect('/addmovies')->with('status','Error');
        }

    }


    //to read from db

    public function viewmovies(){
        $res = movie::all();
                    //blade name       
        return view('viewmovies',compact('res'));

    }







      public function add_theatre(Request $req){
        //variable =$req->input(name near placeholder)
        $tname=$req->input('tname');
        $location=$req->input('location');
        $seats=$req->input('seats');


        $theatre = new theatre;
        //movi database du object create aaitu
        $theatre->tname = $tname;

        // variable->databaseattribute=variable above
        $theatre->location = $location;
        $theatre->seats = $seats;
        if($theatre->save()){
            return redirect('/adminhome')->with('status','Save Successfullllll');
        }
        else{
            return redirect('/addtheatre')->with('status','Error');
        }

    }

        public function viewtheatre(){
        $res = theatre::all();
                    //blade name       
        return view('viewtheatre',compact('res'));

    }








      public function add_booking(Request $req){
        //variable =$req->input(name near placeholder)
        $mname=$req->input('mname');
        $tname=$req->input('tname');
        $seats=$req->input('seats');


        $theatre = new theatre;
        //movi database du object create aaitu
        $theatre->tname = $tname;

        // variable->databaseattribute=variable above
        $theatre->location = $location;
        $theatre->seats = $seats;
        if($theatre->save()){
            return redirect('/adminhome')->with('status','Save Successfullllll');
        }
        else{
            return redirect('/addtheatre')->with('status','Error');
        }

    }

           public function viewbooking(){
        $res = booking::all();
                    //blade name       
        return view('viewbooking',compact('res'));

    }


    //new


       


        // public function reg(Request $req){
        //     $email = $req->input('email');
        //     $user = $req->input('user');
        //     $pass = $req->input('pass');
        //     $user = new userauth;
        //     $user->email = $email;
        //     $user->username = $user;
        //     $user->password = $pass;
        //     if($user->save()){
        //         return view('reg_sucess');
        //     }
        //     else{
        //         return redirect('register');
        //     }
        // }

        public function add_songs(Request $req){
            $sname = $req->input('sname');
            $mname = $req->input('mname');
            $id = movie::where('mname','=',$mname)->value('id');
            $song = new songs;
            $song->sname = $sname;
            $song->mid = $id;
            $song->save();
            return redirect('/addsongs');
        }

        public function cancel($id){
            $tid = booking::where('id','=',$id)->value('tid');
            $not = booking::where('id','=',$id)->value('not');
            $seats = theatre::where('id','=',$tid)->value('seats');
            $tseats = $not + $seats;
            theatre::where('id','=',$tid)->update(['seats'=>$tseats]);
            $res = booking::where('id','=',$id)->delete();
            if($res){
                echo "<script>
                    alert('Tickets Canceled');
                    window.location.href = '/viewbooking';
                </script>";
            }
            else{
                echo "<script>
                    alert('Something went wrong');
                    window.location.href = '/viewbooking';
                </script>";
            }
        }






        public function newdetails($uid,$mid,$tid){
            
                  $uname=user::where('id','=',$uid)->value('username');
                  $uemail=user::where('id','=',$uid)->value('email');

                  $mname=movie::where('id','=',$mid)->value('mname');
                   $tname=theatre::where('id','=',$tid)->value('tname');


return view('newdetails',compact('uname','uemail','mname','tname'));

           
        }





    




      
  




    ////////////////////////////////////////////////////////////////////

}


