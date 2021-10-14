<body>
  <?php
    
    define('TAX_PERCENT',  0.08);

    define('SMTP_HOST', 'example.com');
  ?>

  <p>商品税率：<?=TAX_PERCENT?></p>
  <p>100円の税込金額は：<?=100 + 100 * TAX_PERCENT?>円</p>
  <p>SMTPサーバーは：<?=SMTP_HOST?></p>

</body>