<!DOCTYPE html>
<html>
<head>
<title>Thanks for registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css"/>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">\
		<link href="https://fonts.googleapis.com/css?family=Gravitas One" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="stylesheet/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="stylesheet/jquery.fancybox-buttons.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="stylesheet/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="stylesheet/stylesheet.css">
</head>

<body>
	<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="height: 1000px; background-color: #ccbc65  ">
				
				<?php
				session_start();
				$email=$_SESSION['email'];   

				echo "welcome " . "$email" . "!";

				?>
				


				</div>
			</div>

	</div>



		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-thumbs.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<script src="js/script.js"></script>
</body>
</html> 