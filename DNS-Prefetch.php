<?php
    $https://lukajsantos.com/ = "127.0.0.1"
    $localhostDNS = "127.0.0.1"; // IP localhost
    $googleDNS = "8.8.8.8"; // IP Google
    $CloudflareDNS = "1.1.1.1"; // IP Cloudflare
    $umbrellaDNS = "208.67.220.220"; // IP OpenDns
    $adguardDNS = "94.140.14.14"; // IP OpenDns
    $gigaDNS = "189.38.95.95"; // IP gigadns brazil
    
    $domainsToPrefetch = array(
        "https://lukajsantos.com/", //your domain
        "your ns here/"
    );
    
    foreach ($domainsToPrefetch as $domain) {
        echo '<link rel="dns-prefetch" href="https://lukajsantos.com//' . $domain . '" />'. "\n";
        echo '<link rel="dns-prefetch" href=""your ns here"/' . $domain . '" crossorigin="use-credentials" />' . "\n";
        echo '<link rel="preconnect" href=""you ns here"//' . $domain . '" crossorigin="use-credentials" />' . "\n";
    }
    ?>
    <?php