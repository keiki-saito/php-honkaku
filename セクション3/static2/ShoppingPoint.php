<?php 
  declare(strict_types=1);
  // ショッピングポイントクラス

  class ShoppingPoint
  {
    // 現在のトータルポイント
    public static $point;

    public static function countUpPoint()
    {
      self::$point++;
    }
  }

?>