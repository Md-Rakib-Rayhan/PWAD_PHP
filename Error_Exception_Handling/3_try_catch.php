<?php

class MyException extends Exception{ # M own Exception Class created mby me
    function errorMessage(){
        $error = "My Exception: ". $this->getMessage(). "<br>Line number: ". $this->getLine();
        return $error;
    }
}



function check($n){
        try {
        if($n<=0){
            throw new Exception("Please Enter a Valid Input");
        } 
        if($n==3){ # My Exception class
            throw new MyException("My Own made exception class for num 3");
        } 
        $div = 4 / $n;
        echo "Result is " . $div. "<br>";

    } catch (MyException $abc) { 
        echo $abc->errorMessage() . "<br>";   
    } catch (Exception $abc) { 
        echo $abc->getMessage() . "<br>";   
    } finally {  
        echo "<br> Final <br>";
    }
}


check(2);
check(3);

    

?>