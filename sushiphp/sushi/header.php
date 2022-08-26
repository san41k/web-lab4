<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Taste</title>
    <link rel=stylesheet href="./css/style.css">
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <div class="site_title">
                <div class="header_logo">
                    <a href="?page=main" class="header_logo-link">
                        <img src="./img/svg/logo.svg" alt="Japan taste" class="header_logo-pic">
                    </a>
                </div>
                <nav class="header_nav">
                    <ul class="header_list">
                        <li class="header_menu">
                            <a href="?page=main" class="<?php echo ($_GET['page'] == 'main' or !isset($_GET['page'])) ? 'header_active_link' : 'header_link';?>">Головна</a>
                        </li>
                        <li class="header_menu">
                            <a href="?page=menu" class="<?php echo ($_GET['page'] == 'menu') ? 'header_active_link' : 'header_link';?>">Меню</a>
                        </li>
                        <li class="header_menu">
                            <a href="?page=about" class="<?php echo ($_GET['page'] == 'about') ? 'header_active_link' : 'header_link';?>">Про нас</a>
                        </li>
                    </ul>
                </nav>
                <div class="header_basket">
                    <a href="#!" class="header_basket_link">
                        <img src="./img/svg/backet.svg" alt="Basket" class="header_basket-pic">
                    </a>
                </div>
                <div class="mobile-menu">
                    <input type="checkbox" id="op"></input>
                    <div class="lower">
                        <label class="lover" for="op"><img class="menu-ico" src="./img/png/menu.png"></img></label>
                    </div>
                    <div class="overlay overlay-hugeinc">
                        <label for="op"></label>
                        <nav>
                            <ul>
                                <li><a href="?page=main">Головна</a></li>
                                <li><a href="?page=menu">Меню</a></li>
                                <li><a href="?page=about">Про нас</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>