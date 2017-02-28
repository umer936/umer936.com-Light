<!DOCTYPE html>
<?
if(isset($_POST['action'])){
    $to = "umer936@gmail.com"; 
    $from = $_POST['email']; 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    // $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " : " . $_POST['email'] . " wrote the following:" . "\n\n" . $_POST['message'];
    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<script>alert('Message Sent. Thank you " . $first_name . "');</script>";
    $_POST = array();
    }
?>
<?
/*
Materialize Colors List
	materialize-red
	red
	pink
	purple
	deep-purple
	indigo
	blue
	light-blue
	cyan
	teal
	green
	light-green
	lime
	yellow
	amber
	orange
	deep-orange
	brown
	blue-grey
	grey
	black
	white
	transparent
*/
?>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Umer Salman</title>
	<meta name="description" content="Umer Salman">
	<meta name="author" content="umer936">

	<link rel="stylesheet" href="css/main.less.css">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons|Roboto:100,300,400,500,700" rel="stylesheet">

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class="color1">

	<div class="row">
    <div id="header" class="col s12 sticky z-depth-2">
      <ul class="header table-of-contents">
        <li class="headericon col s3"><a href="#home">Home</a></li>
        <li class="headericon col s3"><a href="#about">About</a></li>
        <li class="headericon col s3"><a href="#work">Work</a></li>
        <li class="headericon col s3"><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>

    <div id="home" class="col s12 scrollspy">
		<div class="intro blue lighten-2 z-depth-1">
		  <h1 class="grey-text text-lighten-5">Umer Salman</h1>
		  <h2 class="grey-text text-lighten-5">umer936</h2>
		  <h5 class="grey-text text-darken-1">coder. programmer. designer.</h5>
		  <hr />
		  <span id="wordsforcoloring">
		  Too bright for your eyes?
		  </span> 
		  <br />
		  <a class="waves-effect waves-light black btn" id="themeswitcher">Make it <span id="colorword">dark</span></a>
		</div>
    </div>
    <div id="about" class="col s12 scrollspy">
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
		          <p>You can find me @</p>
		        </div>
		        <div class="card-action">
		          <a href="https://google.com/+UmerSalman">Google+</a>
		          <a href="http://instagram.com/umer936?ref=badge">Instagram</a>
		          <a href="http://github.com/umer936">GitHub</a>
		          <a href="http://facebook.com/umer936">Facebook</a>
		          <a href="http://reddit.com/u/Umer936/">Reddit</a>
		          <a href="http://forum.xda-developers.com/member.php?u=4704799">XDA Developers</a>
		          <a href="http://socialcu.be/@umer936">Socialcu.be</a>
		          <a href="https://www.7cupsoftea.com/ListenerDetails/umer936/">7 Cups of Tea</a>
		          <a href="http://twitter.com/umer936">Twitter</a>
		          <a href="http://stackoverflow.com/users/2646359/umer936">StackOverflow</a>
		        </div>
		      </div>
		    </div>
		    <div class="col s12 m4 l4">
		      <h6>works in progress</h6>
		      <ul class="collapsible">
		        <li class="active">
		          <div class="collapsible-header"><i class="md-dark material-icons">web</i>Designer</div>
		          <div class="collapsible-body"><p>IDK if I'll put stuff here.</p></div>
		        </li>
		        <li>
		          <div class="collapsible-header"><i class="md-dark material-icons">format_align_justify</i>Developer</div>
		          <div class="collapsible-body"><p>Or here.</p></div>
		        </li>
		      </ul>
		    </div>
		  </div>
		</div>
    </div>
    <div id="work" class="col s12 scrollspy">
		<div class="container portfolio">
		  <h5>portfolio</h5>
		  <h6>FINISHED PROJECTS</h6>
		  <hr>
		  <div class="row">
		    <div class="col s12 m12 l12 portfolio-holder">
		      <img class="materialboxed" src="/images/source.png">
		      <img class="materialboxed" src="/images/Cygwin.jpg">
		      <img class="materialboxed" src="/images/ingress.jpg">
		      <img class="materialboxed" src="/images/nlogo.png">
		      <img class="materialboxed" src="/images/TNTPUClogo.png">
		      <img class="materialboxed" src="/images/cube1.png">
		      <img class="materialboxed" src="/images/Compass.png">
		    </div>
		  </div>
		</div>
    </div>
    <div id="contact" class="col s12 scrollspy">
		<div class="container contact">
		  <h5>contact</h5>
		  <h6>find me</h6>
		  <hr>
		  <div class="row">
		    <div class="col s12 m6 l6">
		      <div class="row">
		        <form method="POST" id="contact" class="col s12">
		          <div class="row">
		            <div class="input-field col s6">
		              <input id="first_name" name="first_name" type="text" class="validate">
		              <label for="first_name">First Name</label>
		            </div>
		            <div class="input-field col s6">
		              <input id="last_name" name="last_name" type="text" class="validate">
		              <label for="last_name">Last Name</label>
		            </div>
		          </div>
		          <div class="row">
		            <div class="input-field col s12">
		              <input id="email" name="email" type="email" class="validate email">
		              <label for="email">E-Mail</label>
		              <div class="input-field"><ul class="autosuffix col s6"></ul></div>
		            </div>
		          </div>
		          <textarea class="materialize-textarea" name="message" placeholder="Your Message" required></textarea>
		          <button class="btn waves-effect waves-light" type="submit" value="submit" name="action">Submit
		            <i class="md-dark material-icons right">send</i>
		          </button>
		        </form>
		      </div>
		    </div>
		    <div class="col s12 m6 l6 contact-holder">
		      <h6><i class="md-dark material-icons">email</i> Email Address</h6>
		      <p>umer936@umer936.com</p>
		      <h6><i class="md-dark material-icons">phone_android</i> Phone Number</h6>
		      <p>+1 (936) 463-8626</p>
		      <h6><i class="md-dark material-icons">open_in_browser</i> Website</h6>
		      <p>umer936.com</p>
		    </div>
		  </div>
		</div>
    </div>


	<footer>
	  <div class="footer-copyright">
	    <div class="container">
	    © 2015-2017 Umer936
	    </div>
	  </div>
	</footer>

  	<!--Import jQuery before materialize.js-->
	<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>