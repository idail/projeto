<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modelo de Sites Contabeis Modelo-1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A professional HTML bootstrappage clinic templateto take your business online. Responsive clean design.">
    <meta name="author" content="bootstrapclinic">
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="themes/css/main.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>

<body>
<div class="container">
  <!-- Navbar
    ================================================== -->
    <div class="navbar">
        <div class="container">
          <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="row"><h1 class="loadhome span3"><a href="index.html"><img src="themes/css/images/bootstrap_clinic_logo copy.png" alt="bootstrappage clinic templates"/></a></h1>
			  <div class="nav-collapse collapse"><br/>
				<ul class="nav pull-right">
					<li class="active"><a href="index.html">Home</a></li>
					<li class="" ><a href="aboutus.html">A Empresa</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicos <b class="caret"></b></a>
					  <ul class="dropdown-menu">
					  <li class="nav-header">Contabeis</li>
						<li><a href="treatments.html">Dp</a></li>
						<li><a href="#">Contabil</a></li>
						<li><a href="#">Contabil</a></li>
						<li class="divider"></li>
						<li class="nav-header">Contabeis</li>
						<li><a href="#">contail</a></li>
						<li><a href="#">contabil</a></li>
					  </ul>
					</li>
					<li class=""><a href="contact.html">Contato</a></li>
					<!-- <li><a href="booking.html" style="padding-top:0"><span class="btn pull-right btn-success" style="margin-top:0"> Book an appointment </span></a></li> -->
				</ul>
			  </div>
		  </div>
        </div>
    </div>
	<div class="label label-warning" style="display:block;"> 	</div>
<!-- ================Carousel and pages======= -->
		<?php include_once("slides.php"); ?>
				<h1>Bem-vindo</h1>
		<hr/>
		<?php include_once("historia.php"); ?>
		<hr/>
		
        <?php include_once("banners.php"); ?>
	
		<div id="book" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="book" aria-hidden="false">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			<h3> Online Booking your appointment</h3>
		  </div>
		<form class="form-horizontal">
		  <div class="modal-body">
			<div class="alert alert-error">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			</div>	  
				<fieldset>
				<div class="control-group">
					  <select class="input-xlarge"><option>Services</option></select>
				  </div>
				<div class="control-group">
					  <input type="text" placeholder="Date" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <input type="text" placeholder="Time" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <input type="text" placeholder="name" class="input-xlarge"/>
				  </div>
				   <div class="control-group">
					  <input type="text" placeholder="email" class="input-xlarge"/>
				  </div>
				   <div class="control-group">
					  <input type="phone" placeholder="phone" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <textarea rows="4" placeholder="notes" id="textarea" class="input-xlarge"></textarea>
				  </div>
				</fieldset>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Confirm</button>
		  </div>
		</form>
		</div>
 <?php include 'footer.php'; ?>
</div><!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>	
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	// carousel demo
    $('#myCarousel').carousel()
	</script>
</body>
</html>
