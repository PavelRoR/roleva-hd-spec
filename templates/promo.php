<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php require_once($path.'/head-top.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta property="og:url" content="<?=$prUrl;?>">
    <meta property="og:title" content="Подпишитесь в Telegram">
    <title>Подпишитесь в Telegram</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png">
    <link rel="stylesheet" href="../css/promo.min.css">
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
          <div class="content">
            <div class="circle circle-full circle-1"></div>
            <div class="circle circle-bordered circle-2"></div>
            <div class="circle circle-full circle-3"></div>
            <div class="row">
              <div class="col-md-8">
                <p class="main-text"><span>Спасибо, что вы с нами.</span><br>Если вы еще не подписались на наш Telegram-канал, то сделайте это прямо сейчас по кнопке ниже</p>
                <p class="main-text">В Telegram мы сразу пришлем ссылку на <span>вводный урок по "Дизайну человека"</span></p>
                <p class="main-text">Рекомендуем посмотреть его до начала мастер-класса, вам важно будет подготовиться и прийти на мастер-класс с расчитанной картой, пониманием базовых терминов и понятий из "Дизайна человека".</p>
                <h3 class="main-subtitle"><span>Перейдите в Телеграм</span></h3><a class="button button-main" href="https://shop.mv-centr.ru/index.php?r=form/telegram&id_bot=6">Подписаться <img src="../img/icons/tg.png" alt="Telegram"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php require_once($dPath.'templates/footer/footer.php');?>
    <?php require_once($path.'/body-bottom.php');?>
  </body>
</html>