<body>
  <?php 
    define('BIT_RED', 1 << 0); //赤ボタンの定義は「0001」
    define('BIT_BLUE', 1 << 1); //赤ボタンの定義は「0010」
    define('BIT_YELLOW', 1 << 2); //赤ボタンの定義は「0100」
    define('BIT_GREEN', 1 << 3); //赤ボタンの定義は「1000」

    $colors = 0; //初期値では全てのボタンがOFF
    // 現在では青と黄がONであると仮定したビット値を変数$colorsに入れる
    // $colorsは「0110」というビット列になる
    $colors = BIT_BLUE | BIT_YELLOW;

    // ボタンの色ごとのON・OFFを判定し、結果を連想配列に保存する
    $statuses = [
      'red' => ($colors & BIT_RED) > 0, // 0110と0001の論理積
      'blue' => ($colors & BIT_BLUE) > 0, // 0110と0010の論理積
      'yellow' => ($colors & BIT_YELLOW) > 0, // 0110と0100の論理積
      'green' => ($colors & BIT_GREEN) > 0, // 0110と1000の論理積
    ];
  ?>
  <p>赤のボタンはONですか?<?php var_dump($statuses['red'])?></p>
  <p>青のボタンはONですか?<?php var_dump($statuses['blue'])?></p>
  <p>黄のボタンはONですか?<?php var_dump($statuses['yellow'])?></p>
  <p>緑のボタンはONですか?<?php var_dump($statuses['green'])?></p>
</body>