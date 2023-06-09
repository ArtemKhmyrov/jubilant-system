<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicons.ico"> <!-- Поменять на нормально название -->
    <title>BitMaker Course</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">

    <script src="js/script.js" defer></script>

</head>

<body>
    <header class="header">
        <div class="header__background">
            <div class="container">
                <nav>
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="./index.html" class="header__item_link header__item_link-normal">BitMaker Course</a>
                        </li>
                        <li class="header__item">
                            <ul class="header__item_wrap">
                                <li class="header__item">
                                    <a href="./login.html" class="header__item_link">log in</a>
                                </li>
                                <li class="header__item">
                                    <span></span>
                                </li>
                                <li class="header__item">
                                    <a href="./registr.html" class="header__item_link">sign up</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
   
        <section class="practic-list">
            <div class="practic-list__background">
                <picture>
                    <img src="./img/practic-bg.png" alt="" srcset="">
                </picture>
            </div>

            <div class="practic-list__wrap">
                <div class="container">
                    <div class="practic-list__nav">
                        <h2>Практика</h2>
                    </div>
                    <div class="to-back"><span class="to-back__first-arrow"></span><span class="to-back__second-arrow"></span><a href="./select.html">Вернуться назад</a></div>
                    <div class="practic-list__content">
                        <ul>
                            <h3>Теория музыки</h3>
                            <li><a href="./tonalnost-task.html" class="practic-list__item">Тональность</a></li>
                            <li><a href="./intervaly-task.html" class="practic-list__item">Интервалы</a></li>
                            <li><a href="./lady-task.html" class="practic-list__item">Лады</a></li>
                            <li><a href="./accordy-task.html" class="practic-list__item">Аккорды</a></li>
                            <li><a href="./progressii-accordov-task.html" class="practic-list__item">Прогрессии аккордов</a></li>
                        </ul>

                        <ul>
                            <h3>Обработка звука</h3>
                            <li><a href="./balance-task.html" class="practic-list__item">Баланс</a></li>
                            <li><a href="./ekvalizatsiya-task.html" class="practic-list__item">Эквализация</a></li>
                            <li><a href="./kompressiya-task.html" class="practic-list__item">Компрессия</a></li>
                            <li><a href="./prostranstvo-task.html" class="practic-list__item">Пространство</a></li>
                            <li><a href="./effecty-tasks.html" class="practic-list__item">Эффекты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

    <footer class="footer">
        <div class="footer__background">
            <div class="container">
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="./profile.html" class="footer__item_link footer__item_link-normal">Profile</a>
                    </li>
                    <li class="footer__item">
                        <a href="/" class="footer__item_link footer__item_link-normal">Сonnect with us</a>
                    </li>
                    <li class="footer__item">
                        <ul class="footer__item_wrap">
                            <li class="footer__item">
                                <a href="./login.html" class="footer__item_link">log in</a>
                            </li>
                            <li class="footer__item">
                                <span></span>
                            </li>
                            <li class="footer__item">
                                <a href="./registr.html" class="footer__item_link">sign up</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>