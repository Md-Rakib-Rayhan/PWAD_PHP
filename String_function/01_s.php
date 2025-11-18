<?php

$text1 = "Rakib";
$text2 = "Rakib";

# strcmp() a jodi 2ta value match kore then it's return 0 and if not then return -1
// echo strcmp($text1, $text2);


// if(strcmp($text1, $text2) !=0){
if(strcmp($text1, $text2) == -1){
    echo "Password not match!";
}
else{
    echo "Password match!";
}


?>