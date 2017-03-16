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
}