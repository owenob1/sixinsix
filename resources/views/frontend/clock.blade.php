<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>


</head>

<body onload="startTime()" style="background-color: black;">

<center>
	<br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br />
	<div id="txt" class="content" style="font-family: 'Roboto Mono', monospace; color: red; font-size:20vw;"></div>
</center>

</body>
</html>
