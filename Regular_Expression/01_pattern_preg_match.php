<?php

$line = "rakib is a used to be lazy when get many task or fund noting to do. And rakib suffer and try to do fast at the end of the data";

# If Found one match then stop (onno golo r check kore na)
// if (preg_match("/\brakib\b/i", $line, $match)) {
//     print "Match found";
// }

# Check full line and if find many then listed in an array
// if (preg_match_all("/\brakib\b/i", $line, $match)) {
//     print "Match found";
// }

// print_r($match);


$line = "<b>Rakib</b> is a good boy";
if (preg_match_all("/<b>(.*)<\/b>/U", $line,  $match)){
    print "Get it";
}

print_r($match);


# preg_grep 1ta character match kore
// $foods = ["pasta", "alu", "pizza", "nothing", "noop", "soop"];
// $food = preg_grep("/^p/", $foods); #  ^p mean starting with p
// print_r($food);   


# Splite used to erase or romove specifig one the store otheer
// $txt = "Rakib+++++++++++++++Rayhan+++++is+++here";
// $fields = preg_split("/\++/", $txt); // \++ one of any number of +

// foreach ($fields as $field) {
//     echo $field. "<br>";
// }

?>