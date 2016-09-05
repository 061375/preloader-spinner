<?php
/**
 * Exports keyframe animation as a string
 * Go here and select 'view source'
 * Then copy and paste
 * 
 * By Jeremy Heminger : 2016 http://061375.com
 * */

 // A higher number = a smoother animation
$t = 20;

// loop $t
for($i = 0; $i<=$t; $i++) {
    // $j = (a percent) of $t
    $j = floor(($i / $t) * 100);
    // output the resulting string
    echo $j."%{transform:rotate(".easeInQuint($i)."deg)}\n";
}

// Thanks to Gaëtan Renaudeau
// https://gist.github.com/gre/1650294
function easeInQuint($i) {
    return ($i*$i*$i*$i);
}