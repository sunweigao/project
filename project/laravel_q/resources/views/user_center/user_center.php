<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <title>个人中心</title>
	<body class="bge">
		<div class="write-info">
			<span>
				<img src="img/no-person.png">
			</span>
			<p>您还没有填写信息哦</p>
			<span class="goin"><i class="iconfont icon-right"></i></span>
		</div>
		<?php include('dao/user_center.php') ?>
		<div class="sign-out">
				<a href="#">
					<i class="iconfont icon-logout"></i>
				   <span>退出</span>
				</a>
		</div>
    <?php include('dao/dao.php') ?>
	 <script src="js/jquery.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/basic.js"></script>
		<script src="js/rem.js"></script>
	</body>
</html>
