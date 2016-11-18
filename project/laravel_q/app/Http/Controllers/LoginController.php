<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Paginator;
use Input;
use Session;
class LoginController extends Controller
{
	/**
     * 登录
     * @return [type] [description]
     */
    public function index()
	{
		return view('login/index');
	}
}