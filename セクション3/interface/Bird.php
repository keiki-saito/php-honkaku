<?php 
declare(strict_types=1);

require_once dirname(__FILE__). '/Flyable.php';
require_once dirname(__FILE__). '/Walkable.php';

// 鳥クラス
class Bird implements Flyable, Walkable
{
  // 飛ぶメソッド
  public function fly():void
  {
    echo 'Bird is flying...';
  }

  // 歩くメソッド
  public function walk(): void
  {
    echo 'Bird is walking...';
  }
}
?>