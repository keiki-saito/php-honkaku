<?php declare(strict_types=1); ?>
<body>
  <?php 
    require_once dirname(__FILE__). '/DigitalClock.php';
    require_once dirname(__FILE__). '/AnalogClock.php';
    require_once dirname(__FILE__). '/Canvas.php';

    $canvas = new Canvas();
    $currentTime = strtotime('2021-10-07 21:00');
    $digitalClock = new DigitalClock();
    $digitalClock->setTime($currentTime);
    $canvas->drawClock($digitalClock);
    echo $digitalClock->getColor(), '<br>';

    $analogClock = new AnalogClock();
    $analogClock->setTime($currentTime);
    $canvas->drawClock($analogClock);
  ?>
</body>