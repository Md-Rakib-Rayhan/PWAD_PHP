<!-- Standard PHP tags________________________________________________________________ -->
<?php

    // My code start here
    echo "<br> Hello world <br>"

?>




<!-- Short open tags__________________________________________________________________ -->
<?
    echo "<br> Hello world <br>";
?>
<!--
Same as above. To enable this:
1. Open XAMPP Software → Apache → Config → php.ini
2. Search for "short_open_tag"
3. Set: short_open_tag = On
4. Restart Apache in XAMPP
Note: Not recommended for production environments because it may be disabled on some servers.
-->




<!-- Short echo tags__________________________________________________________________ -->
<?= "<br> Hello world <br>" ?>
<!-- Only work in single/one line statement -->
<!-- It derectly print message, no need echo/print function -->
<!-- It's work same like < ?php echo "<br >Hello world <br>" ?> -->





<!-- General Notes ___________________________________________________________________ -->
<!--
- PHP statement ends with a semicolon (;)
- Variable names are case-sensitive
- PHP keywords, functions, and class names are NOT case-sensitive
-->