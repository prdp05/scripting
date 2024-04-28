<?php
// Define a Calculator class
class Calculator {
    // Method to perform addition
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Method to perform subtraction
    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }
}

// Create an object of the Calculator class
$calc = new Calculator();

// Perform addition
$result_addition = $calc->add(10, 5);

// Perform subtraction
$result_subtraction = $calc->subtract(10, 5);

// Display results
echo "Result of addition: " . $result_addition . "<br>";
echo "Result of subtraction: " . $result_subtraction;
?>
