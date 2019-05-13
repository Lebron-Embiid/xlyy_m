<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索结果</title>
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
	<style>
		.header_back a.right_word{
			color: #ffcc33;
		}
		a.back_top{
			position: fixed;
			left: 50%;
			bottom: 1.2rem;
			transform: translateX(-50%);
			width: 1.55rem;
			height: .65rem;
			line-height: .65rem;
			font-size: .24rem;
		}
	</style>
</head>
<body>
	<div class="header_back">
		<a href="javascript:history.go(-1);" class="left_back"><img src="images/back.png" alt=""></a>
		<h2>搜索结果</h2>
		<a href="" class="right_word">我要置顶</a>
	</div>
	<div class="mt80"></div>
	<div class="result_box">
		<div class="result_select">
			<div>
				<select name="" id="">
					<option value="">智能排序</option>
					<option value="">智能排序</option>
					<option value="">智能排序</option>
				</select>
			</div>
		</div>
		<div class="result_item active top">
			<a href="">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<ul>
						<li>凌潇潇</li>
						<li>年龄：25</li>
						<li><img src="images/address2.png" alt="">广州市</li>
						<li>身高：1.68</li>
					</ul>
					<p>寻找温柔的你</p>
				</div>
			</a>
		</div>
		<div class="result_item active top">
			<a href="">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<ul>
						<li>凌潇潇</li>
						<li>年龄：25</li>
						<li><img src="images/address2.png" alt="">广州市</li>
						<li>身高：1.68</li>
					</ul>
					<p>寻找温柔的你</p>
				</div>
			</a>
		</div>
		<div class="result_item">
			<a href="">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<ul>
						<li>凌潇潇</li>
						<li>年龄：25</li>
						<li><img src="images/address2.png" alt="">广州市</li>
						<li>身高：1.68</li>
					</ul>
					<p>寻找温柔的你</p>
				</div>
			</a>
		</div>
		<div class="result_item">
			<a href="">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<ul>
						<li>凌潇潇</li>
						<li>年龄：25</li>
						<li><img src="images/address2.png" alt="">广州市</li>
						<li>身高：1.68</li>
					</ul>
					<p>寻找温柔的你</p>
				</div>
			</a>
		</div>
		<div class="result_item">
			<a href="">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<ul>
						<li>凌潇潇</li>
						<li>年龄：25</li>
						<li><img src="images/address2.png" alt="">广州市</li>
						<li>身高：1.68</li>
					</ul>
					<p>寻找温柔的你</p>
				</div>
			</a>
		</div>
		<div class="result_item">
			<a href="">
				<div class="img"><img src="images/girl_avatar_img1.jpg" alt=""></div>
				<div class="right">
					<ul>
						<li>凌潇潇</li>
						<li>年龄：25</li>
						<li><img src="images/address2.png" alt="">广州市</li>
						<li>身高：1.68</li>
					</ul>
					<p>寻找温柔的你</p>
				</div>
			</a>
		</div>
		<a href="javascript:void(0);" class="back_top submit_btn">回到顶部</a>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		$(".back_top").click(function(){
			$('html,body').animate({'scrollTop':0},100);
		})
	})
</script>
</html>