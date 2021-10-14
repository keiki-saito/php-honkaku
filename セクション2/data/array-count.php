<body>
  <?php 
    // 配列の要素数を得る
    $chars = ['a', 'b', 'c'];
    echo count($chars),PHP_EOL;

    // 連想配列の要素数を得る
    $chars = [
      'a' => 'あ',
      'i' => 'い',
      'u' => 'う',
      'e' => 'え',
      'o' => 'お'
    ];

    echo count($chars),PHP_EOL;
  ?>
</body>