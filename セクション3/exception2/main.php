<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>例外処理</title>
  </head>
  <body>
    <pre>
      <?php 
        require_once dirname(__FILE__). '/ClassA.php';
        try{
          $classA = new ClassA();
          $classA->methodA();
        }catch(Exception $e){
          echo 'メインルーチンで例外をキャッチ。エラー内容:',$e->getMessage(),PHP_EOL;
          echo '例外のトレース情報は以下の通りです：',PHP_EOL;
          print_r($e->getTrace());
        }
        echo 'メインルーチンを終了します';
      ?>
    </pre>
  </body>
</html>