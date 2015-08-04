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
    $connection = mysql_connect("localhost", "scobbyabhi", "Mahanagar@d70");
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
h1 {
    font-size: 40px;
    font-style: normal;
    color: black;
}

h2 {
    font-size: 30px;
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
    color: black;
}

/* selected link */
a:active {
    color:black;
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
            <a class="navbar-brand" href="http://www.robovitics.in/"><img src="logo.png" alt="UNSRCAMBLE" width="120"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#welcome">Welcome</a></li>
              <li><a href="#features">Details</a></li>
              <li><a href="#impact">The Team</a></li>
              <li><a href="#signup">Apply</a></li>
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
		
          <h1>Line Surfer</h1>
          <h1>2nd May</h1>
          <p>A premium line follower bot event organised by robovitics<em><a href="#features" class="btn btn-lg btn-primary pull-right">Learn more <span class="icon fa fa-arrow-circle-down"></span></a></p>
        </div><!-- /.welcome-message -->
      </div>
    </section>

    <!-- FEATURES SECTION -->
    <section id="features">
      <div class="container">
        <h1>Details</h1>
        
          <div class="features-item col-sm-6 col-md-4">
            <span class="icon fa fa-cloud"></span>
            <h2><a href="rules and regulations_linesurfer.pdf" download ><b>Event Guidelines</b></a></h2>
            <p class="normal">Click here to get into the hang of things </p>
          </div>
          <div class="features-item col-sm-6 col-md-4">
            <span class="icon fa fa-group"></span>
            <h2><b>FAQs</b></h2>
            <p class="normal">Will be upadted shortly </p>
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
    <section id="impact">
      <div class="container">
        <h1>The Team</h1>
         <div class="reviews js-masonry" data-masonry-options='{"itemSelector": ".hreview" }'>
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/mans2.png" alt="Customer Photo1">
            <div class="caption">
              <blockquote class="description"><p>Coordinator</p></blockquote>
              <p class="reviewer">Mansi </p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
         
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/antara.png" alt="Customer Photo1">
            <div class="caption">
              <blockquote class="description"><p>Coordinator</p></blockquote>
              <p class="reviewer">Antara </p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
          
          <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/nk.png" alt="Customer Photo5">
            <div class="caption">
              <blockquote class="description"><p>Publicity</p></blockquote>
              <p class="reviewer">Nikita </p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
		  
		  <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/ss.png" alt="Customer Photo5">
            <div class="caption">
              <blockquote class="description"><p>Publicity</p></blockquote>
              <p class="reviewer">Shashwat </p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
		  
		  <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/ls.png" alt="Customer Photo5">
            <div class="caption">
              <blockquote class="description"><p>Logistics</p></blockquote>
              <p class="reviewer">Lakshey </p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
		  
		  <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
            <img src="img/abh.png" alt="Customer Photo5">
            <div class="caption">
              <blockquote ><p>Web Developer</p></blockquote>
              <p class="reviewer">Abhishek </p>
            </div><!-- /.caption -->
          </div><!-- /.hreview -->
         
          
        </div><!-- /.reviews -->
      </div><!-- /.container -->
    </section><!-- /#impact -->

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
  For futhur queries contact 9629773352
</form>
      </div><!-- /.container -->
    </section><!-- /#signup -->

  </main>

  <footer role="contentinfo">
    <div class="container">

      

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