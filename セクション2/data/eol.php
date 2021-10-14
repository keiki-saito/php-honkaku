<body>
  <?php 
    $mailBody = "お問い合わせを受け付けました".PHP_EOL;
    $mailBody .= "お問い合わせ内容：".PHP_EOL;
    $mailBody .= "\t商品番号「abc123」について、サイズを教えて下さい";
  ?>
  <p><pre><?=$mailBody?></pre></p>
</body>