<?php

	if ($_POST["submit"]){
		
		$result='<div class="alert alert-success"> Form submitted';
		
		if(!$_POST["name"]){
			
			$error.="<br />Please enter your name";
		}
		
		if(!$_POST["email"]){
			
			$error.="<br />Please enter your email address";
		}


		if(!$_POST["msg"]){
			
			$error.="<br />Please enter your message";
		}
		
		if ($_POST['email']!="" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$error.="<br />Please enter a valid email address";
		}
		
		if($error){
			$result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
		
		} else {

			if (mail("ian.hibbert.a@gmail.com", "Comment from website!", "Name: ".
				$_POST['name']."
				
				 Email: ".$_POST['email']."
				
				 Comment: ".$_POST['comment'])) {
				
				 $result='<div class="alert alert-success"><strong>Thank
				you!</strong> I\'ll be in touch.</div>';
		
		 	} else {
		 
			$result='<div class="alert alert-danger">Sorry, there was
			an error sending your message. Please try again later.</div>';
			
			}
		}
	}
	
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dome Renovations</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--MY CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <!--Lightbox-->
    <link href="css/lightbox.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body data-spy="scroll" data-target=".navbar-collapse">
  
  <!----------------Navbar---------------->
  	<div class="navbar navbar-default">
  		<div class="container">
  			<div class = "navbar-header">
	  			
				<a href="#home" class="navbar-brand"> Dome Renovations</a> 
				
  				  				
  				<button type="button" class ="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  				
  				<span class="sr-only">Toggle navigation</span>
  				
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>		
  			</div>
  		</div>
  	</div>
  <!---------------End of Navbar---------->
  
	<div class="container">
		<div class="row" id="mainPage">
			<div class="col-md-6" id="aboutUs">
				<h1>About Us!</h1>
				<p class="lead"> Brian Hibbert</p>
				<p>
					<!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#emailForm">Email Me</button>
  				</p>
			</div>
			
			<!---------------Renovations Gallery--------------->
            <div class="col-md-6" id="renovationsGallery">
                <h1>Past Renovations</h1>
            
					
	            <div class="col-lg-5 col-md-3 col-xs-6 thumb">
	                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
	                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
	                </a>
	            </div>
	            
	             <div class="col-lg-5 col-md-3 col-xs-6 thumb">
	                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-shower.jpg">
	                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-shower-thumb.jpg" alt="">
	                </a>
	            </div>
	            
	             <div class="col-lg-5 col-md-3 col-xs-6 thumb">
	                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-backdoor.jpg.jpg">
	                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-backdoor-thumb.jpg" alt="">
	                </a>
	            </div>
	            
	            <div class="col-lg-5 col-md-3 col-xs-6 thumb">
	                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-sidewalk.jpg">
	                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-sidewalk-thumb.jpg" alt="">
	                </a>
	            </div>  
            </div>           
		
		  <!--------------End of Renovations Gallery---->
		</div>
	</div>
  
  

	<!-- Modal -->
	<div id="emailForm" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Email Form</h4>
	      </div>
	    
	      <div class="modal-dialog">
		  <!--Email Form-->
			<div class="col-md-6 col-md-offset-3">
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
					</div>
					
					<input name ="submit" class="btn btn-success" type="submit" value="Contact Me!"/>
				</form>
			</div>
			<!--End of Email Form-->
	      </div>

	  </div>
	</div>

 
 
	<!-- Footer -->
	<footer>
		<div class="row">
		    <div class="col-lg-12">
		        <p>Copyright &copy; Dome Renovations 2015</p>
		    </div>
		</div>
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!--Lightbox.js-->
    <script src="js/lightbox.min.js" type="text/javascript"> </script>
	    
	<!--Slidy-->
	<script src="js/cssslidy.js" type="text/javascript"> </script>
    <script>
		cssSlidy({
			timeOnSlide:2,
		});
		
	</script>
    
    
    <script>
    var window_height = $(window).height();
    	//$("#topRow h1").css("margin-top",window_height/2);
    	$(".contentContainer").css("min-height",window_height);
    </script>
    
  </body>
</html>