<?php
/*
 * Given an array, A of N integers, print A's elements in reverse order as a single line of space-separated numbers.

Example
Print 4 3 2 1. Each integer is separated by one space.
INPUT format:
The first line contains an integer, N (the size of our array).
The second line contains space-separated integers that describe array 's elements.
Constraints:
1<=N<=1000
1<=Ai<=10000


 */

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

//Constraints
if(($n >= 1 && $n <= 1000) && (count($arr) >= 1 && count($arr) <= 10000)){
    $arr = array_reverse($arr);
    $str = implode( " ", $arr);
    print($str);
}
