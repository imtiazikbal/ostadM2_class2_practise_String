<?php 
$string = "imtiaz ikbal";
$find = ["imtiaz","ikbal"];
$change = ["md","shakil"];

//echo str_replace($find,$change,$string);
//echo str_ireplace($find,$change,$string);
echo strtr($string,[
    "imtiaz"=>"md",
    "ikbal"=>"shakil"
]);

?>
