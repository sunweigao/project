<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/all.css"/>
		<link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>首页</title>
	</head>

	<body>
		<div class="header">
			<span>优智源</span>
			<a href="user-center.html"><span class="user"><i class="iconfont icon-person"></i></span></a>
		</div>
		<!--<div class="banner autoplay">
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
		</div>-->
		<div class="banner swiper-container">
            <div class="swiper-wrapper">
            <?php
            foreach($list as $k=>$v){
            ?>
                <div class="swiper-slide"><a href="javascript:void(0)"><img class="swiper-lazy" data-src="<?php echo $v['image']?>" alt=""></a></div>
            <?php
            }
            ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
		<div class="menu">
			<ul class="clearfix">
				<li>
					<a href="self_report">
						<img src="img/icon1.png">
						<p class="menu-txt">自助报到</p>
					</a>
				</li>
				<li>
					<a href="green">
						<img src="img/icon2.png">
						<p class="menu-txt">绿色通道</p>
					</a>
				</li>
				<li>
					<a href="arrive">
						<img src="img/icon3.png">
						<p class="menu-txt">抵校登记</p>
					</a>
				</li>
				<li>
					<a href="delay">
						<img src="img/icon4.png">
						<p class="menu-txt">推迟报到</p>
					</a>
				</li>
			</ul>
			<ul class="clearfix">
				<li>
					<a href="must_know">
						<img src="img/icon5.png">
						<p class="menu-txt">入学须知</p>
					</a>
				</li>
				<li>
					<a href="notice">
						<img src="img/icon6.png">
						<p class="menu-txt">通知公告</p>
				</li>
				</a>
				<li>
					<a href="data">
						<img src="img/icon7.png">
						<p class="menu-txt">资料下载</p>
					</a>
				</li>
				<li>
					<a href="ask">
						<img src="img/icon8.png">
						<p class="menu-txt">咨询帮助</p>
					</a>
				</li>
			</ul>
		</div>
		<div class="brief">
			<h3 class="brief-tit">校园简介</h3>
			<?php
				foreach($intro as $k=>$v){
			?>
			<div class="brirf-content clearfix">
				<div class="bc-left fl">
					<img src="<?php echo $v['image']?>">
				</div>
				<div class="bc-right fr">
					<?php echo $v['introduce']?>
				</div>
				<?php
					}
				?>
			</div>
		</div>
		<dl class="news">
			<dt class="news-tit">校园资讯</dt>
			<dd class="news-content clearfix">
				<?php
				foreach($intro1 as $k=>$v){				
				?>
				<div class="nc-left fl">
					<img src="<?php echo $v['img']?>">
				</div>
				<div class="nc-right fr">
					<a class="ncr-top">
					<?php
						echo $v['intro']
					?>
					</a>
					<span class="nc-time"><?php echo $v['time']?></span>
				</div>
				<?php
				}
				?>
			</dd>
			
		</dl>
		<?php include('dao/dao.php') ?>
		<script src="js/jquery.min.js"></script>
	    <script src="js/fastclick.js"></script>
		<script src="js/slick.min.js"></script>
		
		<script src="js/rem.js"></script>
		<script src="js/basic.js"></script>
		<script src="js/swiper.jquery.min.js"></script>
		<script>
			$(function() {
				$('.autoplay').slick({
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 2000,
				   dots:true,
				});
			});
		</script>
		<script >
		    $(function () {
		        var banner = new Swiper('.banner',{
		            autoplay: 5000,
		            pagination : '.swiper-pagination',
		            paginationClickable: true,
		            lazyLoading : true,
		            loop:true
		        });		
		    });
		</script>
	</body>
</html>