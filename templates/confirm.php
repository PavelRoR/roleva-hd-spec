<!DOCTYPE html>
<html lang="ru">
  <head>
  <?php require_once($path.'/head-top.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta property="og:url" content="<?=$prUrl;?>">
    <meta property="og:title" content="УПС! Я не могу отправить рассылку на мастер-класс, тебе нужно подтвердить свою почту">
    <title>УПС! Я не могу отправить рассылку на мастер-класс, тебе нужно подтвердить свою почту</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png">
    <link rel="stylesheet" href="../css/confirm.min.css">
    <!-- AutoWebOffice counter -->
    <script type="text/javascript">if (awoUtmData === undefined) {var awoUtmData = awoUtmData || {};awoUtmData['subdomain'] = 'mvcentr';(function() {var d = document.createElement('script'); d.type = 'text/javascript'; d.async = true;d.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'mvcentr.autoweboffice.ru/js/utm.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(d, s);})();}</script><!-- /AutoWebOffice counter -->
    <?php require_once($path.'/head-bottom.php');?>
  </head>
  <body>
  <?php require_once($path.'/body-top.php');?>
    <div class="wrapper">
    <?php require_once($dPath.'templates/header/header.php');?>
      <section id="main">
        <div class="container">
          <div class="circle circle-blue circle-main-1"></div>
          <div class="circle circle-bordered circle-main-2"></div>
          <div class="content">
            <h1 class="main-title"><span>УПС!</span><br>Я НЕ МОГУ ОТПРАВИТЬ ССЫЛКУ НА <span>МАСТЕР-КЛАСС, </span><br>ТЕБЕ НУЖНО <span>ПОДТВЕРДИТЬ СВОЮ ПОЧТУ.</span></h1>
            <p class="main-text">Перейди в свою почту</p>
            <div class="posts"><a class="post-link" href="https://mail.yandex.ru/" target="_blank"><img class="post-icon" src="../img/icons/yandex.png" alt="Яндекс"></a><a class="post-link" href="https://e.mail.ru/messages/inbox/" target="_blank"><img class="post-icon" src="../img/icons/mailru.png" alt="Mailru"></a><a class="post-link" href="https://mail.google.com/mail" target="_blank"><img class="post-icon" src="../img/icons/gmail.png" alt="Gmail"></a><a class="post-link" href="https://mail.yahoo.com/" target="_blank"><img class="post-icon" src="../img/icons/yahoo.png" alt="Yahoo"></a></div>
            <h2 class="main-subtitle">Не нашли письмо? Проверьте папку <span>промоакции, оповещения или спам</span></h2>
          </div>
        </div>
      </section>
    </div>
    <?php require_once($dPath.'templates/footer/footer.php');?>
    <?php require_once($path.'/body-bottom.php');?>
  </body>
</html>