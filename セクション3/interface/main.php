<?php declare(strict_types=1);?>
<body>
  <?php 
    require_once dirname(__FILE__). '/Bird.php';
    require_once dirname(__FILE__). '/Airplane.php';
    require_once dirname(__FILE__). '/Sky.php';
    // 空を用意する
    $sky = new Sky();

    $bird = new Bird();
    $sky->draw($bird);

    $airplane = new Airplane();
    $sky->draw($airplane);
    

  ?>
</body>