<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关闭账号原因</title>
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
		<h2>关闭账号原因</h2>
		<a href="" class="right_word save_btn">保存</a>
	</div>
	<div class="mt80"></div>
	<div class="reason_box">
		<div class="rb_word_box">
			<p>关闭账号后，您的个人信息将不再被展示。</p>
			<p>其他会员将无法看到您的个人信息，请慎重考虑。</p>
			<h4>请选择关闭账号的原因</h4>
		</div>
		<div class="reason_select">
			<label for="reason1"><input type="checkbox" name="reason[]" id="reason1">本网站使用太复杂</label>
			<label for="reason2"><input type="checkbox" name="reason[]" id="reason2">被酒托，婚托等骚扰</label>
			<label for="reason3"><input type="checkbox" name="reason[]" id="reason3">被其他会员骚扰</label>
			<label for="reason4"><input type="checkbox" name="reason[]" id="reason4">会员太少，看起来就那么几个</label>
			<label for="reason5"><input type="checkbox" name="reason[]" id="reason5">其他原因</label>
		</div>
		<h6>请选择至少一个</h6>
	</div>
	<?php include "footer.php"; ?>
</body>
<script src="js/common.js"></script>
</html>