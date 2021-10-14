<?php 
// 確認画面
declare(strict_types=1);
session_start();
?>
<body>
  <h2>お問い合わせ確認</h2>
  <h4>メールアドレス：</h4>
  <p><?=$_SESSION['data']['email'];?></p>

  <h4>お問い合わせ内容:</h4>
  <p><?=$_SESSION['data']['message']?></p>

  <a href="thankyou.php">送信する</a>
  <a href="input.php">戻る</a>
</body>