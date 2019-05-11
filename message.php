<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>消息</title>
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
	</style>
</head>
<body>
	<div class="header_back">
		<!-- <a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a> -->
		<h2>消息</h2>
	</div>
	<div class="mt80"></div>
	<div class="message_box">
		<ul class="message_nav">
			<li>
				<a href="">
					<div class="left">
						<div class="icon"><img src="images/message_icon1.png" alt=""><span>1</span></div>
						<p>系统消息</p>
					</div>
					<div class="right">
						<h5>包括客服消息，收发红包消息等</h5>
						<img src="images/three.png" class="next" alt="">
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="left">
						<div class="icon"><img src="images/message_icon2.png" alt=""><span>2</span></div>
						<p>邀约信息</p>
					</div>
					<div class="right">
						<h5>所有邀约，邀约评论和投诉消息</h5>
						<img src="images/three.png" class="next" alt="">
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="left">
						<div class="icon"><img src="images/message_icon3.png" alt=""><span>2</span></div>
						<p>心动与关注</p>
					</div>
					<div class="right">
						<h5>关注，被粉丝关注，申请隐私照片等</h5>
						<img src="images/three.png" class="next" alt="">
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="left">
						<div class="icon"><img src="images/message_icon4.png" alt=""><span>3</span></div>
						<p>会员通知</p>
					</div>
					<div class="right">
						<h5>会员购买，会员到期，升级和降级等</h5>
						<img src="images/three.png" class="next" alt="">
					</div>
				</a>
			</li>
		</ul>
		<div class="message_content">
			<div class="message_item active">
				<a href="chat.php">
					<div class="mi_left">
						<img src="images/message_img1.jpg" alt="">
					</div>
					<div class="mi_right">
						<h4>我希望和你明天在深证湾前海和你见面，怎么样？</h4>
						<p><span class="mr_status">未读</span><span class="mr_time">2018-12-13 06:55</span><span class="mr_new">新</span><p>
					</div>
				</a>
			</div>
			<div class="message_item">
				<a href="chat.php">
					<div class="mi_left">
						<img src="images/message_img2.jpg" alt="">
					</div>
					<div class="mi_right">
						<h4>嗨，你好呀，有没有兴趣见面?</h4>
						<p><span class="mr_status">已读</span><span class="mr_time">2018-12-13 06:55</span><img src="images/delete.png" class="mr_del" alt=""><p>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="modal_shadow"></div>
	<div class="modal_box del_mess_modal fix">
		<p style="margin: .6rem 0 .4rem;text-align: center;font-size: .22rem;">确定删除该消息？</p>
		<div class="more_btn_box">
			<a href="" class="modal_mess_btn active">确定</a>
			<a href="javascript:void(0);" class="modal_cancle_btn">取消</a>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		var modal = new LModal();
		// 图片预览
		$(".message_content").on("click",".mr_del",function(e){
			e.stopPropagation();
			e.preventDefault();
			modal.showModal(".del_mess_modal");
		})
	})
</script>
</html>