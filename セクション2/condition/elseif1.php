<body>
  <?php 
    $point = 55;
    $message = '通常スコアです';
    if($point>=80){
      $message = 'ハイスコアです';
    }elseif($point>=50){
      $message = 'ミドルスコアです';
    }
  ?>
  <p>メッセージ：<?=$message?></p>
</body>