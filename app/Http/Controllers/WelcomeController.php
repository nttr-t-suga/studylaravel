<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contact(){
        $data = [];
        $data["first_name"] = "Luke<br>2行目";
        $data["last_name"] = "Skywalker<br>2行目";
        return view('contact', $data); 

        //return view('contact');
    }
    public function rpost(){
        $data = [];
        $data["data"]=$_POST["data"];
        if($_POST["data"] == "2"){
             return view('rpost2',$data);
         }else{
            return view('rpost',$data);
         }
            
        
    }
    public function rget(){
        $data = [];
        $data["data"]=$_GET["data"];
        if($_GET["data"] == "2"){
            return view('rget2',$data);
        }else{
           return view( 'rget',$data);
        }
    }
}