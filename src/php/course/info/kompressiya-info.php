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
   
       <section class="courses">
        <div class="kompressiya-bg">
            <picture>
                <img src="./img/lector/kompressiya-bg.png" alt="Компрессия">
            </picture>
        </div>

        <div class="kompressiya__wrap">
            <div class="container">
                <div class="title">
                    Компрессия
                </div>
                <div class="to-back"><span class="to-back__first-arrow"></span><span class="to-back__second-arrow"></span><a href="./lector-choose.html">Вернуться назад</a></div>
                <div class="kompressiya__paragraph">
                    По прямому назначению компрессор - прибор сжатия динамического диапазона. Громкие звуки (выше порога) он делает тише, тихие (ниже порога) не трогает.

                    
                </div>
                <div class="kompressiya__paragraph">Можно выделить два основных направления компрессии – техническую и художественную:
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Техническая компрессия нужна, когда есть надобность сровнять разницу громкостей. Например, вокал, соло гитара и любой другой инструмент, сыгранный неровно;</li>
                        <li class="kompressiya__item">Художественная компрессия нужна для более детальных целей. Например, подчеркнуть акценты инструментов, улучшая читаемость их в миксе.</li>
                    </ul>
                </div>
                <div class="kompressiya__paragraph--img">
                    <picture>
                        <img src="./img/lector/kompressor.png" alt="Компрессор">
                    </picture>
                </div>

                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">Атака</h4>

                    Все инструменты по своей природе различны по времени атаки. Поэтому для каждого звука время атаки будет свое. Чем быстрее природное время атаки, тем быстрее она и в компрессоре.
                    Атака (Attack) — это время, через которое компрессор начнет жать сигнал при его выходе за пороговую величину (Threshold).
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Атака 0.01-1 мс - позволяет убрать атаки инструментов. То есть компрессор срабатывает настолько быстро, что начинает жать звук еще до наступления его пиков. Если какой-то из инструментов чрезмерно щелкает, то его можно сгладить именно так.</li>

                        <li class="kompressiya__item">Атака 1-10 мс - работает как щелчок. При сильной компрессии именно его будет слышно. Все остальное звучание и хвост звука давится. Таким образом можно добавить остроты атакам ударных или перкуссии, например.</li>

                        <li class="kompressiya__item">Атака 10-80 мс - подчеркивает тело звука. Там, как правило содержится основной тембр и тон. Поэтому такая атака подходит для создания акцентов в мелодических или гармонических инструментах.</li>

                        <li class="kompressiya__item">Атака более 80 мс - как правило работает уже не на один звук, а на целую группу звуков. Разное время атаки позволяет смещать или подчеркивать акценты в ряде звуков, таким образом создавая или меняя грув мелодии. Такая компрессия может быть весьма оригинальной с точки зрения саунд-дизайна, может сделать интересным ранее скучный ритмический рисунок.</li>
                    </ul>

                        Все эти варианты компрессии с разными видами атаки преследуют художественно-технические цели, главная из которых - читаемость инструментов и микса в целом.
                         При главной цели сделать каждый микс читаемым, такого рода компрессия будет применятся практически повсеместно.
                    
                </div>

                <div class="kompressiya__paragraph--img--wrap">
                    <div class="kompressiya__paragraph--img kompressiya__paragraph--img_fab-sm">
                        <picture>
                            <img src="./img/lector/fabFilter-sm.png" alt="Компрессор">
                        </picture>
                    </div>
                    <div class="kompressiya__paragraph--img kompressiya__paragraph--img_fab-big">
                        <picture>
                            <img src="./img/lector/fabFilter-big.png" alt="Компрессор">
                        </picture>
                    </div>
                </div>

                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">Релиз</h4>
                    Разумеется, наилучшего эффекта и работы атаки компрессора можно добиться только корректно выставив пороговое значение (Threshold) и релиз (Release).

                </div>
                <div class="kompressiya__paragraph">
                    Релиз (Release) — это период, в течение которого компрессор прекращает сжатие, увеличивая громкость сигнала до его начального уровня. Этот параметр начинает действовать сразу после параметра Attack.
                    <ul class="kompressiya__list">
                        Ключевые моменты релиза:
                        <li class="kompressiya__item">Чем больше релиз, тем лучше слышно атаку. И если нужна компрессия с сильным щелчком, то лучше сделать релиз подлиннее</li>

                        <li class="kompressiya__item">Чем меньше релиз, тем сильнее лезут послезвучия, сустейны и шумы. Если есть надобность сделать как бы подлиннее, например, хэт, чтобы он звучал подольше, то можно поставить релиз покороче.</li>

                        <li class="kompressiya__item">Чем больше релиз, тем меньше лезут шумы и хвосты, если в дорожке шумно, и хочется это прижать, то релиз подольше.</li>

                        <li class="kompressiya__item">Чем меньше релиз, тем ближе кажется сигнал. Например, близкий вокал хорошо делается с быстрым релизом.</li>

                    </ul>
                </div>
                <div class="kompressiya__paragraph">
                    Параметр релиза сильно влияет на общий уровень компрессии. Смотрите как он отражается на Gain Reduction, и корректируйте порог в зависимости от релиза.
                </div>
                <div class="kompressiya__paragraph">
                    Меньше релиз - больше низа. Это заметно особенно при компрессии низкочастотных инструментов, типа бочки или баса. При сильной компрессии, использование быстрого релиза позволяет сохранить больше низа. Но с другой стороны - оставить больше гудения. Не подумайте, что компрессор добавляет чему-то низа, он ничего не добавляет, просто меньше убавляет при этих настройках.
                </div>
                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">Порог (Threshold)</h4>
                    Самой главной величиной в компрессии является именно Treshold (порог). Прежде всего стоит помнить, что это величина, которую выставляете Вы! Это цифра в децибелах, от которой начинается сжатие сигнала компрессором. Все, что выше этого значения начинает сжиматься в определенном отношении. Все, что ниже – пропускается без изменений.


                </div>

                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">Степень сжатия (Ratio)</h4>

                    Ratio - это значение, показывающее во сколько раз амплитуда волны становится меньше после прохождения порога. То есть в 2 раза, 4, 10, или максимальное количество - бесконечность к одному.
                    Важно помнить, что на уровне ощущений степень сжатия сигнала не так сильно зависит от показателя Ratio, сколько зависит от его связки с порогом.

                    <ul class="kompressiya__list">
                    Для примера рассмотрим 2 случая: 

                    <li class="kompressiya__item">Очень низкий порог и слабая степень сжатия</li>

                    <li class="kompressiya__item">Довольно высокий порог в связке с сильной степенью сжатия.</li>
                    </ul>

                </div>
                <div class="kompressiya__paragraph">
                    Первый случай абсолютно точно изменит огибающую волны значительно сильнее, сигнал будет перекомпрессирован, что негативно отразится на звуке, хотя степень сжатия будет минимальной.

                </div>
                <div class="kompressiya__paragraph">
                    Второй случай срежет лишь пики сигнала, которые зачастую даже не слышны в миксе. При этом степень сжатия будет максимальной, но не распространится на весь сигнал целиком.

                </div>
                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">Сумма подавления сигнала (Gain Reduction)</h4>
                    Почти в любом компрессоре есть отображение суммы подавления сигнала, то есть показатель изменения громкости сигнала после сжатия. Он называется Gain Reduction. Чем выше громкость входного сигнала, тем автоматически больше становится сумма подавления. Для избежания перекомпрессии она не должна превышать 6-7 дб. 
                </div>

                <div class="kompressiya__paragraph">
                    Каждый стиль музыки характеризуется своими степенями компрессии. Например, в трансе все пережато, в трэпе часто пережато так, что перегружено, а в попсе - сильно жато, но при том чисто. Поэтому всегда при настройке компрессии в первую очередь необходимо опираться на свой слух, а не на шаблоны настроек.
                   
                </div>

                <div class="kompressiya__paragraph--img kompressiya__paragraph--img_footer">
                    <picture>
                        <img src="./img/lector/kompressiya-footer.png" alt="Компрессор">
                    </picture>
                </div>

                <div class="go-top"><span></span></div>
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