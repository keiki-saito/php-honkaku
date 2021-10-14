<?php declare(strict_types=1);


?>
<body>
  <?php 
    class Task
    {
      public $name;

      private $extras = [];

      public function __set($name, $value)
      {
        $this->extras[$name] = $value;
      }

      public function __get($name)
      {
        return $this->extras[$name];
      }
    }

    $task = new Task();
    $task->name = '飛行機のチケット購入';
    $task->placeFrom = '羽田';
    $task->placeTo = '福岡';

    echo 'タスク名:',$task->name, PHP_EOL;
    echo '出発:',$task->placeFrom, PHP_EOL;
    echo '到着:',$task->placeTo, PHP_EOL;
  ?>
</body>