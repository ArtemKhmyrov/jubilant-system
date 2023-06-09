<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="favicons.ico"> <!-- Поменять на нормально название -->
        <title>bitmaker course - profile</title>

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
        <section class="profile">
            <div class="container">
                <div class="profile__wrap">
                    <div class="profile__info">
                        <picture>
                            <img src="./img/profile.png" alt="photo">
                        </picture>

                        <span class="profile__name">Пользователь</span>
                    </div>



                    <div class="quiz__head">
                        <div class="head__content" id="head">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ducimus odit accusamus, illum quas magni provident odio praesentium commodi sint, porro harum, minus cupiditate architecto culpa aut ex dolore officia.</div>
                    </div>
                    <div class="quiz__body">
                        <div class="buttons">
                            <div class="buttons__content" id="buttons">
                                <button class="button">Default button</button><br>
                                <button class="button button_wrong">Wrong answer</button><br>
                                <button class="button button_correct">Correct answer</button><br>
                                <button class="button button_passive">Unclicked button</button><br>
                            </div>
                        </div>
              
                        <div class="quiz__footer">
                            <div class="footer__content" id="pages">0 / 0</div>
                        </div>
                    </div>




                    <iframe src="profile.html" width="480" height="720" class="quiz-frame"></iframe>
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