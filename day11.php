<?php
/*
 *
 * Consider a 6x6 2d array A
 * 1 1 1 0 0 0
 * 0 1 0 0 0 0
 * 1 1 1 0 0 0
 * 0 0 0 0 0 0
 * 0 0 0 0 0 0
 * 0 0 0 0 0 0
 *
 * We define an hourglass in A to be a subset of values with indices
 * falling in this pattern in A's graphical representation:
 *
 * a b c
 *   d
 * e f g
 *
Calculate the hourglass sum for every hourglass in A, then print the maximum hourglass sum.

Example
In the array shown above, the maximum hourglass sum is 7 for the hourglass in the top left corner.

Input Format
There are 6 lines of input, where each line contains 6 space-separated integers that describe
the 2D Array A.

Constraints
-9 <= A[i][j] <= 9
0 <= i, j <= 5
Output Format

Print the maximum hourglass sum in A

Sample Input

1 1 1 0 0 0
0 1 0 0 0 0
1 1 1 0 0 0
0 0 2 4 4 0
0 0 0 2 0 0
0 0 1 2 4 0

Sample Output
19

Explanation

A contains the following hourglasses:

1 1 1   1 1 0   1 0 0   0 0 0
  1       0       0       0
1 1 1   1 1 0   1 0 0   0 0 0

0 1 0   1 0 0   0 0 0   0 0 0
  1       1       0       0
0 0 2   0 2 4   2 4 4   4 4 0

1 1 1   1 1 0   1 0 0   0 0 0
  0       2       4       4
0 0 0   0 0 2   0 2 0   2 0 0

0 0 2   0 2 4   2 4 4   4 4 0
  0       0       2       0
0 0 1   0 1 2   1 2 4   2 4 0

The hourglass with the maximum sum (19) is:
2 4 4
  2
1 2 4
 * */

$arr = array();
/*
for ($i = 0; $i < 6; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    print_r($arr);
}*/
//Pra simplificar - sem precisar digitar
$arr = [
    [1, 1, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 0],
    [1, 1, 1, 0, 0, 0],
    [0, 0, 2, 4, 4, 0],
    [0, 0, 0, 2, 0, 0],
    [0, 0, 1, 2, 4, 0],
];

$arr = [
    [-1, -1, 0, -9, -2, -2],
    [-2, -1, -6, -8, -2, -5],
    [-1, -1, -1, -2, -3, -4],
    [-1, -9, -2, -4, -4, -5],
    [-7, -3, -3, -2, -9, -9],
    [-1, -3, -1, -2, -4, -5],
];

$positions = [
    [[0,1,2],[1],[0,1,2]],
    [[1,2,3],[2],[1,2,3]],
    [[2,3,4],[3],[2,3,4]],
    [[3,4,5],[4],[3,4,5]]
];

//Calculando as positions dinamicamente:
// 6 - 4, 5 - 3, 4 - 2, 3 - 1
$limit = count($arr) -2;
$limit2 = count($arr[0]) -2;
$sum = [];
$counter = 0;
for($line = 0; $line < $limit; $line++){
    for($pos = 0; $pos < $limit2; $pos++){
        $sum[$counter] = 0;
        foreach($positions[$pos] as $k => $p){
            foreach($p as $key) {
                $sum[$counter] += $arr[$line + $k][$key];
            }
        }
        $counter++;
    }
}

foreach($sum as $s) {
    if ($max < $s)
        $max = $s;
}
print_r($sum);
print($max);