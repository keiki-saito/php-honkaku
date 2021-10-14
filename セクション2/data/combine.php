<body>
  <?php 
    $value = 'World';

    // 文字列演算子(.)による値と変数の連結
    $combined1 = 'Hello'.$value . '!';
    
    // 変数の展開
    $combined2 = "Hello {$value}!";

    // 代入演算子(=)と文字列演算心の組み合わせ。
    $combined3 = 'Hello';
    $combined3 .= $value;
    $combined3 .= '!';

    // シングルクオート内で変数は展開されない
    $combined4 = 'Hello {$value}';
  
  ?>

  <p><?=$combined1?></p>
  <p><?=$combined2?></p>
  <p><?=$combined3?></p>
  <p><?=$combined4?></p>
</body>