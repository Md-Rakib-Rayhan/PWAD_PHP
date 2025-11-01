<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        nav{
            padding: 20px 30px;
            text-align: center;
        }
        .container{
            width: 100%;
            height: 60vh;
            background: skyblue;
        }
        .container h1{
            text-align: center;
            padding: 10px 0;
        }
        .container p{
            padding: 20px 30px
        }
        footer{
            background: black;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .active{
            color: red;
            border: 1px solid black;
        }

    </style>
</head>
<body>

<!-- Navbar -->
<?php
    include("inc/navbar.php");
?>

<!-- Content Part -->
    <div class="container">
        <h1>Contact Page</h1>
        <hr color="black">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, enim. Sint quidem magni voluptates. Quasi labore, expedita exercitationem molestias saepe doloribus, dicta similique commodi nostrum tenetur quam quia. Eaque quisquam rem ea iusto, nulla neque deserunt quasi minima similique et aliquam placeat dolorem, consequuntur sunt, laboriosam molestiae! Blanditiis, repellendus ipsum.</p>

    </div>

<!-- Footer Area -->
<?php
include("inc/footer.php");
?>


</body>
</html>