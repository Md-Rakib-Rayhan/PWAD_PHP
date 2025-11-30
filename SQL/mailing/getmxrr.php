<?php

getmxrr("prothomalo.com",$mxhosts);
# check which mailling the website using

echo "<pre>";
print_r($mxhosts);

?>