<?php

function checkPalindrome($char)
{
    $str = "";
    $s = strtolower($char);
    $len = strlen($char);
    for ($i = ($len - 1); $i >= 0; $i--) {
        $str = $str . $s[$i];
    }
    if ($s == $str) {
        echo "kata yang dimasukkan adalah palindrome";
    } else {
        echo "salah";
    }
}

$char = readline("Enter the string: ");
checkPalindrome($char);
