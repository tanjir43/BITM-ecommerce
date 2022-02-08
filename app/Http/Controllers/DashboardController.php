<?php

namespace App\Http\Controllers;
use App\Models\User;
use Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $user;

    public function index(){
        return view('admin.home.dashboard');

    }
//    public function adminLogout(){
//        Session::forget('user_id');
//        return redirect('/login');
//    }

}
