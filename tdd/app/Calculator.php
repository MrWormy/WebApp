<?php
  /**
  * to make simple operations
  */
  class Calculator
  {
    /**
    * add 2 numbers
    */
    public function add($number1, $number2)
    {
      if(!is_numeric($number1) || !is_numeric($number2)){
        return false;
      }

      return $number1 + $number2;
    }

    /**
    * subtract 2 numbers
    */
    public function subtract($number1, $number2)
    {
      if(!is_numeric($number1) || !is_numeric($number2)){
        return false;
      }

      return $number1 - $number2;
    }

    /**
    * multiply 2 numbers
    */
    public function multiply($number1, $number2)
    {
      if(!is_numeric($number1) || !is_numeric($number2)){
        return false;
      }

      return $number1 * $number2;
    }

    /**
    * divide 2 numbers
    */
    public function divide($number1, $number2)
    {
      if(!is_numeric($number1) || !is_numeric($number2) || $number2 == 0){
        return false;
      }

      return $number1 / $number2;
    }
  }
?>
