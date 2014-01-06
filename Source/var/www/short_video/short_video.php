<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SHP</title>
	<link rel="stylesheet"  href="../css/themes/default/jquery.mobile-1.3.2.min.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../js/jquery.js"></script>
	<script src="../_assets/js/index.js"></script>
	<script src="../js/jquery.mobile-1.3.2.min.js"></script>

</head>
<body>



<div data-role="page" class="jqm-demos jqm-demos-index">

    <div data-role="header" data-theme="b">
        <a href="../index.html" data-rel="back" data-icon="arrow-l" data-iconpos="notext" data-shadow="false" data-icon-shadow="false">Back</a>
        <h1>抓拍视频</h1>
    </div><!-- /header -->

	<div data-role="content" class="jqm-content" id="mydiv1">

		<video controls="controls" autoplay="autoplay" data-role="content" class="jqm-content" width="320">
			<source src="./short_video/gizmo.webm" type="video/webm" />
			Video not playing? <a href="./short_video/gizmo.webm">Download file</a> instead.
		</video> 


		<input type="button" data-icon="plus" data-theme="e" id="short" value="抓拍">

	</div><!-- /panel -->

</div><!-- /page -->


<script type="text/javascript">
$('#short').click(function() {
    $.post("./short.php",
    {
    argv1:"我是传给PHP的第1个参数",
    argv2:"我是传给PHP的第2个参数",
    argv3:Math.random()
    },
    function(return_data){
    $("#mydiv1").append(return_data);
    $("#myimg1").attr("src", "./short_images/" + return_data);

    alert("PHP-POST&Run-BASH完毕！\n");
    });
});
</script>


</body>
</html>
