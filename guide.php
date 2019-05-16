<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>引导页</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/swiper.min.js"></script>
</head>
<body>
	<div class="swiper-container index_banner">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="images/guide_img1.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/guide_img2.jpg" alt=""></div>
			<div class="swiper-slide"></div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</body>
<script>
	$(function(){
		var num = 0;
		var swiper = new Swiper('.index_banner',{
			initialSlide:0,			//默认第1个显示
			resistanceRatio: 0,		//为0则取消回弹距离
			onReachEnd: function(swiper){
				window.location.replace("login.php");
			},
		});
	})
</script>
</html>