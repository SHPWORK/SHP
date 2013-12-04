<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SHP</title>
	<link rel="stylesheet"  href="./css/themes/default/jquery.mobile-1.3.2.min.css">
	<link rel="stylesheet" href="./_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="./js/jquery.js"></script>
	<script src="./_assets/js/index.js"></script>
	<script src="./js/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-demos-index">

	<div data-role="header" class="jqm-header">
        <h1 class="jqm-logo"><a href=""><img src="./_assets/img/SHP-logo.png" alt="SHP"></a></h1>
		<!-- <a href="#" class="jqm-navmenu-link" data-icon="bars" data-iconpos="notext">Navigation</a> -->
	</div><!-- /header -->

	<div data-role="content" class="jqm-content">
		<a href="#" data-role="button" data-icon="info">快速巡检</a>
		<a href="#" data-role="button" data-icon="star">定时快照</a>

		<!-- <a href="./short_image/short_image.html" data-role="button" data-icon="star" data-theme="e">抓拍照片</a> -->
		<?php
		    echo "<a href=\"./short_image/short_image.php?t=".rand()."\" data-role=\"button\" data-icon=\"star\" data-theme=\"e\">抓拍照片</a>\n";
		?>

		<!-- <a href="#" data-role="button" data-icon="star">抓拍视频</a> -->
		<?php
		    echo "<a href=\"./short_video/short_video.php?t=".rand()."\" data-role=\"button\" data-icon=\"star\" data-theme=\"e\">抓拍视频</a>\n";
		?>

		<a href="#" data-role="button" data-icon="gear" data-theme="a">系统设置</a>

	</div><!-- /panel -->
</div><!-- /page -->


</body>
</html>
