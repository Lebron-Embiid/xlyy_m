<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的钱包</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/person.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modal.js"></script>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>我的钱包</h2>
		<!-- <a href="javascript:void(0);" class="right_word">提交</a> -->
	</div>
	<div class="mt80"></div>
	<div class="my_bill_box">
		<div class="left">
			<div class="img active"><img src="images/man.jpg" alt=""></div>
			<div class="info">
				<h3>王总</h3>
				<p>初级会员</p>
			</div>
		</div>
		<div class="right">
			<a href="record.php">
				<img src="images/bill_icon.png" class="icon" alt="">
				<span>账单记录</span>
				<img src="images/next.png" class="next" alt="">
			</a>
		</div>
	</div>
	<div class="bill_overage">
		<h6>账户余额<span>10800.00元</span></h6>
		<p>您的余额在本平台所有会员中排名第1532位，击败34%的会员！</p>
	</div>
	<div class="person_nav_box wallet_nav_box">
		<div class="pn_item">
			<a href="">
				<p><img src="images/bind_icon.png" class="icon" alt="">绑定微信/支付宝账号</p>
				<p><img src="images/three.png" class="three" alt=""></p>
			</a>
		</div>
	</div>
	<ul class="wallet_btn_ul">
		<li class="active"><a href="recharge.php">充值</a></li>
		<li><a href="withdraw.php">提现</a></li>
	</ul>
	<div class="remind_box">
		<h6>资金保障</h6>
		<p>资金由薛贵人平台提供资金担保保障</p>
		<p>如有疑问，可以联系<a href="javascript:void(0);" class="customer_service">客服</a></p>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box wallet_modal">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="text-align: center;font-size: .24rem;">客服</p>
		<img src="images/kefu.png" class="img" alt="">
		<textarea name="" id="" class="textarea" cols="30" rows="10"></textarea>
		<a href="" class="single_ok">提交</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$("body").on("click",".customer_service",function(){
			modal.showModal(".modal_box");
		})
		$(".single_ok").click(function(){
			modal.cancleModal(".modal_box");
		})
	})
</script>
</html>