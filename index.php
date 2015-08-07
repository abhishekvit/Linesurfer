<?php
$name = $_POST['name1'];
				$email = $_POST['email'];
				$regno = $_POST['regno'];
				$phone = $_POST['phone'];
				$room = $_POST['room'];
				$clg=$_POST['clg'];
				$subject = "Confirmation of Line Surfer event";
   
   
   if(isset($name))
   {
   $message = "We will contact you shortly. Please pay your money asap to get your seat confirmed. This is an automated mail. Please dont reply";
   $header = "From:info@robovitics.in \r\n";
   $retval = mail ($email,$subject,$message,$header);
   $subject = "Details of Registration of Linesurfer event";
   $email1="scobbyabhi9@gmail.com";
   $message = " Name : ".$name." Email : ".$email." Mobile Number : ".$phone." College : ".$clg." Registration number : ".$regno;
   $retval = mail ($email1,$subject,$message,$header);
   $email1="antara@delta.robovitics.in";
   $retval = mail ($email1,$subject,$message,$header);
   $email1="mansi@gamma.robovitics.in";
   $retval = mail ($email1,$subject,$message,$header);
   $email1="nikita@gamma.robovitics.in";
   $retval = mail ($email1,$subject,$message,$header);
    $connection = mysql_connect("localhost", "", "");
				  $db = mysql_select_db("details", $connection);
				  $query = mysql_query("insert into detail(name,regno,email,phone,number,room,clg) values('$name','$regno','$email','$phone','$number','$room','$clg')");
   }
				

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>LineSurfer2k15</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <!-- Main Style Sheet -->
  <link rel="stylesheet" href="css/main.css">
  <!-- Modernizr -->
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  <!-- Respond.js for IE 8 or less only -->
  <!--[if (lt IE 9) & (!IEMobile)]>
      <script src="js/vendor/respond.min.js"></script>
  <![endif]-->
<style>
p {
font-size: 20px;
    font-style: normal;
}
container {
font-size: 20px;
    font-style: normal;
}
h1 {
    font-size: 40px;
    font-style: normal;
    color: black;
}
h3 {
    font-size: 30px;
    font-style: normal;
    
}

h2 {
    font-size: 30px;
    font-style: normal;
    color: black;
}
h4 {
    font-size: 15px;
    font-style: normal;
    color: black;
}
a:link {
    color: black;
}

/* visited link */
a:visited {
    color: black;
}

/* mouse over link */
a:hover {
text-decoration: none;
    color: black;
}

/* selected link */
a:active {
    color:black;
}
ia
{
	padding-right: 50px;

}

</style>

</head>
<body class="homepage" data-spy="scroll" data-target=".navbar">
  <!--[if lte IE 7]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

  <header role="banner">
      <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.robovitics.in/"><img src="logo.png" class="ia" alt="roboVITics" width="200"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#welcome">Welcome</a></li>
              <li><a href="#features">Details</a></li>
             
              <li><a href="#signup">Register</a></li>
			   <li><a href="#impact">The Team</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container -->
      </nav>
  </header>

  <main role="main">

    <!-- INTRO SECTION -->
    <section id="welcome" class="jumbotron">
      <div class="container">
        <div class="welcome-message">
		
          <h1>LineSurfer v.1.0</h1>
          <h3>Due to unaviodable circumstances, LineSurfer v.1.0 has been postponed till futher notice</h3>
          <p>A premium line follower robotics event organised by roboVITics<em><a href="#features" class="btn btn-lg btn-primary pull-right">Learn more <span class="icon fa fa-arrow-circle-down"></span></a></p>
        </div><!-- /.welcome-message -->
      </div>
    </section>

    <!-- FEATURES SECTION -->
    <section id="features">
      <div class="container">
        <h1>Details</h1>
        
          <div class="features-item col-sm-6 col-md-4">
            <span class="icon fa fa-download"></span>
            <h2><a href="rules and regulations_linesurfer.pdf" download ><b>Event Guidelines</b></a></h2>
            <p class="normal">Click here to get into the hang of things </p>
          </div>
          <div class="features-item col-sm-6 col-md-4">
            <span class="icon fa fa-group"></span>
            <h2><b>FAQs</b></h2>
            <p class="normal">Will be updated shortly </p>
          </div>
          <div class="features-item col-sm-6 col-md-4">
            <span class="icon fa fa-comments"></span>
            <h2 class="normal"><b>Contact Us</b></h2>
            <p>info@robovitics.in</p>
            <p>+91 9629773352</p>
          </div>
          
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.row -->

    <!-- IMPACT SECTION -->
   
 <!-- IMPACT SECTION -->
   
   
    <!-- SIGNUP SECTION -->
    <section id="signup">
      <div class="container">
      
      
        <h1>Fill in your details</h1>
        <form class="form-horizontal" role="form" method="post" action="index.php" >
  <div class="form-group">
    <label class="control-label col-sm-2" >Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name1" name="name1" placeholder="abcd" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >College Name</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="clg" id="clg" placeholder="VIT" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Registration number/College id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="regno" name="regno" placeholder="13BCE0483" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" name="email" placeholder="abc@gmail.com" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Mobile Number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="phone" name="phone" placeholder="9823128312" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Block and room number ( only for vitians )</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="room" id="room" placeholder="K-808" >
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
  <br>
  <br>
  
</form>
      </div><!-- /.container -->
    </section><!-- /#signup -->
	 <section id="impact">
      <div class="container">
      
        <h1>The Team</h1>
         <div class="reviews js-masonry" data-masonry-options='{"itemSelector": ".hreview" }'>
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/l2/mans2.jpg" alt="Customer Photo1">
            <div class="caption">
              <blockquote class="description"><p>Coordinator</p></blockquote>
              <p class="reviewer">Mansi Pawar</p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
         
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/l2/k.jpg" alt="Customer Photo3">
            <div class="caption">
              <blockquote class="description"><p>Coordinator</p></blockquote>
              <p class="reviewer">Antara Prakash</p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
          
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/l2/nk.jpg" alt="Customer Photo5">
            <div class="caption">
              <blockquote class="description"><p>Publicity</p></blockquote>
              <p class="reviewer">Nikita Karanpuria</p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
         </div><!-- /.reviews -->
      </div><!-- /.container -->
    </section><!-- /#impact -->
 <section id="impact">
      <div class="container">
        
      
	
         <div class="reviews js-masonry" data-masonry-options='{"itemSelector": ".hreview" }'>
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/l2/ss.jpg" alt="Customer Photo1">
            <div class="caption">
              <blockquote class="description"><p>Logistics</p></blockquote>
              <p class="reviewer">Shashwat Singh</p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
         
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/l2/abh.jpg" alt="Customer Photo3">
            <div class="caption">
              <blockquote class="description"><p>Web Developer</p></blockquote>
              <p class="reviewer">Abhishek Mukherjee</p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
          
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/l2/ls.jpg" alt="Customer Photo5">
            <div class="caption">
              <blockquote class="description"><p>Publicity</p></blockquote>
              <p class="reviewer">Lakshey Suri</p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
          
         
         
          
        </div><!-- /.reviews -->
      </div><!-- /.container -->
    </section><!-- /#impact -->
	<section id="impact">
      <div class="container">
        
      
	
         <div class="reviews js-masonry" data-masonry-options='{"itemSelector": ".hreview" }'>
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/l2/gum.jpg" alt="Customer Photo1">
            <div class="caption">
              <blockquote class="description"><p>Technical</p></blockquote>
              <p class="reviewer">Siddharth Gumber</p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
         
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/l2/shas.jpg" alt="Customer Photo3">
            <div class="caption">
              <blockquote class="description"><p>Technical</p></blockquote>
              <p class="reviewer">Shashwat Shukla</p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
          
         
          
         
         
          
        </div><!-- /.reviews -->
      </div><!-- /.container -->
    </section><!-- /#impact -->
  </main>

  <footer role="contentinfo">
    <div class="container">
	<a href="http://www.robovitics.in"><h4>Powered by roboVITics</h4></A> 

    </div>
  </footer>

  <!-- JavaScript -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>