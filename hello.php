<?php
function mathsOperations($num1, $num2, $operator)
{
    $result = 0;
    switch ($operator)
    {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '%':
        $result = $num1 % $num2;
        break;
    default:
        return "Error: wrong operator";
        break;
    }

    return $result;
}
$num1 = 25;
$num2 = 10;

echo "The Sum of $num1 + $num2 is " . mathsOperations($num1, $num2, '+') . "\n";
echo "The difference of $num1 - $num2 is " . mathsOperations($num1, $num2, '-') . "\n";
echo "The product of $num1 * $num2 is " . mathsOperations($num1, $num2, '*') . "\n";
echo "The product of $num1 / $num2 is " . mathsOperations($num1, $num2, '/') . "\n";
echo "The remainder of $num1 % $num2 is " . mathsOperations($num1, $num2, '%') . "\n";

echo "The square root of $num1 is " . sqrt($num1) . "\n";
echo "The natural logarithm of $num1 is " . log($num1) . "\n";