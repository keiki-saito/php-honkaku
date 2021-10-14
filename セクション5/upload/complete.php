<?php 
declare(strict_types=1);

// ファイルを元に拡張子を返す関数
function getExtension(string $file):string
{
  return pathinfo($file, PATHINFO_EXTENSION);
}

// アップロードファイルの妥当性をチェックする関数
function validate():array
{
  // PHPによるエラーを確認する
  if($_FILES['image1']['error'] !== UPLOAD_ERR_OK){
    return [false, 'アップロードエラーを検出しました'];
  }

  // ファイル名から拡張子をチェックする
  if(!in_array(getExtension($_FILES['image1']['name']) , ['jpg','jpeg', 'png', 'gif'])){
    return [false, '画像ファイルのみアップロード可能です。'];
  }

  // ファイルの中身を見てMIMEタイプをチェックする
  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  $mimeType = finfo_file($finfo, $_FILES['image1']['tmp_name']);
  finfo_close($finfo);
  if(!in_array($mimeType, ['image/jpeg','image/png', 'image/gif'])){
    return [false, '不正な画像形式です'];
  }

  // ファイルサイズをチェックする
  if(filesize($_FILES['image1']['tmp_name']) > 1024 * 1024 * 2){
    return [false, 'ファイルサイズは2Mbまでとしてください'];
  }

  return [true, null];
}

// アップロード後の保存ファイル名を生成して返す関数
function generateDestinationPath():string
{
  return 'uploaded/'.date('Ymd-His-'). rand(10000,9999). '.'. getExtension($_FILES['image1']['name']);
}

// HTMLエンティティに変換する処理
function escape(string $value):string
{
  return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

// メインルーチン
list($result, $message) = validate();
if($result !== true){
  echo '[Error]'.$message;
  return;
}

$destinationPath = generateDestinationPath();
$moved = move_uploaded_file($_FILES['image1']['tmp_name'], $destinationPath);
if($moved !== true){
  echo 'アップロードファイル処理中にエラーが発生しました';
  return;
}
?>

<body>
  <p>アップロードに成功しました。保存された画像は以下です。</p>
  <img src="<?=$destinationPath?>" style="width: 300px;"><br>
  (保存ファイル名:<?=escape($destinationPath)?>)<br>
  (元のファイル名:<?=escape($_FILES['image1']['name'])?>)
</body>