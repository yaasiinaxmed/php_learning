<?php 

function compareNumbers ( $a , $b ) {
    $results = false;

    if( $a > $b ) {
        $results = "a $a is greater than b $b";
    } else if ($a < $b ) {
        $results = "a $a is less then b $b";
    } else {
        $results = $a;
    };

    return $results;
}

var_dump( compareNumbers( 10, 20));
var_dump( compareNumbers( 20, 10));
var_dump( compareNumbers( 10, 10));

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
