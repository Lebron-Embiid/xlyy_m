<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/modal.js"></script>
	<style>
		.modal_box .close_img{
			margin-bottom: 0;
		}
	</style>
</head>
<body>
	<div class="swiper-container index_banner">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="images/index_banner.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/index_banner.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/index_banner.jpg" alt=""></div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
	<div class="index_top">
		<p><span></span>置顶会员</p>
		<a href="top.php">我要置顶&gt;</a>
	</div>
	<ul class="index_list">
		<li>
			<a href="vip_detail.php">
				<div class="img"><img src="images/index_img1.jpg" alt=""></div>
				<h4><span class="il_name">木荣赫</span><span class="il_level">初级</span></h4>
				<p>年收入：100万； 净值...</p>
			</a>
		</li>
		<li>
			<a href="vip_detail.php">
				<div class="img"><img src="images/index_img2.jpg" alt=""></div>
				<h4><span class="il_name">木荣赫</span><span class="il_level">VIP</span></h4>
				<p>年收入：100万； 净值...</p>
			</a>
		</li>
		<li>
			<a href="vip_detail.php">
				<div class="img"><img src="images/index_img1.jpg" alt=""></div>
				<h4><span class="il_name">木荣赫</span><span class="il_level">初级</span></h4>
				<p>年收入：100万； 净值...</p>
			</a>
		</li>
		<li>
			<a href="vip_detail.php">
				<div class="img"><img src="images/index_img2.jpg" alt=""></div>
				<h4><span class="il_name">木荣赫</span><span class="il_level">VIP</span></h4>
				<p>年收入：100万； 净值...</p>
			</a>
		</li>
	</ul>
	<div class="modal_shadow"></div>
	<div class="modal_box red_money_modal fix" style="padding: .3rem;">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="text-align: center;font-size: .24rem;margin-bottom: .4rem;">提示</p>
		<p style="text-align: center;font-size: .24rem;margin-bottom: .5rem;">WEI 向你发了一个红包</p>
		<img src="images/red_money.png" class="red_img" alt="">
		<a href="" class="see_detail">查看详情</a>
	</div>
	<div class="modal_box vip_info_modal fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<div class="modal_info_box">
			<img src="images/index_modal_img.jpg" class="avatar_img" alt="">
			<div class="modal_info_right">
				<p><img src="images/index_icon1.png" alt="">出席商务场合</p>
				<p>价格：1000元/天</p>
				<p>状态：已完成，未评价</p>
				<div>
					<img src="images/index_icon2.png" alt="">
					<p style="font-size: .2rem;">
						<span>2018-12-17：00</span>
						<span>2018-12-18：00</span>
					</p>
				</div>
			</div>
		</div>
		<p style="margin-top: .3rem;">该次预约的服务已经开始，您是否满意对方的服务？</p>
		<a href="" class="single_ok" style="width: 60%;">投诉</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$("body").on("click",".single_ok",function(){
			modal.showModal(".vip_info_modal");
		})
		$(".single_ok").click(function(){
			modal.cancleModal(".vip_info_modal");
		})
		
		var swiper = new Swiper('.index_banner',{
			initialSlide:0,			//默认第1个显示
			pagination: '.swiper-pagination',	//启用分页器
			paginationClickable: true,	//分页器指示点可以控制切换
			autoplay : 5000,		//自动切换
			loop: true,			//swiper循环
			autoplayDisableOnInteraction : false
		});
	})
</script>
</html>