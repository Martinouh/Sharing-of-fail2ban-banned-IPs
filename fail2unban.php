<?php
        require_once("/etc/fail2ban/phpconfig.php");

        $ip = $_SERVER["argv"][1];

        $query = 'DELETE FROM `erp_core_fail2ban` where ip ="'.addslashes($ip) . '"';

        $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
        mysqli_close($link);
        exit;

?>
