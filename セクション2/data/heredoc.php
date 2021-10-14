<body>
  <?php 
    $itemNumber = 'abc123';

    // ヒアドキュメント
    $mailBody = <<< MAIL
    お問い合わせを受け付けました。
    
    お問い合わせ内容：
      商品番号「{$itemNumber}」について、"サイズ"と'色の種類'を教えて下さい。
    MAIL;
  ?>
  <p><pre><?=$mailBody?></pre></p>
</body>