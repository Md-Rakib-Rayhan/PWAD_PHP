<?php


echo date("d-m-y"). "<br>";
echo date("D-M-Y l"). "<br>";
echo date("D-M-Y h-i-s"). "<br>"; // actual time asbe na / because country arekta set kora

// Server theke region change korte hobe ->
// Xampp a php.ini te nicher aita change korte hobe-> 
// date.timezone=Europe/Berlin ----aita silo default
// date.timezone=Asia/Dhaka
// Aita Globally set hobe that mean onno jekono file au same aitai hobe


// Or sudho ai file a specific region er time set korte caile
date_default_timezone_set("Europe/Berlin");
echo date("D-M-Y h-i-s"). "<br>";



?>