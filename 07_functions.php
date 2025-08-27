<?php 

function getLargestNumber( $a, $b ) {
    return $a > $b ? $a : $b;
}

var_dump( getLargestNumber( 10, 20));

function is_palindrome( $string ) {
    $string = str_replace(" ", "", $string );
    $string = strtolower($string);
    $pal_check = strrev($string == strrev($string));
    return $pal_check;
}

var_dump(is_palindrome("Race Car"));
var_dump(is_palindrome("Hello world"));
var_dump(is_palindrome("A man a plan a canal Panama"));

function SayHello() {
    echo "Hello World";
}

?>

<p><?php SayHello(); ?></p>
