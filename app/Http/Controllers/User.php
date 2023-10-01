<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class User extends Controller
{
    public function register(Request $request){
        $uniqueId = uniqid();

        $currentTimestamp = time();
        $desiredFormat = "Y-m-d H:i:s";
        $formattedTimestamp = date($desiredFormat, $currentTimestamp);
        $userName = $request->input('userName');
        $email_id = $request->input('emailId');
        $password = $request->input('password');
        $encPassword = hash('sha256', $password);
        DB::table('users')->insert(["id"=>$uniqueId,"user_name"=>$userName,"email_id"=>$email_id,"password"=>$encPassword,'last_logged_in'=>$formattedTimestamp]);   
        return redirect('/');

    }
}
