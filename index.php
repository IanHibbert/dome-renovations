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
  	<div class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container">
  			<div class = "navbar-header">
	  			
				<a href="#home" class="navbar-brand"> Dome Renovations</a> 
				
  				  				
  				<button type="button" class ="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  				
  				<span class="sr-only">Toggle navigation</span>
  				
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>		
  			</div>
  			
  			<div class="collapse navbar-collapse">	
				<ul class = "nav navbar-nav">
					<li class="active" ><a href="#aboutPage">About</a></li>
					<li><a href="#renovationsGallery">Gallery</a></li>
					<li><a href="#contact"> Contact</a></li>
				</ul>  			
  			</div>
  		</div>
  	</div>
  <!---------------End of Navbar---------->
  
  <!--Slideshow>
  <div class="container">
	<div id="slidy-container">
		<figure id="slidy">
			<img src="images/cool1.jpg" alt data-caption="Antelope Canyon, Arizona">
			<img src="images/cool2.jpg" alt data-caption="Canyonlands Vista, Arizona">
			<img src="images/cool3.jpg" alt data-caption="Mesa Arch sunrise, Moab, Utah">
			<img src="images/cool4.jpg" alt data-caption="Canyonlands, Arizona">
		</figure>
	</div>
  </div>
  <!--Slideshow end-->
  
  <!---------------About Page--------------->
	<div class="container contentContainer" id="aboutPage">
		<div class="row">
			<div class="col-md-5" id="aboutUs">
				<h1>About Us!</h1>
				<p class="lead"> Brian Hibbert</p>
			</div>
			
			 <!--Email Form-->
			<div class="col-md-5 col-md-offset-1" id="emailForm">
				<h1>Email Form!</h1>
				<p class="lead"> Please get in touch, I'll get back to you as soon as possible<p>
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
						<textarea row="5" class="form-control" name="msg" placeholder="Hi my name is blank... Can you help me with this?" value="<?php echo $_POST['msg'];?>"></textarea>
					</div>
					
					<input name ="submit" class="btn btn-success" type="submit" value="Contact Me!"/>
				</form>
			</div>
		</div>

	<!--End of Email Form-->
  
	</div>

  <!---------------End of About Page--------------->

   <!---------------Renovations Gallery--------------->
  
    <!-- Page Content -->
    <div class="container" id="renovationsGallery">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Renovations Gallery</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-shower.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-shower-thumb.jpg" alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
                        
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" data-title="before-after-Bathroom" data-lightbox="Renovations" href="images/renovations/before-after-bathroom.jpg">
                    <img class="img-responsive img-rounded" src="images/thumbnails/before-after-bathroom-thumb.jpg" alt="">
                </a>
            </div>
        </div>
    </div>

  <!--------------End of Renovations Gallery---->
 
 
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