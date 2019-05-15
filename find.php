<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发现</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modal.js"></script>
</head>
<body>
	<ul class="find_common_nav">
		<li class="active"><a href="find.php">发现</a></li>
		<li><a href="recent_visiter.php">最近来访</a></li>
		<li><a href="find_attention.php">关注</a></li>
	</ul>
	<div class="mt80"></div>
	<div class="my_find_box">
		<img src="images/find_img.jpg" class="poster_img" alt="">
		<div class="find_layer_top">
			<div class="flt_left">
				<h5>林晓茹</h5>
				<p><img src="images/address1.png" alt="">广东深圳</p>
			</div>
			<div class="flt_right">
				<p>置顶会员</p>
				<a href="top.php">申请置顶</a>
			</div>
		</div>
		<div class="find_layer_bottom">
			<div class="flb_left">
				<h5>向往着奢华的生活方式</h5>
				<p><span>23岁</span>|<span>165CM</span></p>
			</div>
			<a href=""><img src="images/love1.png" alt=""></a>
		</div>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box red_money_modal">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="text-align: center;font-size: .28rem;">收到红包</p>
		<img src="images/window_mess1.png" style="display: block;width: 1rem;margin: .3rem auto;" alt="">
		<p style="text-align: center;">亲爱的用户！</p>
		<p style="text-align: center;">会员“高富帅”发给你一个红包~</p>
		<a href="record.php" style="width: 60%;background: #cc0000;" class="single_ok">查看</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$("body").on("click",".submit_btn",function(){
			modal.showModal(".red_money_modal");
		})
		$(".single_ok").click(function(){
			modal.cancleModal(".red_money_modal");
		})
	})
</script>
</html>