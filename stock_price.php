<?php


function max_profit_single_transaction($prices) : int {

    if(count($prices) < 2)
        return 0;

    $max_profit = 0;
    $cheapest = $prices[0];

    for ($i=0; $i < count($prices); $i++) {

        $cheapest = min($prices[$i], $cheapest);
        $max_profit = max($max_profit, $prices[$i]-$cheapest);
    }
    return $max_profit;

}
$prices = [1,2,3,4,5,6];
echo "\nMax Profit in the case of " . implode(",", $prices) . " is: ";
echo max_profit_single_transaction($prices)."\n";

$prices = [7,1,5,3,6,4];
echo "Max Profit in the case of " . implode(",", $prices) . " is: ";
echo max_profit_single_transaction($prices)."\n";

$prices = [6,5,4,3,2,1];
echo "Max Profit in the case of " . implode(",", $prices) . " is: ";
echo max_profit_single_transaction($prices)."\n";
