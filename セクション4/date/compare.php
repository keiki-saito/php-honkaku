<?php declare(strict_types=1); ?>
<body>
  <?php 
    $data1 = new DateTime('2019-02-25 09:23:00');
    $data2 = new DateTime('2019-02-25 17:12:34');

    var_dump($data1 == $data2); //false
    var_dump($data1 > $data2); //false
    var_dump($data1 >= $data2); //false
    var_dump($data1 < $data2); //true
    var_dump($data1 <= $data2); //true
  ?>
</body>