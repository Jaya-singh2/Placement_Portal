<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //

    public function store(request $request)
    {
    	//print_r($request->input());

    	$name=$request->input('name');
    	$email=$request->input('email');
    	$password=$request->input('password');

        $data=DB::insert('insert into user(id,name,email,password) values(?,?,?,?)',
            [null,$name,$email,$password]);


    }

    public function logs(request $request)
    {
    	//print_r($request->input());

    	// $name=$request->input('name');
    		
    	// $password=$request->input('password');

    $data=DB::select('select id from user where name=? and password=?',
           [$name.$password]);

    if($data)
    {
    	echo "You are successfully logged in !!!";
    }

        
    }


}
