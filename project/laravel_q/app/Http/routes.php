<?php
Route::any('/',"AdminController@index");//首页
Route::any('news',"AdminController@news");
Route::any('must_know',"AdminController@must_know");//入学须知
Route::any('notice',"AdminController@notice");//通知公告
Route::any('data',"AdminController@data");//资料下载


Route::any('entrance',"EntranceController@entrance");//自助入学
Route::any('self_report',"EntranceController@self_report");//自助报道
Route::any('green',"EntranceController@green");//绿色通道
Route::any('delay',"EntranceController@delay");//推迟报道
Route::any('route',"EntranceController@route");//到校路线
Route::any('arrive',"EntranceController@arrive");//抵校登记

Route::any('ask',"AskController@ask");//资讯帮助
Route::any('commonquestion',"AskController@commonquestion");//常见问题
Route::any('answer',"AskController@answer");//咨询解答
Route::any('myanswer',"AskController@myanswer");//我的提问
Route::any('tiwen',"AskController@tiwen");//我要提问

Route::any('user_center',"user_centerController@user_center");//个人中心
Route::any('user_info',"user_centerController@user_info");//个人信息
Route::any('dorm_book',"user_centerController@dorm_book");//下一页
Route::any('arrive',"user_centerController@arrive");//下一页
Route::any('reportcard',"user_centerController@reportcard");//下一页

Route::any('changepsw',"user_centerController@changepsw");//修改密码



