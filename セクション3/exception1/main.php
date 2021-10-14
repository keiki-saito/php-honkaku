<?php declare(strict_types=1); ?>
<body>
  <?php 
    require_once dirname(__FILE__) . '/TaxCalculator.php';
    $calculator = new TaxCalculator();
    try{
      $priceWithTax = $calculator->calculate(100, -0.08);
      echo 'Price:', $priceWithTax, '円';
    }catch(Exception $e){
      echo '税込金額が計算できませんでした。理由:', $e->getMessage();
    }finally{
      $calculator->reset();
    }

    echo 'プログラム処理を終了します';
  ?>
</body>