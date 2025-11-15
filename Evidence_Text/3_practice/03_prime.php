<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Check Prime</h3>
    <form action="" method="POST">
        Number : <br>
        <input type="number" name="number" placeholder="Enter any number"> <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>

    <?php

    if(isset($_REQUEST['submit']) && $_REQUEST != ""){

        $data = $_REQUEST['number'];
        $newdata;

        if($data==1){
            echo $data. " Is not a Prime Number";
        }
        else if($data == 2){
            echo $data. " Is a Prime Number";
        }
        else if($data > 2){
            for($i = 2; $i < $data; $i++){
                if($data % $i == 0){
                    $newdata = $data. " Is not a Prime Number";
                    break;
                }
                $newdata = $data. " Is a Prime Number";
            }
            echo $newdata;
        }else{
            echo "Enter a valid Number";
        }
    }
    
    ?>
    
</body>
</html>