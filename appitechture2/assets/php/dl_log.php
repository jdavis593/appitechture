<?php
/*

*	File:	    dl_log.php
*	By:			Josh Davis
*	Date:		2014-02-26
*
*	This script INSERTS the download records into the emsp.downloads table
*   for EmSP mobile app downloads
*
*=====================================
*/

{ 		//	Secure Connection Script
    include('../../htconfig/sdg1DatabaseConfig.php');
    $dbSuccess = false;
    $dbConnected = mysql_connect($db['hostname'],$db['username'],$db['password']);

    if ($dbConnected) {
        $dbSelected = mysql_select_db($db['database'],$dbConnected);
        if ($dbSelected) {
            $dbSuccess = true;
        } else {
            echo "DB Selection FAILed";
        }
    } else {
        echo "MySQL Connection FAILed";
    }
    //	END	Secure Connection Script

session_start();

if($_SESSION['logged_user'] == FALSE || $_SESSION['logged_user'] == ''){
    header ("Location: emsp_login.php");
}

$logged_user = $_SESSION['logged_user'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];

if ($dbSuccess) {

    $Download_SQLinsert = "INSERT INTO emsp.downloads (user_id, download_date) VALUES ($logged_user, now())";

    if (!mysql_query($Download_SQLinsert))  {

        echo $Download_SQLinsert;
        echo "<br /><br /><br />";
        die( print_r( mysql_error(), true));
    }
}

}

header("Location: install.php");

?>
