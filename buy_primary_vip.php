<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购买初级会员</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/person.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modal.js"></script>
	<style>
		a.submit_btn{
			width: 70%;
			height: .7rem;
			line-height: .7rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>购买初级会员</h2>
	</div>
	<div class="mt80"></div>
	<div class="buy_vip_box">
		<div class="buy_vip_title"><span></span>选择购买初级会员</div>
		<div class="buy_vip_select">
			<label for="vip1"><p>188元/月</p><input type="radio" name="vip[]" checked id="vip1"></label>
			<label for="vip2"><p><span>376元</span>3600元/2个月</p><input type="radio" name="vip[]" id="vip2"></label>
			<label for="vip3"><p><span>564元</span>400元/3个月</p><input type="radio" name="vip[]" id="vip3"></label>
		</div>
		<ul>
			<li><span>总服务天数</span><span>30天</span></li>
			<li><span>应付金额</span><span>180元</span></li>
		</ul>
		<a href="javascript:void(0);" class="submit_btn">确认支付</a>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box pay_modal fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<div class="modal_pay_box">
			<h6><span>金额合计</span><span>888元</span></h6>
			<label for="pay1"><input type="radio" name="pay[]" checked id="pay1"><p><img src="images/pay_icon3.png" alt=""><span>微信</span></p></label>
			<label for="pay2"><input type="radio" name="pay[]" id="pay2"><p><img src="images/pay_icon4.png" alt=""><span>支付宝</span></p></label>
		</div>
		<div class="more_btn_box">
			<a href="javascript:void(0);" class="query_btn active">确定</a>
			<a href="javascript:void(0);" class="modal_cancle_btn">取消</a>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$(".submit_btn").click(function(){
			modal.showModal(".pay_modal");
		})
		$(".query_btn").click(function(){
			modal.cancleModal(".pay_modal");
			window.location = "pay.php";
		})
	})
</script>
</html>