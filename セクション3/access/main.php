<body>
  <?php 
    class SomeClass
    {
      public $propertyA;
      private $propertyB;

      public function methodA():void
      {
        echo 'methodA called<br>';
        $this->methodB(); // 自クラス内からであればアクセス可能
      }

      private function methodB():void
      {
        echo 'methodB called<br>';
      }
    }
    $someInstance = new SomeClass();

    $someInstance->propertyA = 'A';  // publicなのでアクセス可能
    $someInstance->methodA(); // publicなのでアクセス可能

    $someInstance->propertyB = 'B'; // privateなのでエラーになる
    $someInstance->methodB(); // privateなのでエラーになる
    


  ?>
</body>