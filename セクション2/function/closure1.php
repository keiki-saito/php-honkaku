<?php declare(strict_types=1); ?>
<body>
  <?php 
    $addFunction = function($a, $b){
      return $a + $b;
    };
    $total = $addFunction(10, 20);
  ?>
  <p>計算結果<?=$total;?></p>
</body>