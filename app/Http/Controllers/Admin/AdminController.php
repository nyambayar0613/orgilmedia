<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Purpose;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

    public function getindex() {
        return view('admin.index');
    }

    public function getLogout() {
        Auth::logout();
        return redirect('/login');
    }
}
