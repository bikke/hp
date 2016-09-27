<?php

$color = array("#ff9999", "#99ff99", "#9999ff", "#ffff99", "#ff99ff", "#99ffff",
            "#ff9933", "#ff3399", "#99ff33", "#33ff99", "#9933ff", "#3399ff");
    $rand = mt_rand(0, count($color) - 1);
    //echo $color[$rand];
print " style=\"background-color:$color[$rand];\"";
?>
