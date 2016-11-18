<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use RouteServiceProvider;
use Illuminate\Routing\Redirector;
use Request;
use Input;
use Session;
use Mail;
use DB;

class IndexController extends Controller
{
	//轮播图
   	public function index()
   	{
       	$re = DB::table('goods')->get();
       	echo json_encode($re);
       	// return view('admin/index',['re'=>$re]);
   	}	
}