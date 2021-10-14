<?php declare(strict_types=1);

use Task as GlobalTask;

?>
<body>
  <?php 
    class Task
    {
      public $name;
    }

    function changeTask(Task $task)
    {
      $task->name = '散歩';
    }

    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task2 = clone $task1;
    $task2->name = '買い物';
    
    echo $task1->name;

    changeTask($task2);

    echo $task1->name;

    echo $task2->name;
  ?>
</body>