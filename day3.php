<?php

/*
 *  Given an integer, n, perform the following conditional actions:

If n is odd, print Weird
If n is even and in the inclusive range 2 of to 5, print Not Weird
If n is even and in the inclusive range of 6 to 20, print Weird
If n is even and greater than 20, print Not Weird

Input Format

A single line containing a positive integer, n < 100
 */

$N = intval(trim(fgets(STDIN)));

$w = "Weird";
$nw = "Not Weird";

if($N % 2 == 1)
    print($w);
else {
    if(($N >= 2 && $N <6) || $N >21)
        print($nw);
    else
        print($w);
}