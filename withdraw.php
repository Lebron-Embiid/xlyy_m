<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提现</title>
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
		<h2>提现</h2>
		<!-- <a href="javascript:void(0);" class="right_word">提交</a> -->
	</div>
	<div class="mt80"></div>
	<div class="withdraw_box">
		<div class="withdraw_user_box">
			<h4>提现账户</h4>
			<ul>
				<li><label for="wx"><input type="radio" checked name="pay[]" id="wx"><img src="images/pay_icon1.png" alt="">微信</label></li>
				<li><label for="zfb"><input type="radio" name="pay[]" id="zfb"><img src="images/pay_icon2.png" alt="">支付宝</label></li>
			</ul>
		</div>
		<div class="withdraw_price_box">
			<h4>提现金额</h4>
			<div class="withdraw_input_box">
				<span>￥</span>
				<input type="text" class="withdraw_price" name="price" placeholder="20-10000">
			</div>
			<p>当前余额10800.00元，提现手续费2%</p>
			<a href="javascript:void(0);" class="submit_btn">提现</a>
		</div>
		<div class="withdraw_code_box">
			<span class="span">提现二维码</span>
			<div class="upload_code">
				<img src="" alt="" class="code_img">
				<input type="file" class="file" accept="images/*" name="">
				<div class="code_box">
					<span>+</span>
					<p>上传二维码</p>
				</div>
			</div>
			<h5>*此处只可上传收款二维码</h5>
		</div>
		<h6>注：支付宝、微信提现均最多两小时到账</h6>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box withdraw_info_modal">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="text-align: center;font-size: .24rem;">提现</p>
		<img src="images/wx_img.png" style="display: block;width: 1.32rem;margin: .5rem auto;" alt="">
		<!-- <img src="images/zfb_img.png" style="display: block;width: 1.08rem;margin: .5rem auto;" alt=""> -->
		<div class="word_box" style="width: 50%;margin: 0 auto;color: #fff;font-size: .22rem;">
			<p style="margin-bottom: .3rem;">微信账号：61***56</p>
			<p>提现金额：10000元</p>
			<p style="margin-bottom: .3rem;color: #dbdbdb;font-size: .2rem;">手续费：20元</p>
			<p>到账金额：9980元</p>
		</div>
		<a href="javascript:void(0);" class="single_ok withdraw_ok">确定</a>
	</div>
	<div class="modal_box withdraw_success_modal">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<img src="images/wx_img.png" style="display: block;width: 1.32rem;margin: .5rem auto;" alt="">
		<!-- <img src="images/zfb_img.png" style="display: block;width: 1.08rem;margin: .5rem auto;" alt=""> -->
		<p style="text-align: center;font-size: .22rem;margin-bottom: .4rem;">提现成功！</p>
		<p style="text-align: center;color: #fff;font-size: .22rem;">如果您24小时之内没有收到，请和我们联系！</p>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$("body").on("click",".submit_btn",function(){
			modal.showModal(".withdraw_info_modal");
		})
		$(".withdraw_ok").click(function(){
			modal.cancleModal(".modal_box");
			modal.showModal(".withdraw_success_modal");
		})
		
		$(".recharge_ul").on("click","li",function(){
			$(this).addClass("active").siblings().removeClass("active");
			$(".recharge_price").val($(this).find("span").html());
		})
		
		$(".change_pay_type").on("click",".change_a",function(){
			$(this).parent(".pay_item").removeClass("active").siblings().addClass("active");
			$(this).siblings("div").find("input").prop("checked","true");
			$(this).parent(".pay_item").siblings().find("input").prop("checked","false");
		})
		
		// 上传二维码
		$(".upload_code").on("change",".file",function(){
			var _this = this;
			run(_this, function (data) {
				$(_this).siblings(".code_img").attr("src",data);
			});
		})
	})
</script>
</html>