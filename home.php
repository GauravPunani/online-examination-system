<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="particles.js"></script>
	<style type="text/css">
		body{background: cornflowerblue;}
		#logo{margin: 0 auto; text-align: center; margin-top:400px; margin-left: 630px;position: absolute;}
	</style>
	<title>Particles.js Demo</title>
</head>
<body>
<div id="particles-js">
	<h1 >WELCOME TO ONLINE EXAMINATION SYSTEM</h1>
	<div class="center">
	<button id="button">START EXAM</button>
	</div>
</div>
<script type="text/javascript">
	document.getElementById("button").onclick=function () {
		location.href="select.php";
	}
	particlesJS("particles-js", {"particles":{"number":{"value":200,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"star","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>
</body>
</html>
<style type="text/css">
h1
{
	font-family: tahoma;
	color:white;
	text-align: center;
}
	#button
	{
		position: fixed;
		border: none;
		background-color: orange;
		color:white;
		margin-left: 340px;
		margin-top: 150px;
		width: 300px;
		height: 50px;
		font-size: 20px;
		font-family: tahoma;
		border-radius: 20px;
		cursor: pointer;
	}

</style>