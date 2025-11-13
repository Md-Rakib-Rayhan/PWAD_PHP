<?php

// Still Working not done _____________________________________
    $n = 0;

    try {

        if($n<=0){
            throw new Exception("Please Enter a Valid Input");
        } 

        $div = 4 / $n;
        echo "Result is " . $div;

    } catch (Exception $abc) { // Exception php er build in class 

        // All build in methods
        echo $abc->getMessage() . "<br>";   // getMessage run korle throw kora message show hobe
        echo $abc->getLine() . "<br>";      // koto number line a error asse
        echo $abc->getFile() ."<br>";       // konfile theke error asse (multiple file niye kaj korar somoy aita very helpfull)
    }

    

?>