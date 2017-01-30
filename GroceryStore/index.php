<!DOCTYPE html>
<html>
<head>
<title>Grocery Store</title>
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
				<div class="col-md-2" style="height: 50px; background-color:  ">
				</div>
				<div class="col-md-8" style="height: 50px; background-color: ">
				
			<!-- 	 <img src="img/index.jpg" class="img-style">
				 <button class="btn btn-success btn-lg classic_button">Shop now</button> -->

				 <div class="img-wrapper">
				    <img class="img-responsive" id="img-changeStyle" src="img/index.jpg">
				    <div class="img-overlay">
				    <!--   <button class="btn btn-lg btn-success">Shop Now</button> -->
							
							<!-- Trigger the modal with a button -->
								<!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">New User</button> -->

									<!-- <div class="container"> -->
									 
									  <!-- Trigger the modal with a button -->
									  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">New User</button>

									  <!-- Modal -->
									  <div class="modal fade" id="myModal" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
								      <div class="modal-header">
								       
								        <h4 class="modal-title">New to Grocery Store! &nbsp; Register now</h4>
								      </div>
								      <div class="modal-body">
								         <form id="myForm" action="register.php" method="POST">
								         <div class="form-group">
										    <label for="firstName">First Name:</label>
										    <input type="text" name="firstName" class="form-control" id="firstName" required="">
										  </div>
										  <div class="form-group">
										    <label for="lastName">Last Name:</label>
										    <input type="text" name="lastName" class="form-control" id="lastName" required>
										  </div>
										  <div class="form-group">
										    <label for="email">Email address:</label>
										    <input type="email" name="email" class="form-control" id="email" required>
										  </div>
										  <div class="form-group">
										    <label for="pwd">Password:</label>
										    <input type="password" name="pwd" class="form-control" id="pwd" required>
										  </div>
										  <button type="submit" class="btn btn-primary">Register</button>
										  </form>
										  </div>
										  </div>
										  </div>
										</div>



								<!-- 	<div class="container">
									  <h2>Modal Example</h2> -->
									  <!-- Trigger the modal with a button -->
									  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal1">Shop now</button>

									  <!-- Modal -->
									  <div class="modal fade" id="myModal1" role="dialog">
									    <div class="modal-dialog">
									    
									      <!-- Modal content-->
									      <div class="modal-content">
									        
									        <div class="modal-body">
									          <form id="myForm" action="login.php" method="POST">
									  <div class="form-group">
									    <label for="email">Email address:</label>
									    <input type="email" class="form-control" id="email" name="email" required>
									  </div>
									  <div class="form-group">
									    <label for="pwd">Password:</label>
									    <input type="password" class="form-control" id="pwd" name="pwd" required>
									  </div>
									<!--   <div class="checkbox">
									    <label><input type="checkbox"> Remember me</label>
									  </div> -->
									  <button type="submit" class="btn btn-primary">Login</button>
								</form>
									        </div>
									       
									      </div>
									      
									    </div>
									  </div>
									  
									</div>
																	

								    






				    </div>
				</div>

				</div>

				<div class="col-md-2" style="height: 50px; background-color:  ">
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