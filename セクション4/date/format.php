<?php declare(strict_types=1);?>
<body>
  <?php 
  // タイムゾーンをAsia/Tokyoにする
  date_default_timezone_set('Asia/Tokyo');

  $date = new DateTime('2021-08-08 17:28:38');

  // フォーマット文字列を指定する例
  echo $date->format('Y.m.d H:i:s'), PHP_EOL; // 2021.08.08 17:28:38
  echo $date->format('Y/m/d H:i'), PHP_EOL; // 2021/08/08 17:28
  echo $date->format('Y年m月d日 H時i分'), PHP_EOL; // 2021年08月08日 17時28分
  echo $date->format('Y.m.t'), PHP_EOL; // 2021.08.31
  echo $date->format('U'), PHP_EOL; // 1628411318


  // DataTimeにあらかじめ用意された定数を使う例
  echo $date->format(DateTime::ATOM), PHP_EOL; // 2021-08-08T17:28:38+09:00
  echo $date->format(DateTime::COOKIE), PHP_EOL; // Sunday, 08-Aug-2021 17:28:38 JST

  // 協定世界時(UTC)にタイムゾーンを変更する(UTCはAsia/Tokyoより9時間早い)
  $date->setTimezone(new DateTimeZone('UTC'));
  echo $date->format('Y.m.d H:i:s'), PHP_EOL; // 2021.08.08 08:28:38
  ?>
</body>