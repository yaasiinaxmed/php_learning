<?php 

if(10 < 1) {
    echo "We stoped at if";
} else if (10 < 4) {
    echo "We stoped the first else if";
} else if (10 < 11 ) {
    echo "We stoped the second else if \n";
} else if (10 < 20) {
    echo "We stoped the third else if";
} else {
    echo "None of condition are true, we never stoped, so this is the else ";
}

$user_logged_in = true;

if ($user_logged_in) {
    echo "Welcome to dashboard";
} else {
    echo "Please login to continue";
}