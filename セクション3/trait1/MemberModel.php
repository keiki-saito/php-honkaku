<?php 
declare(strict_types=1);

require_once dirname(__FILE__) . '/LoggingTrait.php';

// 会員クラス
class MemberModel
{
  // useキーワードを使い、トレイトのプロパティ・メソッドを自身に差し込む
  use LoggingTrait;

  // コンストラクタ
  public function __construct()
  {
    
  }

  // 会員データを新規作成する
  public function create(string $memberId):void
  {
    $this->log("created {$memberId}.".PHP_EOL);
  }

  // 会員データを削除する
  public function delete(string $memberId):void
  {
    $this->log("deleted {$memberId}.".PHP_EOL);
  }
}
