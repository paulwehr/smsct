
<html>
<head>
</head>
<body>
<div id='logo_div' style="background-color:#44f; float:left;"></div>
<script src="./canvas_turtle.packed.js" type="text/javascript"></script>
<script>
var t = new canvas_turtle("logo_div", {
	width: 200,
	height: 200,
});
t.color("#fff");
t.font("20px Arial");
t.thick(2);

for(var j = 0; j < 12; j++) {
    for(var i = 0; i < 4; i++)
    {
    	t.draw(50);
    	t.right(90);
    	
    }
    t.right(30);
    t.move(10);
}
t.move(90);
t.left(90);
t.move(50);
t.right(180);
t.turtleprint("Hello world");
</script>
<a href="http://webcodingeasy.com/JS-classes/Canvas-Turtle-graphics-using-javascript#js_api_method_list">Turtle graphics function documentatino</a>
</body>
</html>