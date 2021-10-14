<body>
  <?php 
    // 整数型
    $integerValue = 10;

    // 小数(浮動小数点)
    $floatValue = 12.34;

    // 文字列型(シングルクオート)
    $stringValue1 = '文字列1';

    // 文字列型(ダブルクオート)
    $stringValue2 = '文字列2';

    // 真偽値型
    $boolValue = true;

    // null
    $nullValue = null;

    // 空文字
    $emptyValue = '';
  ?>

  <p>整数:<?php echo $integerValue?></p>
  <p>浮動小数点数:<?= $floatValue?></p>
  <p>文字列1:<?=$stringValue1?></p>
  <p>文字列2:<?=$stringValue2?></p>
  <p>真偽値:<?php var_dump($boolValue)?></p>
  <p>null:<?php var_dump($nullValue)?></p>
  <p>文字列3:<?php var_dump($emptyValue)?></p>
</body>