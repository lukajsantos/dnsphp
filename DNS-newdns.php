<?php


$dns = new dns();
$dns->send('1.1.1.1', 53, "one.one.one.one");//第一个参数为dns服务器，53为端口，后面的为域名
$res1 = $dns->recv();
$Domain_IP1 = $res1['list'];//解析出的ip列表

$domain = "one.one.one.one";

$records = dns_get_record($domain, DNS_AAAA);

if ($records !== false) {
    $ipv6_list = array();
    foreach ($records as $record) {
        if ($record['type'] == "AAAA") {
            $ipv6_list[] = $record['ipv6'];
        }
    }

    if (!empty($ipv6_list)) {
        print_r($ipv6_list);
    } else {
        echo "Não foram encontrados registros AAAA para o domínio $domain";
    }
} else {
    echo "Erro ao consultar o DNS.";
}
?>