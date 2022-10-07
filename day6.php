<?php
/*
 * Given a string, S, of length N that is indexed from to 0 to N-1, print its even-indexed and odd-indexed
 * characters as 2 space-separated strings on a single line (see the Sample below for more detail).

    Note: 0 is considered to be an even index.

Example
s=adbecf
Print abc def

Input Format

The first line contains an integer, T (the number of test cases).
Each line of T the subsequent lines contain a string, S

Constraints
1<T<10
2 <=length of S <= 10000
Output Format

For each String S (where 0 <= j <= T-1), print Sj's even-indexed characters, followed by a space,
followed by Sj's odd-indexed characters.
Sample input:
2
Hacker
Rank
sample output:
hce akr
rn ak
 *
 * */
$_fp = fopen("php://stdin", "r");

$t = intval(trim(fgets(STDIN)));

while($t > 0 && $t <= 10){
    $t--;
    $s = trim(fgets(STDIN));
    $len = strlen($s);
    if($len <= 10000 && $len >= 2) {
        $ret = splitText($s);
        print("$ret\n");
    }
}

function splitText($s){
    $arr = str_split($s,1);
    $odd = $even = "";
    foreach($arr as $k => $v){
       if($k % 2 == 0)
           $even .= $v;
       else $odd .= $v;
    };
    return "$even $odd";
}