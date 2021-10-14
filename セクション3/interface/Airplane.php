<?php 
  declare(strict_types=1);
  require_once dirname(__FILE__) . '/Flyable.php';

  class Airplane implements Flyable
  {
    public function fly():void
    {
      echo 'Airplane is flying...';
    }
  }
?>