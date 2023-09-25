<?php

$test_int    = 12;
$test_string = "12";
$test_float  = 12.8;
echo "\n";
echo (int) $test_int;
echo "\n";// 12
echo (int) $test_string;      // 12
echo "\n";
echo (int) $test_float;       // 12
echo "\n";

echo intval($test_int, 8);    // 12 <-- WOAH!
echo "\n";
echo intval($test_string, 8); // 10
echo "\n";
echo intval($test_float, 8);   // 12 <-- HUH?
echo "\n";
echo intval($test_string); // 10
echo "\n";

echo intval("1123asdfka3243");
echo "\n";
echo (int) "1123asdfka3243";
echo "\n";

$tplVars['WELCOME_BLOCKS'] = "some val";
print_r($tplVars);
echo "\n";

getData((int) "12345ahjasjasdad23324hdja");

function getData($name, $limit = '50', $page = '1') {
    echo $name; echo "\n"; echo $limit ; echo "\n"; echo $page; echo "\n";
}

$rate = "3.1415926";
$exchange = "0.038";
$amount = ROUND($rate / $exchange, 2);
var_dump($amount);
