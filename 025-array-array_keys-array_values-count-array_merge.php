<?php
$infoCompany1 = [
    'name' => 'Travis Company',
    'address' => 'Main Avenue, 123',
    'yearFounded' => 1999,
    'employees' => 1000
];
$infoCompany2 = [
    'phone' => '11 99999-9999',
    'email' => ['contact@company.com', 'support@company.com', 'travis@company.com'],
    'site' => 'www.company.com'
];
$infoCompany = array_merge($infoCompany1, $infoCompany2);

echo "<pre>";
var_dump($infoCompany);
var_dump(array_keys($infoCompany));
var_dump(array_values($infoCompany));
var_dump(count($infoCompany));
