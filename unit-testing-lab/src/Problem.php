<?php

class FactorialCalculator {
    
    static public function calculateFactorialFor($inputNumber) {
        // Check if $inputNumber is indeed an integer
        if (!is_int($inputNumber) || $inputNumber < 0) {
            return null;
        }

        // Handling special cases for 0 and 1
        if ($inputNumber === 0 || $inputNumber === 1) {
            return 1;
        }

        $result = 1;

        // Using a for loop to calculate factorial
        for ($currentNumber = 2; $currentNumber <= $inputNumber; $currentNumber++) {
            $result *= $currentNumber;
        }

        return $result;
    }
}


 ?>