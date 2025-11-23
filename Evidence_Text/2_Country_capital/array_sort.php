<?php
    
    $country_list = array(
        "Bangladesh" => "Dhaka",
        "Turkiya" => "Ankara",
        "Pakistan" => "Islamabad",
        "India" => "Delhi",
        "Saudi" => "Jeddah"
    );


#   apply sorting on value
    // sort($country_list);     # re-indexing kore fele (lose original key) || 0,1,2 kore fele
    asort($country_list);  # index/key golor nam thik rekhe sort hobe

#   apply sorting on key
    // ksort($country_list);

#   apply descending short on value
    // rsort($country_list);  
    // arsort($country_list);

#   apply descending short on key
    // krsort($country_list); //descending short on key


    // echo "<pre>";
    // print_r($country_list);

    foreach ($country_list as $key => $value) {
        echo "The capital of " . $key ." is ". $value ."<br>";
    }



?>