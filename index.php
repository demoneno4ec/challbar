<?php
define('SHOW_PAGE', true);
require_once $_SERVER['DOCUMENT_ROOT'].'/include/prolog_before.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/include/header.php';
$page->setTitle('«Chalbar» - франшиза бар, кальянная, ресторан в «закрытом формате»!');
?>
    <body>
        <div id="main">
            <div class="heading__box">
              <div class="wrapper">
                <?php require_once $_SERVER['DOCUMENT_ROOT'].'/include/header-row.php';?>
                <div class="flex direction">
                  <div class="heading__block">

                    <h1><strong>CHALBAR</strong> Speakeasy-франшиза</h1>

                    <p>Бар, кафе <span>в «закрытом формате»</span></p>

                    <a data-fancybox data-src="#modal" 
                      href="#" 
                      title="Скачать презентацию" 
                      class="btn link-modal-form"
                      rel="norefferer noopener"
                      target="_blank"
                      data-title="Скачать презентацию"
                    >Скачать презентацию</a>
                    <span class="file-size">PDF <?=$page->getFileSize($_SERVER['DOCUMENT_ROOT'].'/doc/mk.pdf')?></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="section1__box">
              <div class="wrapper">
                <div class="flex">
                  <div class="section1__info animateblock">
                    <h3>Speakeasy — это место, куда не приглашают чужих. Заведение с атмосферой закрытого клуба.</h3>

                    <p>К нам приходят, чтобы почувствовать себя особенным, почувствовать себя частью престижной тусовки. </p>

                    <p>Простыми словами:</p>

                    <ul>
                      <li>Мы популярны - к нам сложно попасть</li>
                      <li>Мы пускаем не всех - зайти к нам это удача</li>
                      <li>Подогретый интерес и большое желание - это очередь из гостей</li>
                    </ul>
                  </div>

                  <div class="section1__image animateblock">
                    <img src="/images/section1-image.jpg" 
                      alt="chalbar" 
                      title="chalbar"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="section2__box">
              <div class="wrapper">
                <h2 class="animateblock">Какие условия</h2>

                <div class="flex">
                  <div class="section2__block animateblock">
                    <span class="product__title">Hookah</span>

                    <p><span>Кальянная в формате Speakeasy</span></p>
                    <p>Паушальный взнос: 350 тысяч рублей</p>
                    <p>Инвестиции: 3,5 млн рублей</p>
                  </div>

                  <div class="section2__block animateblock">
                    <span class="product__title">Hookah, Bar & Kitchen</span>

                    <p><span>Заведение полного цикла</span></p>
                    <p>Паушальный взнос: 600 тысяч рублей</p>
                    <p>Инвестиции: 10 млн рублей</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="section3__box">
              <div class="wrapper">
                <div class="flex">
                  <div class="section3__image animateblock">
                    <img src="/images/section3-image.jpg" 
                      alt="chalbar"
                      title="chalbar" 
                    />
                  </div>

                  <div class="section3__block animateblock">
                    <h2>кто мы такие?</h2>
                    <p>Chalbar - бар, hookah, кафе закрытого типа. Открыты с 2015г. <br />С 2019г. помогаем открывать подобные бары и кафе <br />в других городах России.</p>

                    <ul>
                      <li>Консультируем</li>
                      <li>Рассчитываем <br />финансовые показатели</li>
                      <li>Адаптируем концепцию <br />к различным заведениям</li>
                    </ul>
                  </div>
                </div>

                <p class="section3__bottom">Франшиза «CHALBAR» включает кальянную, бар и street-food кухню с европейской подачей. Все элементы разработаны специально для speakeasy формата и не имеют аналогов по сочетанию между собой.</p>
              </div>
            </div>

            <div class="section4__box">
              <div class="wrapper">
                <h2 class="animateblock">Что мы предлагаем</h2>

                <div class="section4__head-box flex space-between">
                  <p>Мы предлагаем свой опыт в открытии, <br />управлении и продвижении speakeasy- <br />заведений. Каждый бизнес-процесс <br />подробно описан, структурирован и <br />проверен на практике.</p>
                  <p>Вместе они создают бизнес-модель, <br />с которой просто работать, которую <br />легко применить в любом крупном <br />городе.</p>
                </div>

                <div class="row">
                  <div class="col-md-2 animateblock">
                    <img src="/images/image1.jpg" 
                      alt="Пошаговые инструкции"
                      title="Пошаговые инструкции" 
                    />

                    <div class="flex align-item">
                      <span>01</span>
                      <p>Пошаговые инструкции</p>
                    </div>
                  </div>

                  <div class="col-md-2 animateblock">
                    <img src="/images/image2.jpg"
                      alt="Прозрачная финансовая модель"
                      title="Прозрачная финансовая модель" 
                    />

                    <div class="flex align-item">
                      <span>02</span>
                      <p>Прозрачная финансовая модель</p>
                    </div>
                  </div>

                  <div class="col-md-2 animateblock">
                    <img src="/images/image3.jpg" 
                      alt="Создание команды"
                      title="Создание команды"
                    >

                    <div class="flex align-item">
                      <span>03</span>
                      <p>Создание команды</p>
                    </div>
                  </div>

                  <div class="col-md-2 animateblock">
                    <img src="/images/image4.jpg" 
                      alt="Дизайн-проект помещения"
                      title="Дизайн-проект помещения"
                    />

                    <div class="flex align-item">
                      <span>04</span>
                      <p>Дизайн-проект помещения</p>
                    </div>
                  </div>

                  <div class="col-md-2 animateblock">
                    <img src="/images/image5.jpg" 
                      alt="Маркетинговая стратегия"
                      title="Маркетинговая стратегия"
                    />

                    <div class="flex align-item">
                      <span>05</span>
                      <p>Маркетинговая стратегия</p>
                    </div>
                  </div>

                  <div class="col-md-2 animateblock">
                    <img src="/images/image6.jpg" 
                      alt="Стандарты работы"
                      title="Стандарты работы"
                    />

                    <div class="flex align-item">
                      <span>06</span>
                      <p>Стандарты работы</p>
                    </div>
                  </div>

                  <div class="col-md-2 animateblock">
                    <img src="/images/image7.jpg" 
                      alt="Брендбук"
                      title="Брендбук"
                    />

                    <div class="flex align-item">
                      <span>07</span>
                      <p>Брендбук</p>
                    </div>
                  </div>

                  <div class="col-md-2 animateblock">
                    <img src="/images/image8.jpg" 
                      alt="Постоянная поддержка"
                      title="Постоянная поддержка"
                    />

                    <div class="flex align-item">
                      <span>08</span>
                      <p>Постоянная поддержка</p>
                    </div>
                  </div>
                </div>

                <a data-fancybox data-src="#modal" 
                  href="#" 
                  title="Полная программа поддержки" 
                  class="btn btn-b link-modal-form"
                  rel="norefferer noopener"
                  target="_blank"
                  data-title="Полная программа поддержки"
                >Полная программа поддержки</a>
                <span class="file-size">PDF <?=$page->getFileSize($_SERVER['DOCUMENT_ROOT'].'/doc/mk.pdf')?></span>
              </div>
            </div>

            <div class="section5__box">
              <div class="wrapper">
                <h2 class="animateblock">Чего достигли</h2>

                <div class="flex">
                  <div class="section5__block animateblock">Результаты нашей работы проявляются в течение нескольких лет. Пример — первое заведение «CHALBAR» в Казани. За три года мы довели число посадочных мест до сотни. В три раза увеличили площадь. Получили 21,6 млн рублей чистой прибыли на 10 млн инвестиций. С 2019 года развиваем второе собственное заведение.</div>

                  <div class="section5__image animateblock">
                    <img src="/images/section5-image1.jpg" 
                      alt="chalbar"
                      title="chalbar" 
                    >
                  </div>
                </div>

                <div class="flex direction">
                  <div class="section5__block animateblock">Мы довольны этими показателями, но это не повод для гордости. Наша гордость — доверие партнёров, которые открывают заведения по нашей франшизе. Пользуясь случаем, передаём им привет. <span>Друзья, если вы читаете этот лендинг, знайте: мы рады, что смогли вам помочь!</span></div>

                  <div class="section5__image animateblock">
                    <img src="/images/section5-image2.jpg" 
                      alt="chalbar"
                      title="chalbar" 
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="section6__box">
              <div class="wrapper">
                <h2 class="animateblock">Кому подойдёт</h2>

                <p>Speakeasy-франшиза подойдёт для владельцев кальянных, баров и ресторанов. Если вы уже знаете всю внутреннюю кухню подобного бизнеса, вам будет гораздо проще применять наши бизнес-процессы.</p>

                <p>Франшиза «CHALBAR» вряд ли подойдёт неопытным предпринимателям. Если вы открываете свой первый бизнес, подумайте дважды перед покупкой. Даже работа по готовым шаблонам требует деловых навыков и опыта в управлении.</p>

                <img src="/images/section6-image.jpg" 
                  alt="chalbar" 
                  title="chalbar" 
                  class="section6-image"
                />
              </div>
            </div>
 
            <div class="section7__box">
              <div class="wrapper">
                <h2>Как начать сотрудничество</h2>

                <p>Мы считаем, бизнес должен быть честным. Поэтому не продаём франшизу <br />без предварительного анализа франчайзи. Свяжитесь с нами, проведём <br />анализ вашего заведения и рассчитаем финансовую модель. Это бесплатно.</p>

                <div class="section7__form">
                  <form class="index-form" action="/php/formIndex.php" method="post">
                      <input type="hidden"
                             name="form-name"
                             value="Как начать сотрудничать"
                      />
                    <div class="row">
                      <div class="col-md-3">
                        <input type="text" placeholder="Ваше имя" name="form[name]" autocomplete="off" required />
                      </div>

                      <div class="col-md-3">
                        <input type="text" placeholder="Ваш телефон" name="form[phone]" autocomplete="off" required />
                      </div>

                      <div class="col-md-3">
                        <input type="text" placeholder="Ваш e-mail" name="form[email]" autocomplete="off" required />
                      </div>

                      <div class="col-md-2">
                        <input type="text" placeholder="Ваш город" name="form[city]" autocomplete="off" required />
                      </div>

                      <div class="col-md-2">
                        <button type="submit">отправить заявку</button>
                      </div>
                    </div>
                     
                    <input id="check2" type="checkbox" checked  name="form[politic]"/>
                    <label for="check2">Нажимая на кнопку «Отправить заявку», я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</label>
                      <div class="preload__box">
                          <div class="flex align-item">
                              <div id="floatingCirclesG">
                                  <div class="f_circleG" id="frotateG_01"></div>
                                  <div class="f_circleG" id="frotateG_02"></div>
                                  <div class="f_circleG" id="frotateG_03"></div>
                                  <div class="f_circleG" id="frotateG_04"></div>
                                  <div class="f_circleG" id="frotateG_05"></div>
                                  <div class="f_circleG" id="frotateG_06"></div>
                                  <div class="f_circleG" id="frotateG_07"></div>
                                  <div class="f_circleG" id="frotateG_08"></div>
                              </div>
                          </div>
                      </div>
                  </form>
                </div>

                <img src="/images/fix1.png" 
                  alt="chalbar" 
                  title="chalbar" 
                  class="fix fix1 animateblock"
                />
                <img src="/images/fix2.png" 
                  alt="chalbar" 
                  title="chalbar" 
                  class="fix fix2 animateblock"
                />
                <img src="/images/fix3.png" 
                  alt="chalbar" 
                  title="chalbar" 
                  class="fix fix3 animateblock"
                />
                <img src="/images/fix4.png" 
                  alt="chalbar" 
                  title="chalbar" 
                  class="fix fix4 animateblock">
              </div>
            </div>


    <div class="modal__box" id="modal">
        <span class="h3__title" id="modalTitle"></span>

        <form class="index-form" action="/php/formIndex.php" method="post">
            <input type="hidden"
               name="form-name"
               value="Заказать звонок"
            />
            <input type="text"
               name="form[name]"
               placeholder="Ваше имя" autocomplete="off" required />
            <input type="text"
                   name="form[city]"
                   placeholder="Ваш город" autocomplete="off" required />
            <input type="text"
               name="form[phone]"
               placeholder="Ваш телефон"  autocomplete="off" required />
            <input type="email"
               name="form[email]"
               placeholder="Ваш email" autocomplete="off" required />

            <button type="submit">Отправить</button>

            <input id="check1" type="checkbox" name="form[politic]" checked/>
            <label for="check1">Нажимая на кнопку «Отправить», я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</label>

            <div class="preload__box">
                <div class="flex align-item">
                    <div id="floatingCirclesG">
                        <div class="f_circleG" id="frotateG_01"></div>
                        <div class="f_circleG" id="frotateG_02"></div>
                        <div class="f_circleG" id="frotateG_03"></div>
                        <div class="f_circleG" id="frotateG_04"></div>
                        <div class="f_circleG" id="frotateG_05"></div>
                        <div class="f_circleG" id="frotateG_06"></div>
                        <div class="f_circleG" id="frotateG_07"></div>
                        <div class="f_circleG" id="frotateG_08"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
            <!-- Yandex.Metrika counter -->
            <script type="text/javascript" >
                (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                ym(54279862, "init", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/54279862" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/include/footer.php';
?>