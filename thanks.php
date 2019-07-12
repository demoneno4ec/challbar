<?php
define('SHOW_PAGE', true);
require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';
$page->setTitle('«Chalbar» - франшиза бар, кальянная, ресторан в «закрытом формате»!');
?>
    <body class="thanks">
        <div id="main">
            <div class="heading__box">
              <div class="wrapper">
                <?php require_once $_SERVER['DOCUMENT_ROOT'].'/include/header-row.php';?>
                <div class="flex direction">
                  <div class="heading__block">
                    <div class="heading__flex">
                      <h1><span id="thanksName">Имя,</span> менеджеры уже занимаются Вашей заявкой</h1>

                      <span class="heading__title">Мы свяжемся с Вами в ближайшее время</span>

                      <a class="btn" href="/doc/mk.pdf">Скачать презентацию</a>
                      <div class="back__btn">
                        <a href="/">Вернуться на сайт</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal__box" id="modal">
                <span id="thanksNameModal" class="h3__title">Спасибо!</span>
                <p>В ближайшее время мы обработаем Вашу заявку. Для того, чтобы наш специалист мог максимально подробно ответить на все Ваши вопросы, заполните, пожалуйста, следующую форму. Заранее благодарим!</p>

                <form class="thanks-form">
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
                    <button type="submit">Отправить</button>
                </form>
            </div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>