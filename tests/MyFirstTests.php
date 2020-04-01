<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MyFirstTests extends TestCase {

  public function testFirst() : void {
    $this->assertTrue(true);
  }

  public function testSecond() : void {
    $this->assertIsArray([], "El valor de salida debe ser un array!");
  }

  public function testThird() : void {
    $this->assertStringStartsWith("A", "Andres");
  }

  public function testFour() : void {
    $array = [
      "data" => []
    ];
    $this->assertArrayHasKey("data", $array);
  }

}