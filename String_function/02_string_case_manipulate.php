<?php

    $txt = "RaKiB";

    echo strtoupper($txt). "<br>";
    echo strtolower($txt). "<br>";
    echo strrev($txt). "<br>";

?>

<hr>


<?php

#    0 1 2 3 4 5 6 7 8 9 10 11
#    H e l l o   W o r l  d  !
#              ^----- start at index 6 ("W")
#              take 5 characters → "World"

    $x = "Hello-World!";                  
    echo substr($x, 6, 5);
    // substr($string, $start, $length);

    echo "<br>";
    echo substr($x, 6)."<br>";

#                 -5 -4 -3 -2 -1 
#    H e l l o   W o  r  l  d  !
#                  ↑
#             Start at index -5 (which is "o")

    echo substr($x, -5, 3). "<br>";

#   Start at index 5
#   Length = -3: Stop 3 characters from the end, which means we stop at index 9.
#   "Hello World!" is 12 characters, so if we subtract 3 from the end, we get:
#   12 - 3 = 9 (so, we stop extracting at index 9).

    echo substr($x, 5, -3). "<br>";


?>