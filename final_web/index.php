<?include("email.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dome Renovations</title>

	<!--MY CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Slideshow-->
    <link href="css/slideshow.css" rel="stylesheet">

    <!--Background-->
    <STYLE TYPE="text/css"> BODY {background-image: url("images/background.jpg"); } </STYLE>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<div class="container contentContainer">
		<!--Brand Name-->
		<div id="brandName" class="center">
			<h1>Dome Renovations</h1>
			<p class="lead" id="tagLine">Meticulous Renovations</p>
		</div>

		<!--Slidshow-->
    <div class="picture-container col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
  		<div class="bss-slides">
  		    <figure>
  		        <img src="images/renovations/before-after-sidewalk.jpg" width="100%" />
  		        <figcaption></figcaption>
  		    </figure>

  		    <figure>
  		        <img src="images/renovations/before-after-bathroom.jpg" width="100%" />
  		        <figcaption></figcaption>
  		    </figure>

  			<figure>
  		        <img src="images/renovations/before-after-shower.jpg" width="100%" />
  		        <figcaption></figcaption>
  		    </figure>

  		    <figure>
  		        <img src="images/renovations/before-after-backdoor.jpg" width="100%" />
  		        <figcaption></figcaption>
  		    </figure>
  		    <!-- more figures here as needed -->
  		</div>
    </div>

		<!--Info-->
		<div id="info">
			<div class="row">
				<!--Services-->
				<div class="col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-8 col-xs-offset-2">
					<section id="services" class="center">
						<p class="lead center"> Finest Renovations in the state of Delaware
						<ul>
							<li>Bathrooms</li>
							<li>Kitchens</li>
							<li>Basements</li>
							<li>Decks</li>
						</ul>


						<div class="clear"></div>
            <hr class="line">

						<ul>
							<li>Camera Installations</li>
							<li>Alarm Installations</li>
						</ul>
					</section>
				</div>
      </div>

				<!--Contact info-->
        <div class="row">
  				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-10 contact">
  					<div id="contactInfo">
  						<h2>Brian Hibbert</h2>
  						<ul>
  							<li><span class="glyphicon glyphicon-earphone"></span> 973-204-8109</li>
  							<li><span class="glyphicon glyphicon-envelope"></span> contact@domerenovations.com</li>
  							<button type="button" id="message-button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#emailForm">Message Me!</button>
  						</ul>
  					</div>
  				</div>
			  </div>
		</div>


		<div class="clear"></div>

		<!-- Email -->
		<div id="emailForm" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Email Form</h4>
		      </div>

		      <div class="modal-body">
			  <!--Email Form-->

			  	<?php echo $result;?>
				<form method= "post" role="form">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" placeholder="Your Name" value="<?php echo $_POST['name'];?>">
					</div>

					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" name="email" placeholder="Your email address" value="<?php echo $_POST['email'];?>">
					</div>

					<div class="form-group">
						<label for="Comment">Message:</label>
						<textarea row="5" class="form-control" name="msg" placeholder="Hi my name is blank... Can you help me with this?" value="<?php echo $_POST['msg'];?>">
						</textarea>


						<input name ="submit" class="btn btn-success" id="contact-button" type="submit" value="Contact Me!"/>
					</div>
				</form>

				<div class="modal-footer">
			    </div>
		    </div>
		    </div>
		  </div>
		</div>

		<!-- Footer -->
    <div class="row"></div>
      <div class="col-md-12 col-sm-12 col-xs-12"></div>
  		<footer>
  			Copyright &copy; Dome Renovations 2015
  		</footer>
    </div>
	</div>



   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  	<!-- Slideshow-->
	<script src="js/slideshow.min.js"></script>
	<script>
		var opts = {
            //auto-advancing slides? accepts boolean (true/false) or object
            auto : {
                // speed to advance slides at. accepts number of milliseconds
                speed : 3000,
                // pause advancing on mouseover? accepts boolean
                pauseOnHover : true
            },
            // show fullscreen toggle? accepts boolean
            fullScreen : true,

        };
		makeBSS('.bss-slides',opts);
	</script>

	<script>
		var window_height = $(window).height();
    	$(".contentContainer").css("min-height",window_height);
	</script>

  </body>
</html>
