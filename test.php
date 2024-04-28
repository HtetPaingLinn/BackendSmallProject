<?php


$content = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$rate = json_decode($content, true);
$currency = (array_keys($rate["rates"]));
$number = (float) str_replace(',', '', $rate["rates"]["ILS"]);
print_r($currency);
print_r($rate);
print_r($number);