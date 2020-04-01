<?php

declare(strict_types=1);

class Operations {

  public function factorial(int $number) : int {
    $result = 1;
    for($i = $number; $i > 1; $i--){
      $result *= $i;
    }
    return $result;
  }

}