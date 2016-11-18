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
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea name="intro" id="intro"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
			</div>
			</div>
			<div class="step-btn">
					<a class="ta-center db" id="button">提交</a>
				</div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>
</html>
<script>
	$('#button').click(function(){
		var intro = $('#intro').val();
		//alert(intro)
		$.ajax({
			type:"GET",
			url:"http://www.gao.com/data",
			data:{intro:intro},
			dataType:"jsonp",
			success:function(json){
				alert(msg)
			}
		})
	})
</script>