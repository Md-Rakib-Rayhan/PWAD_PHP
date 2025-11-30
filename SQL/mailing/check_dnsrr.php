<?php

$domain = "example.com";
$recordexits = checkdnsrr($domain, "ANY");
if($recordexits) {
    echo "The domain " . $domain . " is already exits";
}else{
    echo "The domain ". $domain . " is not exit you can buy it";
}

?>