<?php

use PHPUnit\Framework\TestCase;

require_once('./src/Problem.php');

class FactorialCalculatorTest extends TestCase {
    public function testCalculateFactorial() {
        $this->assertEquals(1, FactorialCalculator::calculateFactorialFor(0));

        $this->assertEquals(1, FactorialCalculator::calculateFactorialFor(1));

        $this->assertEquals(120, FactorialCalculator::calculateFactorialFor(5));

        $randomNumber = rand(3, getrandmax());
        $calculatedFact = 1;
        for ($i = 2; $i <= $randomNumber; $i++) {
            $calculatedFact *= $i;
        }
        $this->assertEquals($calculatedFact, FactorialCalculator::calculateFactorialFor($randomNumber));

        $this->assertNull(FactorialCalculator::calculateFactorialFor(-3));
        $this->assertNull(FactorialCalculator::calculateFactorialFor(1.5));
        $this->assertNull(FactorialCalculator::calculateFactorialFor(false));
        $this->assertNull(FactorialCalculator::calculateFactorialFor('abc'));
    }
}

?>
