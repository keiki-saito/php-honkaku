<body>
  <?php 
    $point = 20;
    if($point >= 80){
      $message = 'ハイスコアです。';
    }else{
      $message = '通常スコアです。';
    }
  ?>
  <p>メッセージ：<?=$message?></p>
</body>