<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adminusers;
class UserController extends Controller
{
    //
    public function allusers()
    {

      $ml = Adminusers::all();
      return view("all-users",compact('ml'));
    }
    public function newuser()
    {

      return view('new-user');
      // return view('new-user1');
    }
}
