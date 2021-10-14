<?php 
declare(strict_types=1);

function connect():PDO
{
  $pdo = new PDO('mysql:host=localhost; dbname=honkaku;charset=utf8mb4', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  return $pdo;
}
?>
<body>
  <?php 
  try{
    $pdo = connect();
    $statement = $pdo->prepare('INSERT INTO books(created, title, price) VALUES(CURRENT_TIMESTAMP, :title, :price)');
    $statement->bindValue(':title', '楽しいバドミントン', PDO::PARAM_STR);
    $statement->bindValue(':price', 820, PDO::PARAM_INT);
    $statement->execute();
    $newId = $pdo->lastInsertId();
    echo '新しい本を登録しました。新しいレコードのIDは',$newId,'です。';
  }catch(PDOException $e){
    echo '新しい本の登録に失敗しました';
  }
  
  ?>
</body>