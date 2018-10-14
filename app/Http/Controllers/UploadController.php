<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use Auth;

class UploadController extends Controller
{
    public function getUpload(){
        return view('upload');
    }
    public function postUpload(Request $request){
        $user = Auth::user();
        
        $file=$request->file('picture');
        $filename = uniqid($user->id."_").".".$file->getClientOriginalExtension();
        //$file is encoded version so we can't use it directly
        Storage::disk('s3')->put($filename,File::get($file),'public');
        //$file->getClientOriginalName() to get name of file

        $url = Storage::disk('s3')->url($filename);
        //update file name in database
        $user->profile_pic = $url;
        $user->save();

        return redirect()->route('profile',$user->id);
    }
}
