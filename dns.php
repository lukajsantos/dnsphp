<?php

// this is the dns zone of your site/pag 

$domain = 'http://lukajsantos/';
$serial = date('Ymd') . '01';  // this is a exemple for serial date (AAAAMMDDVV)
$refresh = 86400;  // 1 day in seconds
$retry = 7200;    // 2 hours in seconds
$expire = 3600000; // 1000 hours in seconds em segundos
$negativeCacheTTL = 172800; // 2 days in seconds
$ip = "your ip here" // optinal

$fileContent = <<<EOT
\$ORIGIN $domain.
\$TTL 86400

@       IN      SOA     ns1.$domain. admin.$domain. (
                        $serial      ; Serial
                        $refresh     ; Refresh
                        $retry       ; Retry
                        $expire      ; Expire
                        $negativeCacheTTL ) ; Negative Cache TTL

; Registros de DNS aqui
www     IN      A       127.0.0.1
www     IN      A       "your ip here"
www     IN      AAAA     "your ipv6 here/optinal"
"your domain here"    IN      E       "ns of your domain here"
mail    IN      MX      10 mail.$domain. //domains of mail

EOT;

//save zone archives
file_put_contents('www/erro', $fileContent);
file_put_contents('www/dns.zone.record', $fileContent);

echo "Zone archives generated sucessfully!";

<?php
$domain = "exemplo.com"; // O domain for the resolver want

// Verifica se o domínio está no cache
$cacheFile = "cache/dns_cache.json"; // location where your cache file is
if (file_exists($cacheFile)) {
    $cache = json_decode(file_get_contents($cacheFile), true);
    if (isset($cache[$domain]) && $cache[$domain]["expiration"] > time()) {
        $ip_address = $cache[$domain]["ip"];
        echo "IP do cache: $ip_address";
        exit();
    }
}

// Se não estiver no cache, faz a busca DNS
$ip_address = gethostbyname($domain);"http://lazeraoponto.web-ded-159472a.uni5.net/"

// Salva o resultado no cache
$cache[$domain] = [
    "ip" => $ip_address,
    "expiration" => time() + 3600, // Cache válido por 1 hora
];
file_put_contents($cacheFile, json_encode($cache));

echo "IP novo: $ip_address";
?>

?>