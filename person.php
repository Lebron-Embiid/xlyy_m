<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
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
	<script src="js/jquery.knob.js"></script>
</head>
<body>
	<div class="person_box">
		<div class="person_top">
			<div class="img"><img src="images/person_avatar.jpg" alt=""></div>
			<div class="progress_box">
				<input class="knob" data-fgColor="#ffcc33" style="outline: none;" data-thickness=".05" data-readOnly="true" value="70">
				<span>信息完整度</span>
			</div>
		</div>
		<ul class="person_nav">
			<li><a href="attention.php"><p>关注</p><span>8</span></a></li>
			<li><a href="fans.php"><p>粉丝</p><span>85</span></a></li>
			<li><a href=""><p>会员等级</p><span>初级</span></a></li>
		</ul>
	</div>
	<div class="person_content">
		<div class="pc_item">
			<h4>进度</h4>
			<div class="pc_item_box">
				<ul class="pc_process_box">
					<li class="active">
						<span></span>
						<p>基本信息</p>
					</li>
					<li class="active">
						<span></span>
						<p>照片</p>
					</li>
					<li class="active">
						<span></span>
						<p>描述</p>
					</li>
					<li>
						<span></span>
						<p>实名认证</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="pc_item mb50">
			<h4>认证</h4>
			<div class="pc_item_box">
				<ul class="pc_cert_box">
					<li class="active">
						<span></span>
						<p>手机认证</p>
					</li>
					<li>
						<a href="name_auth.php">
							<span></span>
							<p>我的认证</p>
						</a>
					</li>
					<li>
						<a href="auth.php">
							<span></span>
							<p>第三方认证</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="person_nav_box mb50">
			<div class="pn_item">
				<a href="">
					<p><img src="images/person_icon1.png" class="icon" alt="">我的钱包</p>
					<p><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
			<div class="pn_item">
				<a href="">
					<p><img src="images/person_icon2.png" class="icon" alt="">会员等级</p>
					<p><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
			<div class="pn_item">
				<a href="top.php">
					<p><img src="images/person_icon2.png" class="icon" alt="">我的置顶</p>
					<p><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
		</div>
		<div class="person_nav_box mb50">
			<div class="pn_item">
				<a href="">
					<p><img src="images/person_icon3.png" class="icon" alt="">我的初级会员</p>
					<p><span>2019-10-10到期</span><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
			<div class="pn_item">
				<a href="">
					<p><img src="images/person_icon4.png" class="icon" alt="">基本信息</p>
					<p><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
			<div class="pn_item">
				<a href="">
					<p><img src="images/person_icon5.png" class="icon" alt="">自我介绍</p>
					<p><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
			<div class="pn_item">
				<a href="">
					<p><img src="images/person_icon6.png" class="icon" alt="">照片</p>
					<p><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
			<div class="pn_item">
				<a href="">
					<p><img src="images/person_icon7.png" class="icon" alt="">预约历史</p>
					<p><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
		</div>
		<div class="person_nav_box mb50">
			<div class="pn_item">
				<a href="">
					<p><img src="images/person_icon8.png" class="icon" alt="">设置</p>
					<p><img src="images/three.png" class="three" alt=""></p>
				</a>
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script>
	$(function(){
		$(".knob").knob();
	})
</script>
</html>