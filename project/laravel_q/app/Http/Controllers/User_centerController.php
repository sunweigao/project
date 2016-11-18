<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Paginator;
use Input;
use Session;
class User_centerController extends Controller
{
	/**
     * 个人信息
     * @return [type] [description]
     */
    public function user_center()
	{
		return view('user_center/user_center');
	}
	/**
     * 个人信息--个人信息
     * @return [type] [description]
     */
    public function user_info()
	{
		return view('user_center/user_info');
	}
	/**
     * 个人信息--宿舍预订
     * @return [type] [description]
     */
	public function dorm_book()
	{
		return view('user_center/dorm_book');	
	}
	/**
     * 个人信息--抵校登记
     * @return [type] [description]
     */
	public function arrive()
	{
		return view('user_center/arrive');	
	}
	/**
     * 个人中心--报道单
     * @return [type] [description]
     */
	public function reportcard()
	{
		$url = 'http://www.gao.com/reportcard_get';
		$method = "get";
		$ch = curl_init();   //1.初始化  
    	curl_setopt($ch, CURLOPT_URL, $url); //2.请求地址  
    	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);//3.请求方式  
    	//4.参数如下  
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//https  
    	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
    	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器  
    	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
    	curl_setopt($ch, CURLOPT_AUTOREFERER, 1);  
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate'));//gzip解压内容  
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');  
      
    	if($method=="POST"){//5.post方式的时候添加数据  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
    	}  
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
    	$tmpInfo = curl_exec($ch);//6.执行  
  
    	if (curl_errno($ch)) {//7.如果出错  
        return curl_error($ch);  
   	 }  
    	curl_close($ch);//8.关闭  
    	 $json=json_decode($tmpInfo,true);
    	$list = $json['data'];
		return view('user_center/reportcard',['data'=>$list]);	
	}

	//修改密码
    public function changepsw()
	{
		return view('user_center/changepsw');
	}

}