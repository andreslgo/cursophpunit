<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class OperationsTests extends TestCase {

  private $_expected = [
    2 => 2,
    3 => 6,
    4 => 24,
    5 => 120,
    6 => 720
  ];

  public function testFactorialNumber() : void {
    $operation = new Operations();
    foreach($this->_expected as $number => $expected){
      $factorial = $operation->factorial($number);
      $this->assertIsInt($factorial);
      $this->assertEquals($expected, $factorial, "El factorial de $number debe ser $expected y no $factorial!");
    }
  }


}