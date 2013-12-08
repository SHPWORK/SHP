$(document).bind("pageinit", function() {
			var nextId = 1;

			$("#add").click(function() {
				nextId++;
				var content = "<div data-role='collapsible' id='set" + nextId + "'><h3>设定项目 " + nextId + "</h3><p>I am the collapsible content in a set so this feels like an accordion. I am hidden by default because I have the 'collapsed' state; you need to expand the header to see me.</p></div>";

				$("#set").append( content ).collapsibleset('refresh');
			});
});
