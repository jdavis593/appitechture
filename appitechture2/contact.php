<!DOCTYPE html>
<html lang="en">

<?php

include '../../db_conn.php';



function mysql_insert($inserts) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);
    mysql_select_db('appitechture');
    $result = mysql_query('INSERT INTO `contacts` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
    if (!$result) {
        die('Invalid Query: '.mysql_error());
    }

    return $result;
}

function db_test() {
    if( $conn === false ) {
        die( print_r( mysql_errors(), true));
    }
}

function notify() {
    $to = 'jdavis@appitechture.com';
    $subject = 'New Contact Form Submission from '.$_POST['name'].' on Appitechture.com';
    $message = $_POST['details'];

    mail($to, $subject, $message);
}

if (isset($_POST['name'])) {
    $f = "
        <div class='container marketing'>
            <div class='row'>
                <div class='col-lg-12'>
                    <p>Thank you for contacting us. We will be in touch within 2 business days.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div> ";
    db_test();
    mysql_insert(array('contact_name' => $_POST['name'], 'contact_email' => $_POST['email'], 'contact_phone' => $_POST['phone'] ));
    notify();
} else {
    $f = '';
}

echo "
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta name='description' content=''>
    <meta name='author' content='jdavis' >
    <link rel='shortcut icon' href='favicon.ico'>
    <link rel='apple-touch-icon' href='apple-touch-icon-precomposed.png'/>

    <title>Appitechture</title>

    <!-- Bootstrap core CSS -->
    <link href='assets/css/bootstrap.css' rel='stylesheet'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src='assets/js/html5shiv.js'></script>
    <script src='assets/js/respond.min.js'></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href='assets/css/responsive-style.css' rel='stylesheet'>

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-30492032-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>


<!-- NAVBAR
================================================== -->
<body>

<div class='navbar-wrapper'>
    <div class='container'>

        <div class='navbar navbar-inverse navbar-fixed-top'>
            <div class='container'>
                <div class='navbar-header'>
                    <a class='navbar-brand' href='#'><img src='assets/images/Appitechture Logo White.png' style='width: 65%; height: 65%' /></a>
                    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                </div>
                <div class='navbar-collapse collapse'>
                    </br>
                    <ul class='nav navbar-nav'>
                        <li><a href='index'>Home</a></li>
                        <li><a href='services.php'>Services</a></li>
                        <li><a href='about.php'>About Us</a></li>
                        <li><a href='contact.php'>Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div> </br></br></br></br></br></br>".

$f."

<!-- FEEDBACK FORM -->
    <div class='pads'>
      <form action='contact.php' method='POST' role='form'>
        <div class='form-group'>
          <label for='name'>Name</label>
          <input type='text' class='form-control' name='name' placeholder='Enter your name'>
        </div>
        <div class='form-group'>
          <label for='email'>Email Address</label>
          <input type='email' class='form-control' name='email' placeholder='Enter your email address'>
        </div>
        <div class='form-group'>
          <label for='phone'>Phone Number</label>
          <input type='phone' class='form-control' name='phone' placeholder='Enter your phone number'>
        </div>
        <div class='form-group'>
          <label for='details'>Details</label>
          <textarea class='form-control' name='details' placeholder='How can we help you?' rows='8'></textarea>
        </div>
        <button type='submit' class='btn btn-primary'>Submit</button>
      </form>
   </div><!-- end: Content -->
</div><!--/row-->
</div><!--/container-->
</div><!-- /.marketing -->
<div class='clearfix'></div>

    <a id='install'><hr class='featurette-divider'></a>
    <!-- FOOTER -->
    <footer>
        <p class='pull-right'><a href='#'>Back to top</a></p>
        <p>&copy; 2014 Appitechture, LLC</p>
    </footer>

</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src='assets/js/jquery.js'></script>
<script src='assets/js/holder.js'></script>
<script src='js/carousel.js'></script>
<script src='js/collapse.js'></script>
<script src='js/dropdown.js'></script>
<script src='js/transition.js'></script>
<script src='js/scrollspy.js'></script>
<script src='js/affix.js'></script>
<script src='js/alert.js'></script>
<script src='js/button.js'></script>
<script src='js/modal.js'></script>
<script src='js/popover.js'></script>
<script src='js/tab.js'></script>
<script src='js/tooltip.js'></script>
</body>
</html>";

