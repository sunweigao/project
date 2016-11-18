<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<span>
					<img src="img/take-photo.png">
					<input type="file" />
				</span>
				<p>上传头像</p>
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" name="name" id="name" placeholder="请输入姓名" /> 
			    <div class="sex">
			    	<input type="radio" name="sex" id="sex" value="男">男
			    	<input type="radio" name="sex" id="sex" value="女">女
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" name="email" id="email" placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" name="phone" id="phone" placeholder="请填写您的个人手机号码" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" name="name" id="family" placeholder="请填写您的家庭主机号码" />  
			</li>
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" name="move" id="move" placeholder="请填写您的家庭移动电话号码" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="contact" id="contact" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="relationship" id="relationship" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		
		<ul class="contact-box">
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" name="url" id="url" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
				<a href="dorm_book" id="button" class="ta-center db">下一步</a>
		</div>
  <script src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/basic.js"></script>	
  <script type="text/javascript" src="js/rem.js"></script>	
	</body>
</html>
<script src="js/ajax.js"></script>
<script>
	$('#button').click(function(){
		var name = $('#name').val();
		var sex = $('#sex').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var family = $('#family').val();
		var contact = $('#contact').val();
		var relationship = $('#relationship').val();
		var url = $('#url').val();
		var data = {name:name,sex:sex,email:email,phone:phone,family:family,contact:contact,relationship:relationship,url:url}
		var json = ajax('user_info',data)
		/*$.ajax({
			type:"get",
			url:"http://www.gao.com/user_info?callback=?",
			data:{name:name,sex:sex,email:email,phone:phone,family:family,contact:contact,relationship:relationship,url:url},
			dataType:"jsonp",
			success:function(msg)
			{
				alert(msg)
			}
		})*/
	})
</script>
