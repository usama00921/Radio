<?php

namespace App\Http\Controllers;

use App\UsersModel;

use Illuminate\Http\Request;
use DB;

class usersinfo extends Controller
{
    //
    public function submit(Request $req){

        //print_r($req->input('Phone_num'));
    //     $req->validate([
    //         'Username' => 'required|max:15|unique:users,username',
    //         'Phone_Number' => 'required',
    //         'Email' => 'required|Email|unique:users,Email',
    //         'password' => 'required|confirmed',
//exit();

    //    ]);
    $user = UsersModel::find($id= '1');
        DB::table('information')
       ->where('Id', 1)
       ->update(
       ['Email' => $req->input('email'),
       'Phone_num' => $req->input('Phone_num'),
       'Address' => $req->input('Address'),
       'Fb_link' => $req->input('Fb_link'),
       'Twitter_link' => $req->input('Twitter_link'),
       'Gmail_link' => $req->input('Gmail_link'),
       'Linked_in' => $req->input('Linked_in'),
       'Internet_link' => $req->input('Internet_link')]);

    //    exit();

    //    $user->Email = $req->input('Email');
       
    //    $user->Phone_num = $req->input('Phone_num');
    //    $user->Address = $req->input('Address');
    //    $user->Fb_link = $req->input('Fb_link');
    //    $user->Twitter_link = $req->input('Twitter_link');
    //    $user->Gmail_link = $req->input('Gmail_link');
    //    $user->Linked_in = $req->input('Linked_in');
    //    $user->Internet_link = $req->input('Internet_link');
    //    $user->save();
        //return redirect('/sign-in');
        return redirect('admin/information')->with('info', $user);

    }

    public function information() {

        $user = UsersModel::find($id= '1');

        return view('/information', compact('user'));

    }







// public function login(Request $req){

// //print_r($req->input());
// $req->validate([

//     'Email' => 'required|Email',
//     'Password' => 'required',
    
//     ]);

//     $email = $req->input('Email');
//      $password = $req->input('Password');

//      $user = UsersModel ::where('Email', '=', $email)->first();
//      $dbpass =  $user->Password;
     
//      $message = "Login Fail, please check Email id and Password";
//      if (!$user) {
//         //return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
//         //return redirect('',)
//         return redirect('/sign-in')->withErrors( 'Login Failed, Please check email Id and password');
//      }
//      if ($dbpass!==$password) {
//         //return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
//         return redirect('/sign-in')->withErrors('Login Failed, Please check email and Password');

//      }
//         //return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
//         $req->session()->put('key',$user);
//         return redirect('/home');
//  }


function home(){
    //$user =  $user->username;
    echo "welcome ";
    //echo $user;
  }
    
}
