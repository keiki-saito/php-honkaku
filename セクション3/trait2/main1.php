<?php declare(strict_types=1);

use SomeClass as GlobalSomeClass;

?>
<body>
  <?php 
    require_once dirname(__FILE__) . '/SomeTraitA.php';
    require_once dirname(__FILE__) . '/SomeTraitB.php';

    class SomeClass
    {
      use SomeTraitA, SomeTraitB{
        SomeTraitB::traitMethod insteadof SomeTraitA; // traitMethodメソッドを使うときはSomeTraitBを選ぶ
        SomeTraitA::traitMethod as setA; // SomeTraitAのtraitMethodを使うときはsetAという名前で使う
      }

      public function setTraitProperty()
      {
        $this->traitMethod(null, null);
        echo $this->traitProperty, PHP_EOL;
        $this->setA(null,null);
        echo $this->traitProperty, PHP_EOL;
      }
    }

    $someClass = new SomeClass();
    $someClass->setTraitProperty();
  ?>
</body>