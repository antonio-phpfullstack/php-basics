<?php
$domain = "www.phpfullstack.com.br";
echo "{$domain}\n";
echo str_replace("www.", "https://", $domain) . "\n";
echo "{$domain}\n";

$domain = str_replace("www.", "https://", $domain);
$protocol = substr($domain, 0, 8);
echo $protocol === "https://" ? "It's safe\n" : "It's not safe\n";

$region = substr($domain, -3);
echo "region = $region\n";
echo $region === "com" ? "International website\n" : "Local website\n";

var_dump($domain);
var_dump(substr($domain, 8, -7));
var_dump(strlen($domain));
