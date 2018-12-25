<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class UsersController extends Controller
{
	public function index(){
		return view('home');
	}

	public function login(){
		return view('login');
	}
	public function signup(){
		return view('signup');
	}
}