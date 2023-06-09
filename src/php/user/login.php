<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="favicons.ico"> <!-- Поменять на нормально название -->
        <title>bitmaker course - login</title>

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
        <div class="page-content">
            <div class="page-content__image">
                <picture>
                    <img src="./img/login.png" alt="photo">
                </picture>
            </div>
            <div class="page-content__wrap">
                
                <div class="registration-form__wrap">
                    <h2 class="page-content__title">Авторизация</h2>
                    <form action="./vendor/signin.php" method="POST" class="registration-form">
                        <input type="text" name="login" placeholder="Логин" required>
                        <input type="password" name="password" placeholder="Пароль" required>
                        <button type="submit" class="button-gold"><a href="#" class="button-link">Войти</a></button>
                    </form>
                    <div class="registration-form__wrap_title">
                        <span class="registration-form__description">Еще не зарегистрированы?</span>
                        <a href="./registr.html" class="registration-form__link">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
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