<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>邀约消息</title>
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
		<h2>邀约消息</h2>
	</div>
	<div class="mt80"></div>
	<div class="invite_mess_box">
		<div class="imb_item active new">
			<a href="reserve_detail.php">
				<div class="left">
					<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
					<p>美罗</p>
				</div>
				<div class="right">
					<ul>
						<li><img src="images/history_icon1.png" alt="">闹钟预约服务</li>
						<li><img src="images/history_icon2.png" alt="">2018-10-20</li>
						<li>已发出邀约</li>
						<li><img src="images/history_icon2.png" alt="">2018-10-20</li>
					</ul>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
					</div>
					<p class="imb_p">
						<span class="imb_new">新</span>
						<!-- <img src="images/delete.png" class="imb_del" alt=""> -->
					</p>
				</div>
			</a>
		</div>
		<div class="imb_item active pay new">
			<a href="reserve_detail.php">
				<div class="left">
					<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
					<p>美罗</p>
				</div>
				<div class="right">
					<ul>
						<li><img src="images/history_icon4.png" alt="">出席商务场合预约</li>
						<li><img src="images/history_icon2.png" alt="">2018-10-20</li>
						<li>已发出邀约</li>
						<li><img src="images/history_icon2.png" alt="">2018-10-20</li>
					</ul>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
					</div>
					<p class="imb_p">
						<span class="imb_new">新</span>
						<!-- <img src="images/delete.png" class="imb_del" alt=""> -->
					</p>
				</div>
			</a>
		</div>
		<div class="imb_item finish">
			<a href="reserve_detail.php">
				<div class="left">
					<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
					<p>美罗</p>
				</div>
				<div class="right">
					<ul>
						<li><img src="images/history_icon5.png" alt="">出席商务场合预约</li>
						<li><img src="images/history_icon2.png" alt="">2018-10-20</li>
						<li>已发出邀约</li>
						<li><img src="images/history_icon2.png" alt="">2018-10-20</li>
					</ul>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
					</div>
					<p class="imb_p">
						<!-- <span class="imb_new">新</span> -->
						<!-- <img src="images/delete.png" class="imb_del" alt=""> -->
					</p>
				</div>
			</a>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>