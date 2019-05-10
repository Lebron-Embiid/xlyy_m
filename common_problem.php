<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>常见问题</title>
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
		<h2>常见问题</h2>
	</div>
	<div class="mt80"></div>
	<div class="common_problem_box">
		<div class="problem_item active">
			<div class="cpi_title">
				<p>这个邀约的价格包括一切费用吗？我往返的交通费用是要自己承担吗？</p>
				<img src="images/up.png" clas alt="">
			</div>
			<div class="cpi_answer">
				<span>回复：</span>
				<p>您好！价格是不包含来往交通费的，请根据你的自身条件选择前往约定地点。如您需要对方承担您往返的交通费用，请事先与对方协商。感谢您对xxx网站的支持，祝您生活愉快。</p>
			</div>
		</div>
		<div class="problem_item active">
			<div class="cpi_title">
				<p>提前多久发出邀约比较合适？</p>
				<img src="images/up.png" clas alt="">
			</div>
			<div class="cpi_answer">
				<span>回复：</span>
				<p>您好！价格是不包含来往交通费的，请根据你的自身条件选择前往约定地点。如您需要对方承担您往返的交通费用，请事先与对方协商。感谢您对xxx网站的支持，祝您生活愉快。</p>
			</div>
		</div>
		<div class="problem_item active">
			<div class="cpi_title">
				<p>邀约的价格都包括了什么内容或者说什么服务？</p>
				<img src="images/up.png" clas alt="">
			</div>
			<div class="cpi_answer">
				<span>回复：</span>
				<p>您好！价格是不包含来往交通费的，请根据你的自身条件选择前往约定地点。如您需要对方承担您往返的交通费用，请事先与对方协商。感谢您对xxx网站的支持，祝您生活愉快。</p>
			</div>
		</div>
		<div class="problem_item active">
			<div class="cpi_title">
				<p>邀约有什么保障？对方不出现怎么办?</p>
				<img src="images/up.png" class="cpi_btn" alt="">
			</div>
		</div>
	</div>
</body>
<script src="js/common.js"></script>
<script>
	$(function(){
		$(".common_problem_box").on("click",".cpi_title",function(){
			if($(this).parents(".problem_item").hasClass("active")){
				$(this).parents(".problem_item").removeClass("active");
			}else{
				$(this).parents(".problem_item").addClass("active");				
			}
		})
	})
</script>
</html>