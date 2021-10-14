<?php declare(strict_types=1); ?>
<body>
  <?php 
  // タイムゾーンはAsia/Tokyoにする。
  date_default_timezone_set('Asia/Tokyo');

  echo '現在の時刻：', date('Y-m-d H:i:s'),PHP_EOL;
  
  // 日時指定でインスタンスを作る
  $dateTime = new DateTime('2021-08-08 18:52:56');
  echo $dateTime->format('Y.m.d H:i:s'),PHP_EOL; // 2021.08.08 18:52:56

  // 現在日時を元にしたインスタンスを作る
  $dateTime = new DateTime();
  echo $dateTime->format('Y.m.d H:i:s'),PHP_EOL; // <現在年月日><現在時分秒>

  // 現在日時の3時間後にインスタンスを作る
  $dateTime = new DateTime('+3 hours');
  echo $dateTime->format('Y.m.d H:i:s'),PHP_EOL; // <3時間後年月日><3時間後時分秒>

  // 現在日時でインスタンスを作った後、年月日のみを上書きする
  $dateTime = new DateTime();
  $dateTime->setDate(2021, 12, 25);
  echo $dateTime->format('Y.m.d H:i:s'),PHP_EOL; // 2021.12.25 <現在時分秒>
  
  // 現在日時でインスタンスを作った後、年月日と時分秒を上書きする指定する
  $dateTime = new DateTime();
  $dateTime->setDate(2021, 12, 25)->setTime(19,25,34);
  echo $dateTime->format('Y.m.d H:i:s'),PHP_EOL; // 2021.12.25 19:25:34

  // 2021-12-25 19:25:34のインスタンスを作った後、5日+12時間未来にすすめる
  echo (new DateTime('2021-12-25 19:25:34'))
        ->modify('+5 days')
        ->modify('+12 hours')
        ->format('Y.m.d H:i:s'),PHP_EOL;
  
  // 2021-12-25 19:25:34のインスタンスを作った後、次の土曜日まですすめ、時刻を00:00:00にする
  echo (new DateTime('2021-12-25 19:25:34'))
        ->modify('Next Saturday')
        ->setTime(0,0,0)
        ->format('Y:m:d H:i:s'),PHP_EOL;
  
  // 2021-12-25 19:25:34のインスタンスを作った後、タイムゾーンをUTCに変更して出力する
  $dateTime = new DateTime('2021-12-25 19:25:34');
  $dateTime->setTimezone(new DateTimeZone('UTC'));
  echo $dateTime->format('Y.m.d H:i:s'),PHP_EOL;
  ?>
</body>