<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>联系我们</title>
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
		<h2>联系我们</h2>
		<a href="" class="right_word save_btn">保存</a>
	</div>
	<div class="mt80"></div>
	<div class="contact_box">
		<h4><span></span>请选择联系我们的原因</h4>
		<div class="radio_select">
			<label for="contact1"><span>媒体</span><input type="radio" checked name="contact[]" id="contact1"></label>
			<label for="contact2"><span>商务合作</span><input type="radio" name="contact[]" id="contact2"></label>
			<label for="contact3"><span>其他</span><input type="radio" name="contact[]" id="contact3"></label>
		</div>
		<div class="other_box">
			<h5>如果是其他原因。请说明</h5>
			<textarea name="content" id="" placeholder="请填写其他原因" cols="30" rows="10"></textarea>
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>