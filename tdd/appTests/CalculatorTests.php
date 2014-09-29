<?php
  /**
  * example of a test case Class - Calculator example
  */

  class CalculatorTests extends UnitTestCase{
    private $calculator;

    public function setUp(){
      require_once('../app/Calculator.php');
      $this->calculator = new Calculator();
    }

    public function tearDown(){
      $this->calculator = NULL;
    }

    /**
    * Test to add two numbers
    */
    public function testAdd () {
      $equals = $this->calculator->add(1,2);
      $this->assertEqual(3, $equals);

      $equals = $this->calculator->add(100,-1);
      $this->assertEqual(99, $equals);

      $equals = $this->calculator->add(-2,-5);
      $this->assertEqual(-7, $equals);
    }

    /**
    * Test to subtract two numbers
    */
    public function testSubtract () {
      $equals = $this->calculator->subtract(1,2);
      $this->assertEqual(-1, $equals);

      $equals = $this->calculator->subtract(100,-1);
      $this->assertEqual(101, $equals);

      $equals = $this->calculator->subtract(-2,-5);
      $this->assertEqual(3, $equals);
    }

    /**
    * Test to multiply two numbers
    */
    public function testMultiply () {
      $equals = $this->calculator->multiply(1,2);
      $this->assertEqual(2, $equals);

      $equals = $this->calculator->multiply(100,-1);
      $this->assertEqual(-100, $equals);

      $equals = $this->calculator->multiply(-2,-5);
      $this->assertEqual(10, $equals);

      $equals = $this->calculator->multiply(0,10);
      $this->assertEqual(0, $equals);
    }

    /**
    * Test to divide two numbers
    */
    public function testDivide () {
      $equals = $this->calculator->divide(1,2);
      $this->assertEqual(0.5, $equals);

      $equals = $this->calculator->divide(100,-1);
      $this->assertEqual(-100, $equals);

      $equals = $this->calculator->divide(-2,-5);
      $this->assertEqual(0.4, $equals);

      $equals = $this->calculator->divide(0,10);
      $this->assertEqual(0, $equals);

      $equals = $this->calculator->divide(10,0);
      $this->assertFalse($equals);
    }
  }
?>
