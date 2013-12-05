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
        <h1>定时快照</h1>
    </div><!-- /header -->

   <button type="button" data-icon="gear" data-theme="b" data-iconpos="right" data-mini="true" data-inline="true" id="add">增加</button>
   <button type="button" data-icon="plus" data-theme="b" data-iconpos="right" data-mini="true" data-inline="true" id="expand">展开</button>
   <button type="button" data-icon="minus" data-theme="b" data-iconpos="right" data-mini="true" data-inline="true" id="collapse">折叠</button>
   <div data-role="collapsible-set" data-content-theme="d" id="set">
	    <div data-role="collapsible" id="set1" data-collapsed="true">
		<h3>设定项目 1</h3>
		<p>I'm the collapsible content.</p>
	    </div>
   </div>
   <input type="button" data-clear-btn="true"  data-theme="b" data-iconpos="center" data-mini="true" data-inline="true" value="commit"/>
 <script>
		$(document).on("pageinit", function() {
			var nextId = 1;

			$("#add").click(function() {
				nextId++;
				var content = "<div data-role='collapsible' id='set" + nextId + "'><h3>设定项目 " + nextId + "</h3><p>I am the collapsible content in a set so this feels like an accordion. I am hidden by default because I have the 'collapsed' state; you need to expand the header to see me.</p></div>";

				$("#set").append( content ).collapsibleset('refresh');
			});

			$("#expand").click(function() {
				$("#set").children(":last").trigger( "expand" );
			});

			$("#collapse").click(function() {
				$("#set").children(":last").trigger( "collapse" );
			});
		});
	</script>
</div><!-- /page -->



</body>
</html>
