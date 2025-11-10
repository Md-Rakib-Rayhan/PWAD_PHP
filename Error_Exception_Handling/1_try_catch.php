<?php

#Simple Example with if else that how try catch work.  (0 diye divide korle normally error ase)
    $n = 0;

    if($n<=0){
        // echo "Please enter a valid input.";
    }else{
        $div = 4 / $n;
        // echo "Result is " . $div;
    }


# Try Catch ______________________

    try {
        if($n<=0){
            throw new Exception("Please Enter a Valid Input");
        } // if true hole porer line golor r execute hobe na / similar to return
        $div = 4 / $n;
        echo "Result is " . $div;
    } catch (Exception $abc) { // Exception php er build in class 

        // build in methods
        echo $abc->getMessage() . "<br>"; // getMessage run korle throw kora message show hobe
        echo $abc->getLine() . "<br>"; // koto number line a error asse
        echo $abc->getFile() ."<br>"; // konfile theke error asse (multiple file niye kaj korar somoy aita very helpfull)
    }

    

?>