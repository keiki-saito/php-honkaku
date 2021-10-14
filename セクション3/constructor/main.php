<?php declare(strict_types=1); ?>
<body>
  <?php 
    require_once dirname(__FILE__).'/Task.php';
    $task = new Task('パスポートの更新');
    echo $task->name,'<br>';
    echo $task->priority,'<br>';
    echo $task->progress,'<br>';
  ?>
</body>