<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

  public function testAdd()
  {

    $calculator = new Inc\Calculator;
    $result = $calculator->add(20, 5);

    //assertion;
    $this->assertEquals(25, $result);
  }

  public function testSubtract()
  {

    $calculator = new Inc\Calculator;
    $result = $calculator->subtract(10, 5);

    //assertion
    $this->assertEquals(5, $result);

    // test 2.

    $result_2 = $calculator->subtract(5, -10);
    $this->assertEquals(15, $result_2);

    // test 3.

    $result_3 = $calculator->subtract(-5, 10);
    $this->assertEquals(-15, $result_3);
  }

  public function testMultiply()
  {
    $calculator = new Inc\Calculator;
    $result = $calculator->multiplication(3, 4);
    $this->assertEquals(12, $result);
  }
}