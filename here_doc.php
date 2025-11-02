<!-- <?php

    echo <<<Jakhusi
                //  this is call here_doc
    Jakhusi;
?> -->


<?php

    $website = "https://www.you.com";
    echo <<<Jakhusi

    <h1>Welcome to our website</h1>
    $website
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsam deleniti, eaque modi ex assumenda quod ea ducimus qui. Debitis?</p>

    Jakhusi; // EXTRA TAB DEYA JABE NA
?>

<?php

    $website = "https://www.you.com";
    $data = <<<Jakhusi

    <h1>Welcome to our website2</h1>

    Jakhusi;
    echo $data;
?>


