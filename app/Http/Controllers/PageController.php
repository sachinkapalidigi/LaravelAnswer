<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return 'ABOUT US PAGE';
    }

    public function profile($id){
        //eager loading
        $user = User::with(['questions','answers','answers.question'])->find($id);

        return view('profile')->with('user',$user);
    }

}
