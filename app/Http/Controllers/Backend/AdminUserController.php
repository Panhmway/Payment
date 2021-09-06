<?php

namespace App\Http\Controllers\Backend;

use App\AdminUser;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class AdminUserController extends Controller
{
    public function index(){
        $users = AdminUser::all();
        return view('backend.admin_user.index',compact('users'));
    }
    public function ssd(){
        // $data = AdminUser::query();

        // return Datatables::of($data)->make(true);
    }
}
