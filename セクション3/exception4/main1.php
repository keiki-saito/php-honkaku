<?php declare(strict_types=1); ?>
<body>
  <?php 
    require_once dirname(__FILE__) . '/PageNotFoundException.php';

    // ユーザ情報を管理するデータベーステーブルにアクセスするクラス
    class UserModel
    {
      public function findProfile(int $userId):array
      {
        throw new PageNotFoundException('User profile does not exist.');
      }
    }

    // メインルーチン
    $model = new UserModel();
    try{
      $profile = $model->findProfile(1001);
    }catch(PageNotFoundException $e){
      echo file_get_contents('error-page-not-found.html'); // エラーページを表示する
      return;
    }catch(Exception $e){
      echo file_get_contents('error-unknown.html'); // エラーページを表示する
      return;
    }
  ?>
</body>