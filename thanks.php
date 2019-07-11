<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Спасибо! Ваша заявка принята</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="icon" type="image/png" href="favicon.png">

        <script src="http://code.jquery.com/jquery.min.js"></script>
        <script src="js/vendor/modernizr-2.6.1.min.js"></script>
        <script src="js/jquery.inputmask.bundle.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body class="thanks">

      <div class="modal__box" id="modal">
        <span id="thanksNameModal" class="h3__title">Спасибо!</span>
        <p>В ближайшее время мы обработаем Вашу заявку. Для того, чтобы наш специалист мог максимально подробно ответить на все Ваши вопросы, заполните, пожалуйста, следующую форму. Заранее благодарим!</p>

        <form>
          <span>Введите Ваш город:</span>
          <input type="text" id="city" name="city" autocomplete="off" />

          <span>Введите Ваш возраст:</span>
          <input type="text" name="age" autocomplete="off" required />

          <span>Наличие бизнеса / Опыт бизнеса:</span>
          <select name="hasbusiness">
            <option>Да</option>
            <option>Нет</option>
          </select>

          <span>Объем планируемых инвестиций:</span>
          <input type="text" name="investammount" autocomplete="off" required />

          <input style="display: none;" type="hidden" value="1" name="thank_you" />
           utton type="submit">Отправить</button>
        </form>
      </div>

        <div id="main">
            <div class="heading__box">
              <div class="wrapper">
                <header class="flex space-between align-item">
                    <div class="header__logo">
                      <a href="index.html">
                        <img src="/images/logo.png"
                          alt="chalbar" 
                          title="chalbar"
                        />
                      </a>
                    </div>

                  <div class="header__phone">
                    <span><a href="tel:88002501505">8 800 250 15 05</a></span>
                  </div>
                </header>

                <div class="flex direction">
                  <div class="heading__block">
                    <div class="heading__flex">
                      <h1><span id="thanksName">Имя,</span> менеджеры уже занимаются Вашей заявкой</h1>

                      <span class="heading__title">Мы свяжемся с Вами в ближайшее время</span>

                      <a class="btn" href="/doc/mk.pdf">Скачать презентацию</a>
                      <div class="back__btn">
                        <a href="index.html">Вернуться на сайт</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <footer>
                <div class="wrapper">
                  <div class="flex space-between">
                    <div class="footer__block">
                      <span class="copyright">© «Chalbar», <?=date('Y')?></span>
                      <p><a href="police.html" class="police">Политика конфиденциальности</a></p>
                    </div>

                    <div class="footer__block">
                        <div class="footer__social">
                          <a target="_blank" href="https://www.instagram.com/chalbar/">
                            <img src="/images/insta-icon.png" 
                              alt="insta" 
                              title="insta"
                            />
                          </a>
                          <a target="_blank" href="https://vk.com/chalbar">
                            <img src="/images/vk-icon.png"
                              alt="vk" 
                              title="vk"
                            />
                          </a>
                        </div>
                       <p>Мы в социальных сетях</p>
                       <p><a class="site" target="_blank" href="https://xn--5-7sbamtgf4aex7b0b.xn--p1ai/">Франчайзинг 5 - упаковка и продвижение франшиз</a></p>
                    </div>

                    <div class="footer__block">
                      <div class="header__phone">
                        <span><a href="tel:88002501505">8 800 250 15 05</a></span>
                      </div>
                    </div>
                  </div>
                </div>
            </footer>

        </div>
    </body>
</html>
