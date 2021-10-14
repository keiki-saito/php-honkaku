<?php 
declare(strict_types=1);


class ClassB
{
  public function methodB():void
  {
    throw new Exception('methodBでエラーが発生');
    echo 'methodB completed';
  }
}
