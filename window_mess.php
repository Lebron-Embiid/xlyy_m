<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统消息</title>
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
		<h2>系统消息</h2>
	</div>
	<div class="mt80"></div>
	<div class="window_mess_box">
		<div class="window_mess_item">
			<h5>2018-09-06</h5>
			<div class="wmi_box">
				<div class="wmi_img"><img src="images/window_mess1.png" alt=""></div>
				<div class="wmi_right">
					<div class="wmi_content">
						<p>您收到会员”阿妹“的红包，金额为100元。</p>
						<a href="window_detail.php">请点击此处查看</a>
					</div>
					<h6>
						<span class="wmi_text">未读</span>
						<span class="wmi_new">新</span>
						<!-- <img src="images/delete.png" class="wmi_del" alt=""> -->
					</h6>
				</div>
			</div>
		</div>
		<div class="window_mess_item">
			<h5>2018-09-06</h5>
			<div class="wmi_box">
				<div class="wmi_img"><img src="images/window_mess2.png" alt=""></div>
				<div class="wmi_right">
					<div class="wmi_content">
						<p>您成功提现8000元到您的微信账号。</p>
						<a href="window_detail.php">请点击此处查看</a>
					</div>
					<h6>
						<!-- <span class="wmi_new">新</span> -->
						<img src="images/delete.png" class="wmi_del" alt="">
					</h6>
				</div>
			</div>
		</div>
		<div class="window_mess_item">
			<h5>2018-09-06</h5>
			<div class="wmi_box">
				<div class="wmi_img"><img src="images/window_mess3.png" alt=""></div>
				<div class="wmi_right">
					<div class="wmi_content">
						<p>客服：您的钱包内余额已经超过5000元人名币，但是您没有关联任何账号。您不可以提现。</p>
					</div>
					<h6>
						<!-- <span class="wmi_new">新</span> -->
						<img src="images/delete.png" class="wmi_del" alt="">
					</h6>
				</div>
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>