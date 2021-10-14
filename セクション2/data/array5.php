<body>
  <?php 
    $userData = [12345, 'Tarou Yamada', 'Tokyo', 32];
    list($id,$name, $prefecture, $age) = $userData;
  ?>
  <p>ユーザーID：<?=$id?></p>
  <p>名前：<?=$name?></p>
  <p>都道府県：<?=$prefecture?></p>
  <p>年齢：<?=$age?></p>
</body>