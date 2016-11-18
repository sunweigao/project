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
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<div class="show-btn">
			    <span class="book-tit">交通方式</span>
			    <select name="traffic" id="traffic">
			    	<option value="">-请选择-</option>
			    	<option value="飞机">飞机</option>
			    	<option value="汽车">汽车</option>
			    	<option value="火车">火车</option>
			    </select>
		   </div>
		    
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" name="site" id="site" placeholder="请选择您目的地的站点位置"/>  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" name="begin_time" id="begin_time" placeholder="请填写您的出发时间"/>  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" name="end_time" id="end_time" placeholder="请选择您的预计到达时间"/>  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">陪同人数</span>
		        <input type="text" name="people" id="people" placeholder="请填写您的陪同人数" />  
			</li>
		</ul>
		<div class="step-btn">
			    <a href="dorm_book">上一步</a>
				<a href="#" id="button">下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>	
      <script type="text/javascript" src="js/rem.js"></script>	
	</body>
</html>
<script src="js/ajax.js"></script>
<script>
	$('#button').click(function(){
		var traffic = $('#traffic').val();
		var site = $('#site').val();
		var begin_time = $('#begin_time').val();
		var end_time = $('#end_time').val();
		var people = $('#people').val();
		var data = {traffic:traffic,site:site,begin_time:begin_time,end_time:end_time,people:people}
		var url = ajax('arrive',data)
		/*$.ajax({reportcard
			type:"get",
			url:"http://www.gao.com/arrive?callback=?",
			data:{traffic:traffic,site:site,begin_time:begin_time,end_time:end_time,people:people},
			dataType:"jsonp",
			success:function(msg)
			{
				alert(msg)
			}
		})*/
	})
</script>
