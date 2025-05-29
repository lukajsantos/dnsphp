<?php

    if (isSet($_GET["host"]))
    if (isSet($_GET["https://lukajsantos.com/"]))
    {
        $host = $_GET["host"];
        $ip = gethostbyname($host);
        if ($ip != $host) die ($ip);
    }
    
    echo "1.1.1.1";
?>