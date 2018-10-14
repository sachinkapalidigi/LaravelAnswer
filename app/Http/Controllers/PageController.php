<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\ContactForm;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return 'ABOUT US PAGE';
    }

    public function profile($id){
        //eager loading - avoid lazy loading
        $user = User::with(['questions','answers','answers.question'])->find($id);

        return view('profile')->with('user',$user);
    }

    public function contact(){

        return view('contact');
    }

    public function sendContact(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required|min:3',
            'message'=>'required|min:10'

        ]);
        
        //sending email here
        Mail::to('admin@example.com')->send(new ContactForm($request));
    }

}
