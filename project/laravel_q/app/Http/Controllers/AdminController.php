<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Paginator;
use Input;
use Session;
class AdminController extends Controller
{
	//轮播图
	public function index()
	{
		$url = "http://www.gao.com/image";
		$file=file_get_contents($url);
		$img= json_decode($file,true);
		// print_r($img);die;
		$url1 = "http://www.gao.com/news";
		$file1=file_get_contents($url1);
		$img1 = json_decode($file1,true);
		// print_r($img1);die;
		$url2 = "http://www.gao.com/intro";
		$file2=file_get_contents($url2);
		$img2 = json_decode($file2,true);
		//print_r($img2);die;
		return view('admin/index',['list'=>$img['data'],'intro'=>$img1['data'],'intro1'=>$img2]);
	}
	//入学通知
	public function must_know()
	{
		return view('admin/must_know');
	}
	//通知公告
	public function notice()
	{
		return view('admin/notice');
	}
	public function data()
	{
		return view('admin/data');
	}
}