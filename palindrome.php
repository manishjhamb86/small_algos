<?php

$num = 10;
$p = $num;
$sum=0;
while ((int) $num != 0) {
    $rem = $num % 10;
    $sum = $sum * 10 + $rem;
    $num = $num / 10;
}



if ($sum == $p) {
    echo $p." is palindrome number";
} else {
    echo $p." is not palindrome number";
}
?>