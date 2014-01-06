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
    <div data-role="content">
         <div>
	    <select name="flip-2" id="flip-2" data-role="slider" data-track-theme="a" data-theme="a">
		<option value="off">Off</option>
		<option value="on">On</option>
	    </select>
		<ul data-role="listview" data-inset="true">
		<li data-role="fieldcontain">
		    <label for="textarea1">开始时间:</label>
		    <input type="text" name="name1" id="name1" value="2013/12/12 10:00:00" data-clear-btn="true">
		</li>
		<li data-role="fieldcontain">
		    <label for="textarea2">结束时间:</label>
		   <input type="text" name="name2" id="name2" value="2013/12/12 18:00:00" data-clear-btn="true">
		</li>
		</ul>
         </div>
         <div>
            <label for="time-1" data-clear-btn="false">紧急联系电话: </label>
	    <ul data-role="list" data-theme="a">
		    <li>telephone 1:<input type="time" data-clear-btn="true" name="time-2" id="time-2" value="12345678901"/></li>
		    <li>telephone 2:</li>
		    <li>telephone 3:</li>
		    
	    </ul>
         </div>
         <li class="ui-body ui-body-b">
         <fieldset class="ui-grid-a">
            <div class="ui-block-a"><button type="submit" data-theme="d">修改</button></div>
            <div class="ui-block-b"><button type="submit" data-theme="a">提交</button></div>
         </fieldset>
        </li>
  </div><!-- content -->


</div><!-- /page -->



</body>
</html>