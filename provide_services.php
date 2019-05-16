<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提供服务</title>
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
	<style>
		body{
			background: #F5F5F5;
		}
		.provide_desc{
			margin-bottom: .3rem;
		}
		.provide_desc h6{
			color: #fff;
			font-size: .22rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>提供服务</h2>
	</div>
	<div class="mt80"></div>
	<!-- 初级会员 -->
	<div class="provide_ser_box">
		<ul class="provide_nav">
			<li>服务</li>
			<li>选择</li>
			<li>可前往异地</li>
			<li>价格</li>
			<li>收款方式</li>
		</ul>
		<div class="provide_list_box">
			<ul class="provide_list">
				<li>人工闹钟</li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="service[]" id=""></span></li>
				<li><span><input type="checkbox" class="checkbox" name="land[]" id=""></span></li>
				<li class="orange"><input type="text" value="10">元/次</li>
				<li class="red">
					<select name="" id="">
						<option value="">在线支付</option>
						<option value="">当面付款</option>
					</select>
				</li>
			</ul>
			<ul class="provide_list">
				<li>假扮女友</li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="service[]" id=""></span></li>
				<li><span><input type="checkbox" class="checkbox" name="land[]" id=""></span></li>
				<li class="orange"><input type="text" value="1000">元/次</li>
				<li class="red">
					<select name="" id="">
						<option value="">在线支付</option>
						<option value="">当面付款</option>
					</select>
				</li>
			</ul>
		</div>
		<p class="toLevel">以下服务需要高级会员才能选择<a href="buy_high_vip.php">立即升级</a></p>
		<div class="other_ser_box">
			<p>旅游陪伴</p>
			<p>出席商务场合</p>
			<p>更多服务</p>
		</div>
	</div>
	<!-- 高级会员 -->
	<div class="provide_ser_box">
		<ul class="provide_nav">
			<li>服务</li>
			<li>选择</li>
			<li>可前往异地</li>
			<li>价格</li>
			<li>收款方式</li>
		</ul>
		<div class="provide_list_box">
			<ul class="provide_list">
				<li>人工闹钟</li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="service[]" id=""></span></li>
				<li><span><input type="checkbox" class="checkbox" name="land[]" id=""></span></li>
				<li class="orange"><input type="text" value="10">元/次</li>
				<li class="red">
					<select name="" id="">
						<option value="">在线支付</option>
						<option value="">当面付款</option>
					</select>
				</li>
			</ul>
			<ul class="provide_list">
				<li>假扮女友</li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="service[]" id=""></span></li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="land[]" id=""></span></li>
				<li class="orange"><input type="text" value="1000">元/天</li>
				<li class="red">
					<select name="" id="">
						<option value="">在线支付</option>
						<option value="">当面付款</option>
					</select>
				</li>
			</ul>
			<ul class="provide_list">
				<li>旅游陪伴</li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="service[]" id=""></span></li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="land[]" id=""></span></li>
				<li class="orange"><input type="text" value="1000">元/天</li>
				<li class="red">
					<select name="" id="">
						<option value="">在线支付</option>
						<option value="">当面付款</option>
					</select>
				</li>
			</ul>
			<ul class="provide_list">
				<li>出席商务场合</li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="service[]" id=""></span></li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="land[]" id=""></span></li>
				<li class="orange"><input type="text" value="1000">元/天</li>
				<li class="red">
					<select name="" id="">
						<option value="">在线支付</option>
						<option value="">当面付款</option>
					</select>
				</li>
			</ul>
			<ul class="provide_list">
				<li>更多服务</li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="service[]" id=""></span></li>
				<li><span class="active"><input type="checkbox" class="checkbox" name="land[]" id=""></span></li>
				<li class="orange"><input type="text" value="1000">元/天</li>
				<li class="red">
					<select name="" id="">
						<option value="">在线支付</option>
						<option value="">当面付款</option>
					</select>
				</li>
			</ul>
		</div>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box provide_till fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="padding-bottom: .3rem;border-bottom: 1px solid #737373;margin-bottom: .3rem;">请在此选择您希望对方的付款方式。在每次邀约过程中具体支付方式可以和对方协商并修改此处仅表示您的首选方式并显示给对方。</p>
		<h6 style="color: #949494;margin-top: .15rem;text-align: center;">在线支付是指买方会员通过小鹿平台网站或者APP支付服务方会员提供邀约服务的费用；</h6>
		<h6 style="color: #949494;margin-top: .15rem;text-align: center;">当面支付是指买方会员和服务方会员见面后当面支付该次邀约服务的费用；</h6>
	</div>
	<div class="modal_box provide_modal1 fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<h5 style="color: #fff;font-size: .22rem;margin-bottom: .3rem;">服务说明</h5>
		<div class="provide_desc">
			<h6>1、人工闹钟</h6>
			<p>按照成功男士指定的时间联系他，提醒他出席重要活动</p>
		</div>
		<div class="provide_desc">
			<h6>2、假扮女友</h6>
			<p>假扮成功男士的女友见他的亲朋好友，缓解他单身来自亲友的压力</p>
		</div>
		<div class="provide_desc">
			<h6>3、私人伴游</h6>
			<p>成功男士孤身一人异地出差旅游时，熟悉风土人情的你陪他一起参观游览名胜景点</p>
		</div>
		<div class="provide_desc">
			<h6>4、商务活动充场</h6>
			<p>成功男士出席各类商务活动聚会时，美丽的你陪伴他出席</p>
		</div>
		<div class="provide_desc">
			<h6>5、更多服务</h6>
			<p>更多颜值换取财富的服务，请升级查看</p>
		</div>
	</div>
	<div class="modal_box provide_modal2 fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="padding: .3rem;">只有您勾选的服务，男会员才能对您发出邀约。没有勾选的服务，男会员将无法向您发出邀约</p>
	</div>
	<div class="modal_box provide_modal3 fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="padding: .3rem;">您勾选的服务，表示您愿意前往异地提供。如果您没有勾选的服务，表示您不愿意前往异地提供。</p>
	</div>
	<div class="modal_box provide_modal4 fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="padding: .3rem;">该价格表示每天或者每次服务的单价，每次邀约的总金额是单价X天数。</p>
	</div>
	<div class="modal_box provide_modal5 fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="padding: .3rem;">您选择的收款方式决定了邀约成功后，男方的付款方式。</p>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		$(".provide_nav").on("click","li",function(){
			var idx = $(this).index()+1;
			modal.showModal(".provide_modal"+idx);
		})
		
		$(".provide_list_box").on("click","input[type='checkbox']",function(){
			if($(this).prop("checked") == true){
				$(this).parent("span").removeClass("active");
			}else{
				$(this).parent("span").addClass("active");
			}
		})
	})
</script>
</html>