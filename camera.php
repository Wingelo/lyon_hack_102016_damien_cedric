<!doctype html>
<html>
	<head>
		<title>Camera</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style_photo.css">
	</head>
	<body>
		<h1>CAPTURE VIDEO</h1>
		<video id="video" width="640" height="480" autoplay></video>
		<canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
		<img id="image" src="" alt="" width="640" height="480" />

		<br/>

		<button id="snap">Prendre une photo</button>
		<button id="snap_black_white">Convertir en blanc et noir</button>
		<button id="snap_inverse">Inversion de couleurs</button>
		<button id="send_snap">Envoyer sur le serveur</button>

		<script src="js/jquery-1.11.0.min.js"></script>	
		<script src="js/take_picture.js"></script>
	</body>
</html>
