<body>
  <?php 
    // ✗あいまいな空欄チェック。文字列型「0」が空文字と認識されてしまう
    $value = '0';
    if(!$value){
      echo '変数は空です'.PHP_EOL; // このブロックに入る
    }else{
      echo '変数は空ではありません。'.PHP_EOL;
    }
  ?>

  <?php 
    // ✗あいまいな空欄チェック。数値「0」は空文字と同じ扱いとなる
    $value = 0;
    if(!$value){
      echo '変数は空です。'.PHP_EOL; // このブロックに入る
    }else{
      echo '変数は空ではありません。'.PHP_EOL;
    }
  ?>

  <?php 
   // ✗あいまいな空欄チェック。文字列「0」は空文字と誤認識される
    $value = '0';
    if(empty($value)){
      echo '変数は空です。'.PHP_EOL;
    }else{
      echo '変数は空ではありません。'.PHP_EOL;
    }
  ?>

  <?php 
    /* △ 空文字は判定できるが、nullは判定できないケース
      プログラマーの意図によってはこれで良い場合もある */
      $value = null;
      if($value === ''){
        echo '変数は空です。',PHP_EOL;
      }else{
        echo '変数は空ではありません。', PHP_EOL; // このブロックに入る
      }
  ?>

  <?php 
    /* △ null判定はできるが、空文字は判定できないケース。
    プログラマーの意図によってはこれで良い場合もある */
    $value = '';
    if(is_null($value)){
      echo '変数は空です。';
    }else{
      echo '変数は空ではありません。', PHP_EOL; // このブロックに入る
    }
  ?>

  <?php 
    // ○空文字もNULLも正しく判断できる空欄チェック。
    $value = null;
    if(is_null($value) || $value === ''){
      echo '変数は空です。', PHP_EOL;// このブロックに入る
    }else{
        echo '変数は空ではありません。', PHP_EOL;
    }
  ?>

  <?php 
    // ○空文字もNULLも正しく判断できる空欄チェック。
    $value = '';
    if(is_null($value) || $value === ''){
      echo '変数は空です。', PHP_EOL;// このブロックに入る
    }else{
        echo '変数は空ではありません。', PHP_EOL;
    }
  ?>

  <?php 
    // ○空文字もNULLも正しく判断できる空欄チェック。
    $value = 0;
    if(is_null($value) || $value === ''){
      echo '変数は空です。', PHP_EOL;
    }else{
        echo '変数は空ではありません。', PHP_EOL; // このブロックに入る
    }
  ?>


</body>