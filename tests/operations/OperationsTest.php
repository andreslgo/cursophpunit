<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class OperationsTest extends TestCase {

  private $_expected = [
    2 => 2,
    3 => 6,
    4 => 24,
    5 => 120,
    6 => 720
  ];

  protected static $db;

  public static function setUpBeforeClass() : void {
    self::$db = "Conectado";
  }

  public static function tearDownAfterClass() : void {
    self::$db = "";
    echo self::$db . "!";
  }

  public function testFactorialNumber() : void {
    echo self::$db;
    $operation = new Operations();
    foreach($this->_expected as $number => $expected){
      $factorial = $operation->factorial($number);
      $this->assertIsInt($factorial);
      $this->assertEquals($expected, $factorial, "El factorial de $number debe ser $expected y no $factorial!");
    }
  }

  public function testOne() : void {
    $this->assertTrue(true);
  }

  public function testTwo() : void {
    $this->assertTrue(true);
  }


}