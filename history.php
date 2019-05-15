<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预约历史</title>
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
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>预约历史</h2>
	</div>
	<div class="mt80"></div>
	<div class="my_history_box">
		<h4>共3条</h4>
		<a href="reserve_detail.php">
			<div class="history_item">
				<div class="left auth">
					<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
					<p>凌潇潇</p>
				</div>
				<div class="right">
					<ul>
						<li><img src="images/history_icon1.png" class="icon" alt="">叫醒服务</li>
						<li><img src="images/history_icon2.png" class="icon" alt="">2018-10-20</li>
						<li><img src="images/history_icon3.png" class="icon" alt="">已完成、待评价</li>
						<li><img src="images/history_icon2.png" class="icon" alt="">2018-10-27</li>
					</ul>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
					</div>
				</div>
			</div>
		</a>
		<a href="reserve_detail.php">
			<div class="history_item finish">
				<div class="left auth">
					<div class="img"><img src="images/girl_avatar_img2.jpg" alt=""></div>
					<p>凌潇潇</p>
				</div>
				<div class="right">
					<ul>
						<li><img src="images/history_icon4.png" class="icon" alt="">出席商务场合</li>
						<li><img src="images/history_icon2.png" class="icon" alt="">2018-10-20</li>
						<li><img src="images/history_icon3.png" class="icon" alt="">已评价<img src="images/star.png" class="star" alt=""><img src="images/star.png" class="star" alt=""><img src="images/star.png" class="star" alt=""><img src="images/star.png" class="star" alt=""><img src="images/star.png" class="star" alt=""></li>
						<li><img src="images/history_icon2.png" class="icon" alt="">2018-10-27</li>
					</ul>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
					</div>
				</div>
			</div>
		</a>
		<a href="reserve_detail.php">
			<div class="history_item">
				<div class="left auth">
					<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
					<p>凌潇潇</p>
				</div>
				<div class="right">
					<ul>
						<li><img src="images/history_icon5.png" class="icon" alt="">旅游陪伴</li>
						<li><img src="images/history_icon2.png" class="icon" alt="">2018-10-20</li>
						<li><img src="images/history_icon6.png" class="icon" alt="">被他投诉</li>
						<li><img src="images/history_icon2.png" class="icon" alt="">2018-10-27</li>
					</ul>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>