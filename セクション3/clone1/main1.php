<?php declare(strict_types=1); ?>
<body>
  <?php 
    class Task
    {
      public $name;
    }

    function changeTask(Task $task):void
    {
      $task->name = '散歩';
    }

    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task2 = $task1;
    $task2->name = '買い物';

    echo $task1->name;

    changeTask($task2);

    echo $task1->name;
    echo $task2->name
  ?>
</body>