<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>«Chalbar» - франшиза бар, кальянная, ресторан в «закрытом формате»</title>
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
        <!-- Facebook Pixel Code -->
		<script>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '460285507873294');
		  fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		  src="https://www.facebook.com/tr?id=460285507873294&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
    </head>
    <body>

      <div class="modal__box" id="modal">
        <span class="h3__title" id="modalTitle"></span>

        <form>
          <input type="text" placeholder="Ваше имя" name="name" autocomplete="off" required />
          <input type="text" placeholder="Ваш телефон" name="phone" autocomplete="off" required />
          <input type="text" placeholder="Ваш email" name="email" autocomplete="off" required />

          <button type="submit">Отправить</button>

          <input id="check1" type="checkbox" checked /><label for="check1">Нажимая на кнопку «Отправить», я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</label>

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

        <div id="main">
            <div class="heading__box">
              <div class="wrapper">
                <header class="flex space-between align-item">
                    <div class="header__logo">
                      <a href="index.html"><img src="/images/logo.png" alt="logo" title="logo"></a>
                    </div>

                  <div class="header__phone">
                    <span><a href="tel:88002501505">8 800 250 15 05</a></span>
                    <a data-fancybox data-src="#modal" href="#" title="Заказать звонок" href="#" class="callback">Заказать звонок</a>
                  </div>
                </header>

                <div class="flex direction">
                  <div class="heading__block">

                    <h1><strong>CHALBAR</strong> Speakeasy-франшиза</h1>

                    <p>Бар, кальянная, ресторан <span>в «закрытом формате»</span></p>

                    <a data-fancybox data-src="#modal" 
                      href="#" 
                      title="Скачать презентацию" 
                      class="btn"
                      rel="norefferer noopener"
                      target="_blank"
                    >Скачать презентацию</a>
                    <span class="file-size">PDF <?=number_format(filesize('/doc/mk.pdf') / 1048576, 2);?> Mb</span>
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

                    <p>Chalbar - бар, hookah, ресторан закрытого типа. Открыты с 2015г. <br />С 2019г. помогаем открывать подобные бары и рестораны <br />в других городах России.</p>

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
                  class="btn btn-b"
                  rel="norefferer noopener"
                  target="_blank" 
                >Полная программа поддержки</a>
                <span class="file-size">PDF <?=number_format(filesize('/doc/mk.pdf') / 1048576, 2);?> Mb</span>
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
                  <form>
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" placeholder="Ваше имя" name="name" autocomplete="off" required />
                      </div>

                      <div class="col-md-4">
                        <input type="text" placeholder="Ваш телефон" name="phone" autocomplete="off" required />
                      </div>

                      <div class="col-md-4">
                        <input type="text" placeholder="Ваш e-mail" name="email" autocomplete="off" required />
                      </div>

                      <div class="col-md-4">
                        <button type="submit">отправить заявку</button>
                      </div>
                    </div>
                     
                    <input id="check2" type="checkbox" checked /><label for="check2">Нажимая на кнопку «Отправить заявку», я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</label>

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
                        <a data-fancybox data-src="#modal" href="#" title="Заказать звонок" href="#" class="callback">Заказать звонок</a>
                      </div>
                    </div>
                  </div>
                </div>
            </footer>

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
    </body>

</html>
