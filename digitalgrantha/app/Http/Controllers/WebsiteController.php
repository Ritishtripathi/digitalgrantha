<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.index');
    }

     public function about(){
        return view('website.about');
    }

     public function contact(){
        return view('website.contact');
    }

     public function service(){
        return view('website.service');
    }

     public function pricing(){
        return view('website.pricing');
    }

     public function seo(){
        return view('website.seo');
    }
     public function appdevelopement(){
        return view('website.appdevelopement');
    }
     public function webdevelopement(){
        return view('website.webdevelopement');
    }
     public function googlebusiness(){
        return view('website.googlebusiness');
    }
     public function socialmedia(){
        return view('website.social-media');
    }
}
