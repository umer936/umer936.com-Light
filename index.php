<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Umer Salman</title>
	<meta name="description" content="Umer Salman personal webpage">
	<meta name="author" content="umer936">

	<link rel="stylesheet" href="css/main.css">

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<div class="row z-depth-3">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#home">Home</a></li>
        <li class="tab col s3"><a href="#about">About Me</a></li>
        <li class="tab col s3"><a href="#work">Work</a></li>
        <li class="tab col s3"><a href="#contact">Contact Me</a></li>
      </ul>
    </div>
  </div>

    <div id="home" class="col s12">
		<div class="intro deep-orange lighten-2 z-depth-1">
		  <h1 class="grey-text text-lighten-5">umer936</h1>
		  <h5 class="grey-text text-darken-1">coder. programmer. designer.</h5>
		</div>
    </div>
    <div id="about" class="col s12">
    	<div class="container about">
		  <h5>about me</h5>
		  <hr>
		  <div class="row">
		    <div class="col s12 m4 l4">
		      <h6>Me</h6>
		      <p>Blah blah words words words</p>
		    </div>
		    <div class="col s12 m4 l4">
		      <h6>Profile</h6>
		      <div class="card blue-grey darken-1">
		        <div class="card-content white-text">
		          <img src="http://umer936.com/images/logoh.png" width="64" height="64">
		          <p>You can find me at the following</p>
		        </div>
		        <div class="card-action">
		          <a href="#">Google+</a>
		          <a href="#">GitHub</a>
		          <a href="#">Facebook</a>
		          <a href="#">Instagram</a>
		          <a href="#">StackOverflow</a>
		        </div>
		      </div>
		    </div>
		    <div class="col s12 m4 l4">
		      <h6>works in progress</h6>
		      <ul class="collapsible">
		        <li class="active">
		          <div class="collapsible-header"><i class="mdi-av-web"></i>Designer</div>
		          <div class="collapsible-body"><p>IDK if I'll put stuff here.</p></div>
		        </li>
		        <li>
		          <div class="collapsible-header"><i class="mdi-editor-format-align-justify"></i>Developer</div>
		          <div class="collapsible-body"><p>Or here.</p></div>
		        </li>
		      </ul>
		    </div>
		  </div>
		</div>
    </div>
    <div id="work" class="col s12">
		<div class="container portfolio">
		  <h5>portfolio</h5>
		  <h6>FINISHED PROJECTS</h6>
		  <hr>
		  <div class="row">
		    <div class="col s12 m12 l12 portfolio-holder">
		      <img class="materialboxed" src="http://dia.tv/wp-content/uploads/2014/08/Project_logo_02.png">
		      <img class="materialboxed" src="http://dia.tv/wp-content/uploads/2014/08/Project_logo_02.png">
		      <img class="materialboxed" src="http://dia.tv/wp-content/uploads/2014/08/Project_logo_02.png">
		      <img class="materialboxed" src="http://dia.tv/wp-content/uploads/2014/08/Project_logo_02.png">
		      <img class="materialboxed" src="http://dia.tv/wp-content/uploads/2014/08/Project_logo_02.png">
		      <img class="materialboxed" src="http://dia.tv/wp-content/uploads/2014/08/Project_logo_02.png">
		    </div>
		  </div>
		</div>
    </div>
    <div id="contact" class="col s12">
		<div class="container contact">
		  <h5>contact</h5>
		  <h6>find me</h6>
		  <hr>
		  <div class="row">
		    <div class="col s12 m6 l6">
		      <div class="row">
		        <form class="col s12">
		          <div class="row">
		            <div class="input-field col s6">
		              <input id="first_name" type="text" class="validate">
		              <label for="first_name">First Name</label>
		            </div>
		            <div class="input-field col s6">
		              <input id="last_name" type="text" class="validate">
		              <label for="last_name">Last Name</label>
		            </div>
		          </div>
		          <div class="row">
		            <div class="input-field col s12">
		              <input id="email" type="email" class="validate">
		              <label for="email">E-Mail</label>
		            </div>
		          </div>
		          <textarea class="materialize-textarea" placeholder="Your Message" required></textarea>
		          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
		            <i class="mdi-content-send right"></i>
		          </button>
		        </form>
		      </div>
		    </div>
		    <div class="col s12 m6 l6 contact-holder">
		      <h6 class="mdi-email-open"> Email Address</h6>
		      <p>umer936@umer936.com</p>
		      <h6 class="mdi-call"> Phone Number</h6>
		      <p>+1 (936) 463-8626</p>
		      <h6 class="mdi-action-open-in-browser"> Website</h6>
		      <p>umer936.com</p>
		    </div>
		  </div>
		</div>
    </div>


	<footer>
	  <div class="footer-copyright">
	    <div class="container">
	    © 2015 Umer936
	    </div>
	  </div>
	</footer>

  	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>