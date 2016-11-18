<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Paginator;
use Input;
use Session;
class AskController extends Controller
{
	/**
     * 资讯帮助
     * @return [type] [description]
     */
	public function ask()
	{
		return view('ask/ask');
	}
	/**
     * 咨询帮助--常见问题
     * @return [type] [description]
     */
	public function commonquestion()
	{
		return view('ask/commonquestion');
	}
	/**
     * 咨询帮助--资讯解答
     * @return [type] [description]
     */
	public function answer()
	{
		return view('ask/answer');
	}
	/**
     * 咨询帮助--我的问题
     * @return [type] [description]
     */
	public function myanswer()
	{
		$url = 'http://www.gao.com/question_get';
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
		return view('ask/myanswer',['list'=>$json['data']]);
	}
	/**
     * 咨询帮助--我要提问
     * @return [type] [description]
     */
	public function tiwen()
	{
		return view('ask/tiwen');
	}
}