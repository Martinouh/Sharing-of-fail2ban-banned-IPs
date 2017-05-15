<?php
	      //jail to be used
	      $jail = "sshd";

        // file to keep the last ban
        $lastbanfile="/etc/fail2ban/lastban";

        // database configuration
        $dbserver="178.62.227.23";
        $dbuser="root";
        $dbpass="gorlier258/";
        $dbname="fail2ban";

        // connect to database
        $link = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname) or die('Could not connect: ' . mysqli_error());
        mysqli_select_db($link,$dbname) or die('Could not select database');
?>
