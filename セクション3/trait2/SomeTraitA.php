<?php 
declare(strict_types=1);

trait SomeTraitA
{
  private $traitProperty;

  public function traitMethod($arg1, $arg2)
  {
    $this->traitProperty = 'A';
  }
}
