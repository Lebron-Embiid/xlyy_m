<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预约详情</title>
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
			background: #f5f5f5;
		}
		.ci_right_box h5{
			color: #040000;
			font-size: .22rem;
			margin-bottom: .05rem;
		}
		.ci_right_box h5 img{
			display: inline-block;
			width: .29rem;
			margin-left: .1rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>预约详情</h2>
	</div>
	<div class="mt80"></div>
	<div class="reserve_detail_box">
		<div class="reserve_status_box">
			<ul class="ip_process_ul">
				<li class="active">
					<div>
						<p>发出邀约</p>
						<span></span>
					</div>
				</li>
				<li class="cancle">
					<div>
						<p>协商价格</p>
						<span></span>
					</div>
				</li>
				<li class="cancle">
					<div>
						<p>确认支付方式</p>
						<span></span>
					</div>
				</li>
				<li>
					<div>
						<p>邀约成功下线服务</p>
						<span></span>
					</div>
				</li>
				<li>
					<div>
						<p>评价</p>
						<span></span>
					</div>
				</li>
			</ul>
		</div>
		<div class="reserve_content_box">
			<div class="chat_item active">
				<h6>2018-10-23 12:23</h6>
				<h4>凌苗苗</h4>
				<div class="chat_content">
					<div class="ci_left">
						<img src="images/message_img3.jpg" alt="">
					</div>
					<div class="ci_right_box">
						<h5>我的投诉<img src="images/history_icon6.png" alt=""></h5>
						<div class="ci_right" style="min-height: 1.2rem;">
							<p>您现在可以对该次邀约进行：</p>
						</div>
						<p style="color: #040000;font-size: .2rem;margin-top: .05rem;">我们已收到您的投诉，我们将进行核实</p>
					</div>
				</div>
			</div>
			<div class="chat_item active">
				<h6>2018-10-23 12:23</h6>
				<h4>凌苗苗</h4>
				<div class="chat_content">
					<div class="ci_left">
						<img src="images/message_img3.jpg" alt="">
					</div>
					<div class="ci_right">
						<div class="rcb_box">
							<p>您现在可以对该次邀约进行：</p>
							<ul class="ci_btn">
								<li class="active"><a href="evaluation.php" class="rcb_eval">评价</a></li>
								<li><a href="complaint.php" class="rcb_complaint">投诉</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="chat_item active">
				<h6>2018-10-23 12:23</h6>
				<h4>凌苗苗</h4>
				<div class="chat_content">
					<div class="ci_left">
						<img src="images/message_img3.jpg" alt="">
					</div>
					<div class="ci_right">
						<div class="rcb_box">
							<p>您是否接受对方的新报价？</p>
							<div class="rcb_price_box">
								<span class="rpb_minus">-</span>
								<div><input type="number" name="rcb_price" class="rpb_price" value="1000">元</div>
								<span class="rpb_plus">+</span>
							</div>
							<ul class="ci_btn">
								<li class="active"><a href="">同意</a></li>
								<li><a href="">拒绝</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="chat_item active">
				<h6>2018-10-23 12:23</h6>
				<h4>王总</h4>
				<div class="chat_content">
					<div class="ci_left">
						<img src="images/message_img3.jpg" alt="">
					</div>
					<div class="ci_right">
						<p>您已经拒绝接受对方的邀约。</p>
					</div>
				</div>
			</div>
			<div class="chat_item">
				<h6>2018-10-23 12:23</h6>
				<h4>凌苗苗</h4>
				<div class="chat_content">
					<div class="ci_left">
						<img src="images/message_img2.jpg" alt="">
					</div>
					<div class="ci_right max">
						<div class="rcb_box">
							<h5>我的邀约已经发出，请等待对方回复。</h5>
							<ul class="rcb_ul">
								<li><img src="images/reserve_icon1.png" alt=""><p>邀约类型：出席商务场合</p></li>
								<li><img src="images/reserve_icon2.png" alt=""><p>报价：1000元/天</p></li>
								<li><img src="images/reserve_icon3.png" alt=""><p>开始日期：2019-03-26</p></li>
								<li><img src="images/reserve_icon3.png" alt=""><p>截止日期：2019-03-30</p></li>
								<li><img src="images/reserve_icon4.png" alt=""><p>开始时间：6:00</p></li>
								<li><img src="images/reserve_icon5.png" alt=""><p>联系地址：广东省深圳市福田区金田路1号年货大厦10楼501室</p></li>
								<li><img src="images/reserve_icon6.png" alt=""><p>联系人：石磊</p></li>
								<li><img src="images/reserve_icon7.png" alt=""><p>联系电话：13689564782</p></li>
								<li><img src="images/reserve_icon8.png" alt=""><p>备注：请穿黑色晚宴礼服。如果没有，麻烦租一套或者和我联系，我帮你准备。</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="chat_item active">
				<h6>2018-10-23 12:23</h6>
				<h4>凌苗苗</h4>
				<div class="chat_content">
					<div class="ci_left">
						<img src="images/message_img3.jpg" alt="">
					</div>
					<div class="ci_right max">
						<div class="rcb_box">
							<h5>我的邀约已经发出，请等待对方回复。</h5>
							<ul class="rcb_ul">
								<li><img src="images/reserve_icon1.png" alt=""><p>邀约类型：出席商务场合</p></li>
								<li><img src="images/reserve_icon2.png" alt=""><p>报价：1000元/天</p></li>
								<li><img src="images/reserve_icon3.png" alt=""><p>开始日期：2019-03-26</p></li>
								<li><img src="images/reserve_icon3.png" alt=""><p>截止日期：2019-03-30</p></li>
								<li><img src="images/reserve_icon4.png" alt=""><p>开始时间：6:00</p></li>
								<li><img src="images/reserve_icon5.png" alt=""><p>联系地址：广东省深圳市福田区金田路1号年货大厦10楼501室</p></li>
								<li><img src="images/reserve_icon6.png" alt=""><p>联系人：石磊</p></li>
								<li><img src="images/reserve_icon7.png" alt=""><p>联系电话：13689564782</p></li>
								<li><img src="images/reserve_icon8.png" alt=""><p>备注：请穿黑色晚宴礼服。如果没有，麻烦租一套或者和我联系，我帮你准备。</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal_shadow"></div>
	<!-- 信息必须完善 弹窗 -->
	<div class="modal_box fill_use_modal fix">
		<div class="close_img"><img src="images/close.png" alt=""></div>
		<p style="margin-top: .5rem;text-align: center;">您的会员信息必须填满80%，才能使用该功能！</p>
		<a href="basic_info.php" class="single_ok">立即填写</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){		
		var modal = new LModal();
		$(".vip_fixed_footer").on("click",".vf_right",function(){
			modal.showModal(".fill_use_modal");
		})
		
		
		$(".rcb_price_box").on("click",".rpb_minus",function(){
			var m_price = parseInt($(this).siblings().find(".rpb_price").val());
			m_price-=1000;
			if(m_price <= 0){
				m_price = 0;
			}
			$(this).siblings().find(".rpb_price").val(m_price);
		})
		
		$(".rcb_price_box").on("input",".rpb_price",function(){
			price = parseInt($(this).val());
		})
		
		$(".rcb_price_box").on("click",".rpb_plus",function(){
			var m_price = parseInt($(this).siblings().find(".rpb_price").val());
			m_price+=1000;
			// if(m_price >= 10000){
			// 	m_price = 10000;
			// }
			$(this).siblings().find(".rpb_price").val(m_price);
		})
	})
</script>
</html>