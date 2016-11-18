<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Request;
use DB;
use Paginator;
use Input;
use Session;
class AdminController extends Controller
{
	//轮播图
	public function image()
	{		
		// $sql= DB::table('image')->get();
		$table_name= 'image';
		$arr = "image_arr";
		return $this->select($table_name,$arr);
	}

	//校园简介
	public function news()
	{
		// $sql= DB::table('news')->get();
		$table_name= 'news';
		$arr = "news_arr";
		//print_r($sql);die;
		return $this->select($table_name,$arr);
		// echo json_encode($sql);
	}
	/**
     * 我要提问
     * @return [type] [description]
     */
	public function intro()
	{
		$sql= DB::table('campus')->get();
		echo json_encode($sql);
	}
	/**
     * 自助报道--绿色通道
     * @return [type] [description]
     */
	public function green_add()
	{
		$all=Request::all();		
		echo $this->classdata($all,'green_add');
	}
	/**
     * 资讯帮助--我要提问
     * @return [type] [description]
     */
	public function data()
	{
		$all=Request::all();
		$callback = $all['callback'];
		unset($all['callback']);
		unset($all['_']);
		$time = date('Y-m-d H:i:s');
		$intro=$all['intro'];
		$sql = DB::table('question')->insert(['intro'=>$intro,'time'=>$time]);
		if($sql)
		{
			return $callback.'('.$this->json('200','success',$sql).')';
		}
		
	}
	/**
     * 推迟报道
     * @return [type] [description]
     */
	public function delay_add()
	{
		$delay = Request::all();
		echo $this->classdata($delay,'delay_add');
	}
	/**
     *个人中心
     * @return [type] [description]
     */
	public function user_info()
	{
		$user_info = Request::all();
		echo $this->classdata($user_info,'user_info');
	}
	
	/**
     * 宿舍预订
     * @return [type] [description]
     */
	public function dorm_book()
	{
		$dorm_book = Request::all();
		echo $this->classdata($dorm_book,'dorm_book');
	}
	/**
     * 下一页的抵达登记
     * @return [type] [description]
     */
	public function arrive()
	{
		$arrive = Request::all();
		echo $this->classdata($arrive,'arrive');
	}
	/**
     * 模拟提交数据
     * @return [type] [description]
     */
	public function reportcard_get()
	{
		$arr = DB::table('user_info')
            ->join('dorm_book', 'user_info.user_id', '=', 'dorm_book.dorm_id')
            ->join('arrive', 'user_info.user_id', '=', 'arrive.arrive_id')
            ->get();
           
            echo $this->json('200','success',$arr);	
	}
	/**
     * 我的提问
     * @return [type] [description]
     */
	public function question_get()
	{
		$sql = DB::table('question')->get();
		echo $this->json('200','success',$sql);
	}
}