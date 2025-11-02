<!-- <?php

    include("form_superglobal.php");
    include("form_superglobal.php"); // joto bar dibe toto bar asbe

    include_once("form_superglobal.php");
    include_once("form_superglobal.php"); // ekbar include(include or include_once) hobe r 2nd time r asbe na

?>

<?php

    require("form_superglobal.php");
    require("form_superglobal.php"); // joto bar dibe toto bar asbe

    require_once("form_superglobal.php");
    require_once("form_superglobal.php"); // ekbar include(require or require_once) hobe r 2nd time r asbe na

?> -->


<?php

    include("nofile.php"); // file na paile worning(error) dibe but next line code golo print hobe
    echo "<h1>hello i am still alive</h1>";

    require("nofile.php"); // file na paile Fatal error dibe r next line er code golo r print hobe na
    echo "<h1>hello i am no longer alive</h1>";

?>

