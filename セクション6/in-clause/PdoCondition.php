<?php 
declare(strict_types=1);

class PdoCondition
{
  /**
   * プレースホルダー名
   */
  private $name;

  /**
   * プレースホルダー値
   */

   private $value;

  /**
   * プレースホルダーの型
   */
  private $type;

  /**
   * コンストラクタ
   */

   public function __construct(string $name, $value, $type=PDO::PARAM_STR)
   {
     $this->name = $name;
     $this->value = $value;
     $this->type = $type;
   }

  /**
   * プレースホルダー名を取得する
   */

   public function getName():string
   {
     return $this->name;
   }

  /**
   * プレースホルダー値を取得する
   */
  
   public function getValue()
   {
     return $this->value;
   }


  /**
   * プレースホルダーの型を取得する
   */
  public function getType():int
  {
    return $this->type;
  }

}

?>