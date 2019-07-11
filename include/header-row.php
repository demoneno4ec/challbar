<?php
require_once $_SERVER['DOCUMENT_ROOT'].'include/prolog_before.php';
?>
<header class="flex space-between align-item">
    <div class="header__logo">
        <?php if ($_SERVER['PHP_SELF'] === '/index.php'){?>
            <a>
        <?php } else {?>
            <a href="/">
        <?php }?>
        <img src="/images/logo.png" alt="logo" title="logo">
        </a>
    </div>

    <div class="header__phone">
        <span><a href="tel:88002501505">8 800 250 15 05</a></span>
        <a data-fancybox data-src="#modal" href="#" title="Заказать звонок" href="#" class="callback">Заказать звонок</a>
    </div>
</header>