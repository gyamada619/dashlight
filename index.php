<html>

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	<link rel="stylesheet" href="css/main.min.css">
 	<link rel="stylesheet" href="css/materialize.min.css">	 
 	
</head>

<body style="background-color: #37474f; margin-top: 30px">
	
	<div id="loader-wrapper">
		
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

	</div>

	<div class="container">
		
		<div class="row">

		<?php  

			$string = file_get_contents("devicenumber.txt");
			(int) $string;

			for ($x = 1; $x <= $string; $x++) {

				?>

				<div class="col s12 m6 l4">
					
					<div class="card">
						<div class="card-content">
						<span class="card-title" style="color:black">Device <?php echo $x; ?></span>
						</div>
						<div class="card-action">
							<form style="margin-bottom: 0; display: inline" action="" onsubmit="return powerFunction(this.id);" id="light<?php echo $x;?>on">
					   			<button class="btn waves-effect waves-light green darken-3" type="submit" name="action">ON
					    			<i class="material-icons right">power_settings_new</i>
					   			</button>
							</form>
							<form style="margin-bottom: 0; display: inline" action="" onsubmit="return powerFunction(this.id);" id="light<?php echo $x;?>off">
								<button class="btn waves-effect waves-light blue-grey darken-3" type="submit" name="action">OFF
									<i class="material-icons right">power_settings_new</i>
								</button>
							</form>
						</div>
					</div>
				</div>

			<?php

			}

		?>
			
		</div>

	</div>
	
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery-1.9.1.min.js"></script>
	<script src="js/loadspinner.js"></script>
	<script src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/powerFunction.js"></script>

</body>

</html>
