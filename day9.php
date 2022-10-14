<?php

/*
 * Complete the factorial function in the editor below. Be sure to use recursion.

factorial has the following paramter:

    int n: an integer

Returns

    int: the factorial of

Note: If you fail to use recursion or fail to name your recursive function factorial or Factorial,
you will get a score of 0.

Input Format
A single integer, n (the argument to pass to factorial).

Constraints
2 <= n <= 12
Your submission must contain a recursive function named factorial.
 * */

/*
 * Complete the 'factorial' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function factorial($n) {
    $res = 1;
    if($n >= 2)
        $res = $n * factorial($n - 1);

    return $res;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = factorial($n);

print($result);

//fwrite($fptr, $result . "\n");

//fclose($fptr);