<?php

// メソッド名直後丸括弧の前にスペースを入れない(MUST NOT)
// 開き丸括弧の直後、閉じ丸括弧の直前にスペースを入れない(MUST NOT)
// 引数を区切るカンマの前にスペースを入れない(MUST NOT)
// 引数を区切るカンマの後にスペースを１つ入れる
$sampleClass = new SampleClass();
$sampleClass->doSomething1($argument1, $argument2);

// 引数ごとに改行入れてもよい(MAY)
// 引数ごとに行を分けるときは、第1引数を別行とし、(MUST)、その後も1行ずつ分けて列挙する(MUST)
$sampleClass->doSomething1(
  $argument1,
  $argument2
);

// staticメソッドをコールするときも同じルール
StaticClass::SomeFunction($argument1, $argument2);

// 関数をコールするときも同じルール
someFunction($argument1, $argument2);



