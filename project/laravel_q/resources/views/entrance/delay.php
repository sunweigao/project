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
		<title>推迟报到</title>

		<body>
			<div class="header">
				<span>推迟报到</span>
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
							<span class="book-tit delay">推迟报到类型</span>
							<input type="text" name="name" placeholder="请选择" disabled="disabled" class="delayinput"/>
						</div>
						<div class="checkshow">
							<h4 class="ta-center">推迟报到类型</h4>
							<p class="checked">事假</p>
							<p>病假</p>
							<p>服兵役</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="delayReport">
					<ul class="hd clearfix">
						<li class="active">个人申请信息</li>
						<li>申请原因</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit delay">姓名</span>
									<input type="text" name="name" id="name" placeholder="请填写您的姓名" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">考生号</span>
									<input type="text" name="number" id="number" placeholder="请填写您的考生号" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">学院</span>
									<input type="text" name="college" id="college" placeholder="请填写您所在的学院" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">专业</span>
									<input type="text" name="major" id="major" placeholder="请填写您的专业" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">身份证号</span>
									<input type="text" name="idname" id="idname" placeholder="请填写您的身份证号码" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">推迟报到时间</span>
									<input type="text" name="time" id="time"  placeholder="请填选择" class="delayinput" />
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="step-btn">
					<a  class="ta-center db" id="button" >提交</a>
			</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>
		<script src="js/ajax.js"></script>
		<script>

		$('#button').click(function(){
			var name = $("#name").val();
			var number = $("#number").val();
			var college = $("#college").val();
			var major = $("#major").val();
			var idname = $("#idname").val();
			var time = $("#time").val();
			var data = {name:name,number:number,college:college,major:major,idname:idname,time:time}
			var url = ajax('delay_add',data)

			/*$.ajax({
				type:"get",
				url:"http://www.gao.com/delay_add?callback=?",
				data:{name:name,number:number,college:college,major:major,idname:idname,time:time},
				dataType:"jsonp",
				success:function(msg)
				{
					alert(msg)
				}
			})*/
		})
		</script>