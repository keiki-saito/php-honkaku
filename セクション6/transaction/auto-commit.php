<?php 
declare(strict_types=1);

// オールコミットOFFでデータベースに接続する関数
function connect():PDO
{
  $pdo = new PDO('mysql:host=localhost; dbname=honkaku; charset=utf8mb4', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
  return $pdo;
}

try{
  $pdo = connect();
}catch(PDOException $e){
  echo '接続に失敗しました';
  return;
}
?>
<body>
 <?php 
 try{
   $pdo->exec("INSERT INTO books(created, title) VALUES(CURRENT_TIMESTAMP, 'ブランド牛図鑑1巻')");
   $pdo->exec("INSERT INTO books(created, title) VALUES(CURRENT_TIMESTAMP, 'ブランド牛図鑑2巻')");
   echo '本の登録に成功しました。';
 }catch(Exception $e){
   echo '例外が発生しました';
 }
 ?>
</body>