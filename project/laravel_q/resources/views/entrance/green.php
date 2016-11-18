<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
						<div class="show-btn">
							<span class="book-tit">申请类型</span>
							<input type="text" name="name" placeholder="请选择您的申请类型" disabled="disabled" />
						</div>
						<div class="checkshow">
							<h4 class="ta-center">申请类型</h4>
							<p class="checked">缓交学费</p>
							<p>助学贷款</p>
							<p>免交学费</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" name="name" placeholder="请输入姓名" id="name" />
									<div class="sex">
										<input type="radio" value="男" id="sex" name="sex">男
										<input type="radio" value="女" id="sex" name="sex">女
									</div>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" name="nation" id="nation" placeholder="请填写您的民族类别" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" name="phone" id="phone" placeholder="请填写您的个人手机号码" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" name="birthday" id="birthday" placeholder="请填写您的出生日期" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" name="idname" id="idname" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" name="contact_phone" id="contact_phone" placeholder="请填写您的手机联系号码" />
								</li>
								
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" name="address" id="address" placeholder="请填写您的详细地址" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" name="name" placeholder="请填写家庭成员1的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" placeholder="请填写您与家庭成员1的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" placeholder="请填写家庭成员1的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" placeholder="请填写家庭成员1的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员2</span>
									<input type="text" name="name" placeholder="请填写家庭成员2的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" placeholder="请填写您与家庭成员2的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" placeholder="请填写家庭成员2的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" placeholder="请填写家庭成员2的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员3</span>
									<input type="text" name="name" placeholder="请填写家庭成员3的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" placeholder="请填写您与家庭成员3的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" placeholder="请填写家庭成员3的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" placeholder="请填写家庭成员3的年收入情况" class="house-input" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
						</div>
					</div>
				</div>
				</div>
				<div class="step-btn">
					<a class="ta-center db" id="button">提交</a>
				</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/ajax.js"></script>
<script>
$("#button").click(function(){
		var name = $('#name').val();
		var sex = $('#sex').val();
		var nation = $('#nation').val();
		var phone = $('#phone').val();
		var birthday = $('#birthday').val();
		var idname = $('#idname').val();
		var contact_phone = $('#contact_phone').val();
		var address = $('#address').val();
		var data = {name:name,sex:sex,nation:nation,phone:phone,birthday:birthday,idname:idname,contact_phone:contact_phone,address:address}
		var url = ajax('green_add',data)
		//alert(sex)
		/*$.ajax({
			url:"http://www.gao.com/green_add?callback=?",
			type:'get',
			data:{name:name,sex:sex,nation:nation,phone:phone,birthday:birthday,idname:idname,contact_phone:contact_phone,address:address},
			dataType:"jsonp",
			success:function(msg)
			{
				if(msg['data']==true)
				{
					alert('申请成功!');
				};
			}
		})*/
	})

</script>