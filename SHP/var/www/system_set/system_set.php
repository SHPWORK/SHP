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
        <h1>系统设置</h1>
    </div><!-- /header -->
<!--safe mode open and close
<div data-role="fieldcontain">
    <label for="prepend">safe mode</label>
    <button id="prepend" data-role="button" data-mini="true" data-inline="true">open</button>
    <button id="append" data-role="button" data-mini="true" data-inline="true">close</button>
</div>
-->
<div>
    <label for="flip-2">safe mode</label>
    <select name="flip-2" id="flip-2" data-role="slider" data-track-theme="a" data-theme="a">
        <option value="off">Off</option>
        <option value="on">On</option>
    </select>
</div>
    <label for="time-1" data-clear-btn="false">StartTime: </label>
    <input type="time" data-clear-btn="false" name="time-1" id="time-1" value=""/>
    <label for="time-2"  data-clear-btn="true">EndTime:</label>
    <input type="time" data-clear-btn="true" name="time-2" id="time-2" value=""/>

    <ul data-role="listview">
	    <li>telephone 1:</li>
	    <li>telephone 2:</li>
	    <li>telephone 3:</li>
	    <li>telephone 4:</li>
	    <li>telephone 5:</li>
    </ul>

    <a href="#" data-role="button" data-mini="true" data-inline="true" data-icon="check" data-theme="b">commit</a>
<!--js-->



</div><!-- /page -->



</body>
</html>
