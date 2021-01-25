<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FileController extends Controller
{
    public function index(Request $request){
        // return $request;
        if($request->hasFile('image')){
            // return "image received";
            $img = Image::make($request->image);
            $img->resize(1920,1080)->encode('jpg');
            $path = public_path('files/uploads/').time().'.jpg';
            $img->save($path);
            return "saved";
        }
    }
}
