<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_seo = DB::table('maps')->get();
        $_company = DB::table('company')->get();
        $company = $_company[0];
        if($_seo){
            $author = $_seo[0]->site_author;
            $site_title =  $_seo[0]->site_title;
            $site_keywords =  $_seo[0]->site_keywords;
            $site_description  =  $_seo[0]->site_description;
            $copy = $_seo[0]->site_copy;
            $beian = $_seo[0]->site_beian;
            return view('default.home',compact('author','site_title','site_keywords','site_description','copy','beian','company'));
        }else{
            return view('default.home');
        }

    }
}
