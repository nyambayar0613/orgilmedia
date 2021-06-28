<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
use View;

class CheckAuthController extends Controller
{
    public $user_role = '';

    public function __construct(){
        $this->middleware('auth');
    }

    public function getUserRole() {
        $role_id = Auth::user()->role_id;

        View::share('role_id', $role_id);
    }

    public function check() {
        if(Auth::user()){
            $role = Auth::user()->role_id;
        } else {
            $role = -1;
        }

        if($role == false){
            return Auth::logout();
        }

        switch($role){
            case 1:
                return redirect('/member/index'); break;
            case 2:
                return redirect('/moderator/index'); break;
            case 3:
                return redirect('/admin/slider/list'); break;
            case 4:
                return redirect('/super/admin/article/list'); break;

            default: return Auth::logout(); break;
        }

    }

    public function changePassword() {
        if(Auth::user()){
            $role = Auth::user()->role_id;
        } else {
            $role = -1;
        }

        switch($role){
            case 1:  return redirect('/member/changePassword'); break;
            case 2:  return redirect('/moderator/changePassword'); break;
            case 3:  return redirect('/admin/changePassword'); break;
            case 4:  return redirect('/super/admin/changePassword'); break;

            default: return redirect('/member/changePassword'); break;
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect('/login');
    }
}
