<?php
/**
 * Created by PhpStorm.
 * User: zq199
 * Date: 2017/3/16
 * Time: 22:04
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use DB;

class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('default.admin.index');
    }
    public function seo(){
        $_ret =[];
        $_site = DB::table('maps')->get();
        if($_site){
            $_ret['site_title'] = $_site[0]->site_title;
            $_ret['site_author'] = $_site[0]->site_author;
            $_ret['site_keywords'] = $_site[0]->site_keywords;
            $_ret['site_description']= $_site[0]->site_description;
            return view('default.admin.seo')
                ->with($_ret);
        }else{
            return view('default.admin.seo');
        }
    }
    public function seoUpdate(Request $request){
        $_site = [];
        $_site['site_author'] = $request->input('author');
        $_site['site_title'] = $request->input('site_title');
        $_site['site_keywords'] = $request->input('site_keywords');
        $_site['site_description'] = $request->input('site_description');
        $site = DB::table('maps')->update($_site);
        if($site){
            return back()->with('success','保存成功！');
        }else{
            return back()->with('error','保存失败！');
        }
    }
    public function company(){
        $_company = DB::table('company')->get();
        if($_company){
            $company = $_company[0];
            return view('default.admin.company',compact('company'));
        }else{
            return view('default.admin.company');
        }

    }
    public function companyUpdate(Request $request){
        $_company = [];
        $_company['intro'] = $request->input('intro');
        $_company['phone'] = $request->input('phone');
        $_company['m_phone'] = $request->input('m_phone');
        $_company['address'] = $request->input('address');
        $_company['email'] = $request->input('email');
        $company = DB::table('company')->update($_company);
        if($company){
            return back()->with('success','保存成功！');
        }else{
            return back()->with('error','保存失败！');
        }
    }

}