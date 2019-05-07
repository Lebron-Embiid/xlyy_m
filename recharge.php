<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>充值</title>
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
		<h2>充值</h2>
		<!-- <a href="javascript:void(0);" class="right_word">提交</a> -->
	</div>
	<div class="mt80"></div>
	<div class="bill_overage">
		<h6>账户余额<span>10800.00元</span></h6>
		<p>您的余额在本平台所有会员中排名第1532位，击败34%的会员！</p>
	</div>
	<div class="recharge_box">
		<ul class="recharge_ul">
			<li>充值<span>10</span>元</li>
			<li>充值<span>100</span>元</li>
			<li>充值<span>500</span>元</li>
			<li>充值<span>1000</span>元</li>
			<li>充值<span>2000</span>元</li>
			<li>充值<span>5000</span>元</li>
		</ul>
		<h4>充值金额</h4>
		<div class="recharge_input_box">
			<span>￥</span>
			<input type="text" class="recharge_price" name="price" placeholder="10-10000">
		</div>
		<p>此处可以手动填入其它金额</p>
	</div>
	<div class="change_pay_type">
		<div class="pay_item active">
			<span>充值方式</span>
			<div><input type="radio" name="pay[]" checked="true" id="wx"><img src="images/pay_icon1.png" alt="">微信</div>
			<a href="javascript:void(0);" class="change_a">切换支付宝</a>
		</div>
		<div class="pay_item">
			<span>充值方式</span>
			<div><input type="radio" name="pay[]" id="zfb"><img src="images/pay_icon2.png" alt="">支付宝</div>
			<a href="javascript:void(0);" class="change_a">切换微信</a>
		</div>
	</div>
	<div class="recharge_btn_box">
		<a href="" class="submit_btn">充值</a>
		<p class="till_word">充值后您的帐户余额将实时变化，账户余额可以随时提现</p>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		$(".recharge_ul").on("click","li",function(){
			$(this).addClass("active").siblings().removeClass("active");
			$(".recharge_price").val($(this).find("span").html());
		})
		
		$(".change_pay_type").on("click",".change_a",function(){
			$(this).parent(".pay_item").removeClass("active").siblings().addClass("active");
			$(this).siblings("div").find("input").prop("checked","true");
			$(this).parent(".pay_item").siblings().find("input").prop("checked","false");
		})
	})
</script>
</html>