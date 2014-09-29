<?php
  /**
  * example of a test case Class - Calculator example
  */

  class CalculatorTestsWithNonNumericValues extends UnitTestCase{
    private $calculator;

    public function setUp(){
      require_once('../app/Calculator.php');
      $this->calculator = new Calculator();
    }

    public function tearDown(){
      $this->calculator = NULL;
    }

    /**
    * Test to add two non numbers
    */
    public function testAdd () {
      $equals = $this->calculator->add(NULL,2);
      $this->assertFalse($equals);

      $equals = $this->calculator->add("23", "1");
      $this->assertEqual(24, $equals);

      $equals = $this->calculator->add("bonjour", "test");
      $this->assertFalse($equals);

      $a = array();
      $equals = $this->calculator->add($a, 2);
      $this->assertFalse($equals);
    }

    /**
    * Test to subtract two non numbers
    */
    public function testSubtract () {
      $equals = $this->calculator->subtract(NULL,2);
      $this->assertFalse($equals);

      $equals = $this->calculator->subtract("23", "1");
      $this->assertEqual(22, $equals);

      $equals = $this->calculator->subtract("bonjour", "test");
      $this->assertFalse($equals);

      $a = array();
      $equals = $this->calculator->subtract($a, 2);
      $this->assertFalse($equals);
    }

    /**
    * Test to multiply two non numbers
    */
    public function testMultiply () {
      $equals = $this->calculator->multiply(NULL,2);
      $this->assertFalse($equals);

      $equals = $this->calculator->multiply("23", "1");
      $this->assertEqual(23, $equals);

      $equals = $this->calculator->multiply("bonjour", "test");
      $this->assertFalse($equals);

      $a = array();
      $equals = $this->calculator->multiply($a, 2);
      $this->assertFalse($equals);
    }

    /**
    * Test to divide two non numbers
    */
    public function testDivide () {
      $equals = $this->calculator->divide(NULL,2);
      $this->assertFalse($equals);

      $equals = $this->calculator->divide("23", "1");
      $this->assertEqual(23, $equals);

      $equals = $this->calculator->divide("23", "0");
      $this->assertFalse($equals);

      $equals = $this->calculator->divide("bonjour", "test");
      $this->assertFalse($equals);

      $a = array();
      $equals = $this->calculator->divide($a, 2);
      $this->assertFalse($equals);
    }
  }
?>
