<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
    
class AdminController extends Controller
{
    public function login(){
        return view('admin.login'); 
    }
    
    public function index(){
        return view('admin.dashboard'); 
    }
    
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('tbl_admin')
            ->where('admin_email', $admin_email)
            ->where('admin_password', $admin_password);
            echo "<pre>";
            print_r($result);
            exit();
    }
}
