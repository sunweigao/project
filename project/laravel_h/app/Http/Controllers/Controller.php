<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers;
use Request;
use DB;
use Paginator;
use Input;
use Session;
use Memcache;
abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static function json($code,$message='',$data=array())
		{
			if(!is_numeric($code))
			{
				return "";
			}

			$res=array(
				'code'=>$code,
				'message'=>$message,
				'data'=>$data
			);
			echo json_encode($res);exit;
		}
		public function  classdata($data,$table)
		{
			$callback = $data['callback'];
			//print_r($all);
			unset($data['callback']);
			unset($data['_']);
			$sql = DB::table($table)->insert($data);
			if($sql)
			{
				return $callback.'('.$this->json('200','success',$sql).')';
			}
		}
		public function select($table_name,$arr)
		{	
			$mem=new Memcache;
	        $mem->connect("127.0.0.1",11211);
	        if (!$mem->get($arr)){
	        	// echo 1;
	        	$data = DB::table("$table_name")->get();
	        	$data_arr = $this->json('200','数据返回成功',$data);
	        	$mem->set($arr,$data_arr);
	        	return $data_arr = $mem->get($arr);
	        } else {
	        	// echo 2;
	        	return $mem->get($arr);
	        }
		}
}
