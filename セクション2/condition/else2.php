<body>
  <?php 
    $point = 20;
    if($point >= 80){
      $message = 'ハイスコアです。';
    }elseif($point >= 50){
      $message = 'ミドルスコアです。';
    }else{
      $message = '通常スコアです。';
    }
  ?>
  <p>メッセージ：<?=$message?></p>
</body>