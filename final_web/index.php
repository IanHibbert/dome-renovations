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
    
    <!--Slideshow-->
    <link href="css/slideshow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
   
	<div class="container">
		<!--Brand Name-->
		<div id="brandName" class="center">
			<h1>Dome Renovations</h1>
			<p class="lead" id="tagLine">Meticulous Renovations</p>
		</div>
		
		<!--Slidshow-->
		<div class="bss-slides">  
		    <figure>
		        <img src="images/renovations/before-after-sidewalk.jpg" width="100%" />
		        <figcaption>Before and After Backdoor</figcaption> 
		    </figure>
		    
		    <figure>
		        <img src="images/renovations/before-after-bathroom.jpg" width="100%" />
		        <figcaption>Before and After Backdoor</figcaption> 
		    </figure>
		    
			<figure>
		        <img src="images/renovations/before-after-shower.jpg" width="100%" />
		        <figcaption>Before and After Backdoor</figcaption> 
		    </figure>
		    
		    <figure>
		        <img src="images/renovations/before-after-backdoor.jpg" width="100%" />
		        <figcaption>Before and After Backdoor</figcaption> 
		    </figure>
		    <!-- more figures here as needed -->
		</div>
		
		
		<!--Services-->
		<row>
		<!--Info-->
			<div id="info">
								
				<section id="services" >
					<p class="lead center"> Finest Renovations in the state of Delaware
					<ul>
						<li class="bottom-border">Bathrooms</li>
						<li class="bottom-border">Kitchens</li>
						<li class="bottom-border">Basements</li>
						<li class="bottom-border" >Decks</li>
					</ul>
					
					<div class="clear"></div>
					
					<ul>
						<li>Security Camera Installions</li>
						<li>Alarm Installions</li>
					</ul>
				</section>
				
				<h2>Brian Hibbert</h2>				
				<div id="contactInfo">
					<ul>
						<li><span class="glyphicon glyphicon-earphone"></span> 973-204-8109</li>
						<li><span class="glyphicon glyphicon-envelope"></span> contact@domerenovations.com</li>
						<li><button type="button" id="message-button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#emailForm">Message Me!</button></li>
					</ul>

				</div>
			</div>
		</row>
		
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

 
		<!-- Footer -->
		<footer>
			<div class="row">
			    <div class="col-lg-12 footerInfo">
			        <p id="copyright">Copyright &copy; Dome Renovations 2015</p>
			    </div>
			</div>
		</footer>
	</div>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  	
  	<!-- Slideshow-->
	<script src="js/slideshow.min.js"></script>  
	<script>
	  makeBSS('.bss-slides');
	</script>  
  </body>
</html>