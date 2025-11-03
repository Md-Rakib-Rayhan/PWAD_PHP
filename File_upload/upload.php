<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload using PHP Procedural Coding</h3>
    <!--Get a file upload hoy na / Get has a limit-->
    <form action="" name="myform" method="post" enctype="multipart/form-data"> <!--"enctype" aita dite hobe/ nahole hobe na-->
        <input type="file" name="myfile" id=""> <br> <br>
        <input type="submit" value="Upload" name="upload">
    </form>

    <?php

        echo "<pre>";
        if(isset($_POST["upload"])){
            // print_r($_FILES);
            // echo $_FILES["myfile"]["name"] . "<br>";
            // echo $_FILES["myfile"]["tmp_name"] . "<br>";
            // echo $_FILES["myfile"]["size"] . "<br>";
            // echo $_FILES["myfile"]["error"] . "<br>";
            
            $tem_file =  $_FILES["myfile"]["tmp_name"]; //full url
            
            $file_name = $_FILES["myfile"]["name"];
            $destination = "files/" . $file_name;

            $file_size = $_FILES["myfile"]["size"]; //byte
            $maxsize = 1048576; //1mb
            // move_uploaded_file($_FILES[""][""],"");
            // move_uploaded_file($tem_file, $destination);

            // $ext = pathinfo($file_name, PATHINFO_EXTENSION); // get extention
            // echo $ext;
            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // if it in upper case then make it lower

            $allowed_types = array("jpg","jpeg","png");
            $errors = array();
            

            if($file_size > $maxsize){
                $errors[] = "<h1>The file is too large</h1>";
            }
            if(!in_array($ext, $allowed_types)){
                $errors[] = "<h1>Jpg, png, jpeg are only allowed</h1>";
            }
            // print_r($errors);
            if(count($errors) > 0){
                foreach($errors as $error){
                    echo $error ."<br>";
                }
            }
            else{
                move_uploaded_file($tem_file, $destination);
                echo "Uploaded";
            }
        }
    
    ?>
</body>
</html>