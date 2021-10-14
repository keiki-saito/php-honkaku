<?php 
declare(strict_types=1);

require_once dirname(__FILE__) . '/Task.php';

class TaskSheet
{
  // タスクの配列
  public $tasks = [];

  // タスクを追加するメソッド
  public function addTask($task):void
  {
    if($task instanceof Task){
      $this->tasks[] = $task;
    }else{
      throw new Exception('Task型のインスタンスしか追加できません。');
    }
    echo $task->name ,'を追加しました.';
  }

  // タスク名を表示するメソッド
  public function show():void
  {
    echo $task->name; 
  }
}

?>