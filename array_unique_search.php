<?php
$a=array("a"=>"red","b"=>"green","c"=>"red"); // remove duplicate
print_r(array_unique($a));
?>
<hr>

<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
?>