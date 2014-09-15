<?php

define("ANDROID_REDIRECT", "http://www.google.com"); //Define Redirect Path Here For Android
define("IOS6_REDIRECT", "http://sdg1/engagements"); //Define Redirect Path Here For iOS 6.x.x
define("IOS7_REDIRECT", "http://sdg1/forecasting/11-13/forecast_login_11-13.php"); //Define Redirect Path Here For iOS 7.x.x
define("DEFAULT_REDIRECT", "http://emsp.endeavortelecom.com/responsive.html"); //Define Redirect Path Here For all other

$http_user_agent = $_SERVER['HTTP_USER_AGENT'];

if (stristr($http_user_agent, "android") != FALSE) {
  header("Location: " . ANDROID_REDIRECT);
}
else if (stristr($http_user_agent, "iphone") || stristr($http_user_agent, "ipad") && stristr($http_user_agent, "OS 6_") != FALSE) {
  header("Location: " . IOS6_REDIRECT);
}
else if (stristr($http_user_agent, "iphone") || stristr($http_user_agent, "ipad") && stristr($http_user_agent, "OS 7_") != FALSE) {
  header("Location: " . IOS7_REDIRECT);
}
else {
  header("Location: " . DEFAULT_REDIRECT);
  }
  ?>
