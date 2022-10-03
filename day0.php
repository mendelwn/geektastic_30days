<?php
/*
 * To complete this challenge, you must save a line of input from stdin to a
 * variable, print Hello, World. on a single line, and finally print the value
 * of your variable on a second line.
 */

$_fp = fopen("php://stdin", "r");

$inputString = fgets($_fp); // get a line of input from stdin and save it to our variable

// Your first line of output goes here
print("Hello, World.\n");
print($inputString);


// Write the second line of output

fclose($_fp);