<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Image;
use Storage;
use Intervention\Image\Response;
class ImageController extends Controller
{
    protected $image;

    public function __construct(Request $request)
    {
        if ($request->image) {
            $this->image = $request->image;
        }
    }

    protected function resize($x = 400, $y = null, $crop = null)
    {
        $image = Storage::get($this->image);
        $img = Image::make($image);
        $mimetype = $img->mime();
        header("Content-Type: $mimetype");
        if ($crop){
            if ($y){
                $img->fit($x,$y,function($constraint){
                    $constraint->upsize();
                });
                return $img->response();
            }
            $img->fit($x);
            return $img->response();
        }
        if ($y){
            // prevent possible upsizing
            $img->resize($x, $y, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            return $img->response();
        }
            $img->resizeCanvas($x,null,'center',true,'#fffff');
            return $img->response();
    }

    public function fly($size,Request $request)
    {
    	if (!$this->image) {
    		$img = Image::canvas(800, 600);
    		return $img->response();
    	}
    	if ($size === "face") {
           return $this->resize(1000,1000);
    	}
    	if ($size === "twitter") {
            return $this->resize(200,200);
        }
    	if ($size === "wide") {
            return $this->resize(1024,600);
        }
    	if ($size === "xs") {
            return $this->resize(80);
        }
    	if ($size === "thumb") {
            return $this->resize(200,120);
        }
    	if ($size === "small") {
            return $this->resize(350,350);
        }
    	if ($size === "medium") {
            return $this->resize(800,600);
        }
    	if ($size === "big") {
            return $this->resize(1024);
        }
    	if ($size === "cover" || $size === "h1") {
            return $this->resize(600,360);
        }
    	if ($size === "h2") {
            return $this->resize(600,480);
        }
        if ($size === "slideItem"){
            return $this->resize(200);
        }
        if ($size === "blogCover"){
            return $this->resize(400,400);
        }
        if ($size === "blogInterna"){
            return $this->resize(900);
        }
            return $this->resize('400');
    }

}
