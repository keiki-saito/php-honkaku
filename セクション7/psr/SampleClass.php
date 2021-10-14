<?php 
// ・class,extends,implementsキーワードは同じ行に書く(MUST)
// ・ クラスの開始の波括弧は独立した行に書く(MUST
// ・クラスの開始の波括弧の前後に空行があってはならない(MUST NOT)
class SampleClass extends ParentClass implements SomeInterface
{
  // ・プロパティのアクセス修飾子は必ずつける(MUST)
  // ・1行で2つ以上のプロパティを定義してはならない(MUST NOT)
  public $publicProperty = null;

  // ・publicでないことを示すために1文字目にアンダースコアを使わない(MUST NOT)
  // つまり $_privatePropertyではなく$privatePropertyとする
  private $privateProperty = null;

  // ・staticをつけるときはアクセス修飾子の後に書く(MUST)
  protected static $staticProperty;

  // ・メソッドのアクセス修飾子は必ずつける(MUST)
  // ・メソッド名の直後にスペーズを入れない(MUST NOT)
  // ・引数を表す丸括弧が開いた直後、閉じる直前にスペースを入れない(MUST NOT)
  // ・引数を列挙する時のカンマの前にスペースを入れない(MUST NOT)
  // ・引数を列挙するときのカンマの後にスペースを1つ入れる(MUST
  public function doSomething1(string $arg1, int $arg2)
  { // 開始の波括弧は行を分ける(MUST)
    // 処理
  } // 終了の波括弧も行を分ける(MUST)

  // ・引数のnullを許可するクエスチョン記号とデータ型の間にスペースを入れない(MUST NOT)
  // ・引数の参照渡しを表すアンパサンド記号と引数名を間にスペースを入れない(MUST NOT)
  // ・デフォルト値を持つ引数は最後に書く(MUST)
  public function doSomething2(?string &$arg1, int $arg2 = null)
  {
    // 処理
  }

  // ・publicでないことを示すために1文字目にアンダースコアを使わない(MUST NOT)
  // つまり、_doPrivateSomething()ではなくdoPrivateSomething()とする
  private function doPrivateSomething(int $arg)
  {
    // 処理
  }

  //・引数ごとに行を分けても良い(MAY)
  // ・引数ごとに行を分けるときは、第一引数を別行とし、(MUST)その後も1行ずつ分けて列挙する(MUST)
  public function methodWithManyArguments(
    string $stringArgument,
    int $intArgument,
    callable $callableFunction
  ){ //引数ごとに行を分けたときは独立した行に「){」を続けて書く(MUST)
    // 処理
  }

  // ・戻り値の型指定について
  // ・コロンの前はスペースなしとする(MUST
  // ・コロンの後はスペースを1つ入れる(MUST)
  // ・コロンと型名は、閉じる丸括弧と同じ行に書く(MUST)
  public function getSomething1(int $arg): string
  {
    // 処理
    return 'return';
  }

  // 行を分けて引数を書くときの、戻り値の型指定の書き方
  public function getSomething2(
    int $arg1,
    int $arg2,
    int $arg3
  ): string {
    // 処理
    return '戻り値';
  }

  // ・abstractをつけるときはアクセス修飾子の前に書く(MUST)
  abstract protected function abstractMethod();

  // ・finalをつけるときはアクセス修飾子の前に書く(MUST)
  // ・staticをつけるときはアクセス修飾子の後に書く(MUST)
  final public static function finalMethod()
  {
    // 処理
  }

}
// PHPのみのプログラムのときはPHP閉じタグを書かない
// 最終行は空行とする(MUST)
