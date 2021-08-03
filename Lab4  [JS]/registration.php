<html>
	<head></head>
	<body>
	<script>
	var string1 = "demo";
    var intvalue = 30;
    alert( string1 + intvalue );
	</script>
		<form>
			<input id="uname" onkeyup="writeOp(this)" type="text" placeholder="Username"><br>
			<span id="op"></span><br>
			<input type="password" placeholder="Password"><br>
		</form>
		<button id="btn_g" oncick="viewGForm()">Login with Google</button>
		<form id="g_form" style="display:none;">
			<input type="text" placeholder="Gmail"><br>
			<input type="password" placeholder="Gmail password"><br>
		</form>
		<button onclick="turnOn()">Turn On</button>
		<img id="bulb" src="pic_bulboff.gif">
		<button onclick="turnOff()">Turn Off</button>
		<br>
		<span onmouseover="showDetails()" onmouseout="hideDetails()">Aiub</span>
		<p id="info" style="display:none">Americal International University-Bangladesh</p>
		
		<script src = "myjs.js"></script>
	</body>
</html>