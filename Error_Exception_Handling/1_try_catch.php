<?php

#Simple Example with if else that how try catch work.  (0 diye divide korle normally error ase)
    $n = 0;

    if($n<=0){
        echo "Please enter a valid input.";
    }else{
        $div = 4 / $n;
        echo "Result is " . $div;
    }
    echo "<br>";




# Try Catch _____________________________________________________________Start from here________

    try {
        if($n<=0){
            throw new Exception("Please Enter a Valid Input"); // value return to catch
        }
        // if true hole porer line golor r execute hobe na / similar to return
        $div = 4 / $n;
        echo "Result is " . $div;
    }
    catch (Exception $abc) { // Exception php er build in class 

        echo $abc->getMessage() . "<br>"; // getMessage run korle throw kora message show hobe
    }

    

?>