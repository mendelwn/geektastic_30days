<?php
/*
 * Given the meal price (base cost of a meal), tip percent (the percentage of
 * the meal price being added as tip), and tax percent (the percentage of the
 * meal price being added as tax) for a meal, find and print the meal's total
 * cost. Round the result to the nearest integer.
 *
 * mealcost = 100
 * tip percent = 15
 * tax percent = 8
 *
 * A tip of 15% * 100 = 15, and the taxes are 8% * 100 = 8.
 * Print the value 123 and return from the function.
 */

/*
 * Complete the 'solve' function below.
 *
 * The function accepts following parameters:
 *  1. DOUBLE meal_cost
 *  2. INTEGER tip_percent
 *  3. INTEGER tax_percent
 */

function solve($meal_cost, $tip_percent, $tax_percent) {
    $tip = $meal_cost * $tip_percent / 100;
    $tax = $meal_cost * $tax_percent / 100;
    $meal = round($meal_cost + $tip + $tax, 0);
    print($meal);
}

$meal_cost = doubleval(trim(fgets(STDIN)));

$tip_percent = intval(trim(fgets(STDIN)));

$tax_percent = intval(trim(fgets(STDIN)));

solve($meal_cost, $tip_percent, $tax_percent);
