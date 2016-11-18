<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Paginator;
use Input;
use Session;
class EntranceController extends Controller
{
	/**
     * 自助入学
     * @return [type] [description]
     */
	public function entrance()
	{
		return view('entrance/entrance');
	}
	//自助报道
	public function self_report()
	{
		return view('entrance/self_report');
	}

	//绿色通道
	public function green()
	{
		return view('entrance/green');
	}

	//推迟报到
	public function delay()
	{
		return view('entrance/delay');
	}
	//到校路线
	public function route()
	{
		return view('entrance/route');
	}
	//抵校登记
	public function arrive()
	{
		return view('entrance/arrive');
	}
}