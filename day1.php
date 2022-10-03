<?php
/*
 *  DAY 1
    Complete the code in the editor below. The variables , , and

    are already declared and initialized for you. You must:

        Declare

    variables: one of type int, one of type double, and one of type String.
    Read
    lines of input from stdin (according to the sequence given in the Input Format section below) and initialize your
    variables.
    Use the
    operator to perform the following operations:

        Print the sum of

    plus your int variable on a new line.
    Print the sum of
    plus your double variable to a scale of one decimal place on a new line.
    Concatenate
    with the string you read as input and print the result on a new line.
*/


$handle = fopen ("php://stdin","r");

$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$ni = 0;
$nd = 0.0;
$ns = "";
// Read and save an integer, double, and String to your variables.
$input = [];
$types = ['%i', '%f',"%[^\n]",'%s'];
$pos = 0;
while($data = fscanf($handle, $types[$pos])){
    $input[] = $data[0];
    $pos ++;
}

list($ni,$nd,$ns) = $input;

// Print the sum of both integer variables on a new line.
print($i + $ni."\n");
// Print the sum of the double variables on a new line.
print(number_format(floatval($d + $nd), 1)."\n");
// Concatenate and print the String variables on a new line
print($s.$ns."\n");
fclose($handle);
