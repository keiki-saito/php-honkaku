<?php declare(strict_types=1); ?>
<body>
  <?php 
  class SuperClass
  {
    protected $data1;
    public function testFunction():void
    {
      echo '親クラスのメソッドが呼ばれました<br>';
    }


  }

  class SubClass extends SuperClass
  {
    // オーバーライド
    public function testFunction(): void
    {
      echo '子クラスのメソッドが呼ばれました<br>';
      parent::testFunction();
    }
  }

  $subClass = new SubClass();
  $subClass->testFunction();
  ?>
</body>