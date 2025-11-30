<?php

// $domain = "example.com";
$domain = "github.com";
$recordexits = dns_get_record($domain);


echo "<pre>";
print_r($recordexits);
?>