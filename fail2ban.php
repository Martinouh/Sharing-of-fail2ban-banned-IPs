<?php
        require_once("/etc/fail2ban/phpconfig.php");

        $name = $_SERVER["argv"][1];
        $protocol = $_SERVER["argv"][2];
        $port = $_SERVER["argv"][3];
        if (!preg_match('/^\d{1,5}$/', $port))
                $port = getservbyname($_SERVER["argv"][3], $protocol);
        $ip = $_SERVER["argv"][4];

        $hostname = gethostname();

        //Vérifie si l'adresse IP est déjà dans la DB
        $check = 'SELECT ip FROM `erp_core_fail2ban` where ip ="'.addslashes($ip) . '"';
        $check_result = mysqli_query($link, $check) or die('Query failed: ' . mysqli_error($link));

				//Si pas dans la DB on Ajoute l'ip = Attaque sur l'hote
        if(mysqli_num_rows($check_result) == 0){
		        $query = 'INSERT INTO `erp_core_fail2ban` set hostname="' . addslashes($hostname) . '", name="' . addslashes($name) . '", protocol="' . addslashes($protocol) . '", port="' . addslashes($port) . '", ip="' . addslashes($ip) . '", created=NOW()';
		        $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
        }
				mysqli_close($link);
				exit;
?>
