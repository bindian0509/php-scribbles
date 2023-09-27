<?php


function max_profit_with_multiple_transactions($prices) : int {

    $max_profit = 0;

    for ($i=0; $i < count($prices) - 1; $i++) {
        if ($prices[$i+1] > $prices[$i]) {
            $max_profit += $prices[$i+1] - $prices[$i];
        }
    }
    return $max_profit;

}

$prices = [7,1,5,3,6,4];
echo "Max Profit in the case of " . implode(",", $prices) . " is: ";
echo max_profit_with_multiple_transactions($prices)."\n";

$prices = [1,2,3,4,5,6];
echo "Max Profit in the case of " . implode(",", $prices) . " is: ";
echo max_profit_with_multiple_transactions($prices)."\n";

$prices = [6,5,4,3,2,1];
echo "Max Profit in the case of " . implode(",", $prices) . " is: ";
echo max_profit_with_multiple_transactions($prices)."\n";
