<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Maximum Value</h3>
    <p>Give Multiple Value separate with (,) Commas</p>

    <form action="" method="post">
        Enter Your Numbers: <br>
        <input type="text" name="num" placeholder="Enter more then 1 numbers"> <br>
        <input type="submit" name="find" value="Find Max">
    </form>

    <br>

    <?php
    
    if(isset($_REQUEST['find']) && $_REQUEST['num']!= ""){
        
        $datas = list($data) = explode(",",$_REQUEST["num"]); // array
        $max = $datas[0];
        $min = $datas[0];

        for($i= 0;$i<count($datas);$i++){
            if($max<$datas[$i]){
                $max = $datas[$i];
            }
            if($min>$datas[$i]){
                $min = $datas[$i];
            }

        }
        echo "The Max number is : ". $max . "<br>";
        echo "The Min number is : ". $min;

    }
    
    ?>
    
</body>
</html>