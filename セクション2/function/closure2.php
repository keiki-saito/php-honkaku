<?php

declare(strict_types=1) ?>

<body>
  <?php
  $greeting = 'Good';

  // クロージャーの定義。useを使って$greetingを引き継がせます
  $greetingMaker = function ($time) use ($greeting) {
    print $greeting . ' ' . $time . '<br>';
  };
  // 出力結果は「Good Morning」
  $greetingMaker('Morning');

  $greeting = 'Beautiful';
  $greetingMaker('Evening');

  ?>
</body>