<?php
/*
 * Given a base-10 integer, n, convert it to binary (base-2).
 * Then find and print the base-10 integer denoting the maximum number
 * of consecutive 1's in n's binary representation.
 * When working with different bases, it is common to show the base as a subscript
 *
 * Example
    The binary representation of 125(10) is 1111101 (2). In base 10,
    there are 5 and 1 consecutive ones in two groups. Print the maximum, 5

Input Format
    A single integer, n
Constraints
    1<= n <= 10000000
Output Format
Print a single base-10 integer that denotes the maximum number
of consecutive 1's in the binary representation of n.
 *
 * */

$n = intval(trim(fgets(STDIN)));

if($n <= 1 || $n >= 10000000)
    die(0);

$bin = decbin($n);
$split = explode("0",$bin);
$len = 0;
foreach($split as $v) {
    $v_len = strlen($v);
    if ($len < $v_len)
        $len = $v_len;
}

print($len);