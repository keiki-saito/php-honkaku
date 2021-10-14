<?php declare(strict_types=1); ?>
<body>
  <?php 
    $matched = [];

    echo '住所から郵便番号を見つける', PHP_EOL;

    $address = '123-4567 東京都豊島区...';
    preg_match('/[0-9]{3}-[0-9]{4}/u', $address, $matched, PREG_OFFSET_CAPTURE);
    print_r($matched);

    echo '文字列から16進数表記のカラーコードを見つける',PHP_EOL;
    $string = 'darkviolet - 濃いすみれ色 - #9400d3a';
    preg_match('/#[0-9a-f]{6}/ui',$string, $matched, PREG_OFFSET_CAPTURE);
    print_r($matched);

    echo '半角数字及びハイフンのみかを入力チェックする',PHP_EOL;
    $input = '03-９９９９-0000';
    if(preg_match('/^[0-9\-]+$/',$input)){
      echo '入力に問題ありません',PHP_EOL;
    }else{
      echo '半角数字とハイフンのみで入力してください',PHP_EOL;
    }

    echo '半角英数字のみかをチェックする。',PHP_EOL;
    $input = 'Hello123';
    if(preg_match('/^[a-zA-Z0-9]+$/u',$input)){
      echo '入力に問題ありません.',PHP_EOL;
    }else{
      echo '半角英数字のみかで入力してください';
    }

    echo '半角英数字のみかを入力チェックする(i修飾子)',PHP_EOL;
    $input = 'Hello123';
    if(preg_match('/^[a-z0-9]+$/ui',$input)){
      echo '入力に問題ありません.',PHP_EOL;
    }else{
      echo '半角英数字のみかで入力してください';
    }
  ?>
</body>