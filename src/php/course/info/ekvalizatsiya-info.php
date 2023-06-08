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
        <div class="kompressiya-bg kompressiya-bg_ekvalizatsiya">
            <picture>
                <img src="./img/lector/kompressiya-bg.png" alt="Компрессия">
            </picture>
        </div>

        <div class="kompressiya__wrap">
            <div class="container">
                <div class="title">
                    Эквализация
                </div>
                <div class="to-back"><span class="to-back__first-arrow"></span><span class="to-back__second-arrow"></span><a href="./lector-choose.html">Вернуться назад</a></div>
                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">ЗАДАЧИ ПРИ ПРИМЕНЕНИИ ЭКВАЛАЙЗЕРА</h4>
                    Как и любой инструмент, эквалайзер настраивается в зависимости от задач. Если не знаешь, чего хочешь - лучше не включай прибор!
                </div>
                <div class="kompressiya__paragraph">Можно выделить два основных направления компрессии – техническую и художественную:
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Техническая компрессия нужна, когда есть надобность сровнять разницу громкостей. Например, вокал, соло гитара и любой другой инструмент, сыгранный неровно;</li>
                        <li class="kompressiya__item">Художественная компрессия нужна для более детальных целей. Например, подчеркнуть акценты инструментов, улучшая читаемость их в миксе.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Какие могут быть задачи:
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Подчеркнуть особенности тембра.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Представим какой-либо звук, он в любом случае будет лежать в диапазоне от 20 Гц до 20 кГц. Большинство инструментов имеют широкий диапазон, но в нем есть частоты, «делающие» этот инструмент. Например, бочка может занимать весь частотный диапазон, но именно низкие частоты делают бочку бочкой. И если мы подчеркнем в ней зону низов, то подчеркнем ее характерные особенности.
                </div>
                <div class="kompressiya__paragraph">
                    Не всегда частота характера инструмента так очевидна. В таком случае тебе нужно найти ее самому. Это можно сделать, включив колокольчиком одну полосу eq, повысить ее на 6 Дб и провести по всему диапазону частот. Таким образом ты лучше услышишь, что резонирует в инструменте, а что является его особенностью.
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Изменить характер звука.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Представим ту же бочку. Вместо того, чтоб подчеркнуть ее низы, отрежем их - останется щелчок, пододбный перкуссии или хэту. Это тоже будет звук для ритм-секции, но уже не бочка. Такой подход применяется для саунд-дизайна, звуки часто необычные. Но важно помнить, что инструмент меняет свою изначальную роль.
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Устранение частотных конфликтов.</li>
                    </ul>
                </div>
                <div class="kompressiya__paragraph">
                    Если инструменты работают в одной области частот, они могут создать частотный конфликт. Частый случай: бочка и бас. Чтобы они разошлись, нужно выбрать, что будет выше, а что ниже. Например, в бочке можно поднять 80 Гц, а в басу 150 Гц, или наоборот - все зависит от конкретной ситуации. Чаще всего, таких подъемов достаточно, чтобы избежать конфликтов. Если при этом еще, например, сделать в бочке дырку на 150 Гц, скорее всего она пострадает.
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">На сколько прибавлять/убавлять?</li>
                    </ul>
                </div>
                <div class="kompressiya__paragraph">
                    Сильное воздействие эквалайзером (более +-6 Дб), может значительно изменить характер инструмента. То есть для первого способа 6 Дб это уже много, а для второго - может, и мало! Но если ты просто не слышишь изменения eq меньше 6 Дб, это скорее всего знак - нужно тренировать слух или менять свою мониторную систему.
                </div>

                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">ОШИБКИ ПРИ ЭКВАЛИЗАЦИИ</h4>
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Узкая добротность.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Делая сильный подъем эквалайзером при узкой добротности, вы получите свисты и гудения. Делая слабый подъем при узкой добротности, вы вообще не услышите разницы.
                </div>


                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Широкая добротность.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Делая подъем или спад при слишком широкой добротности, скорее всего вы просто получите общий подъем или спад громкости инструмента, нежели изменение его тембра.
                </div>


                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Большой уровень.</li>
                    </ul>
                </div>


                <div class="kompressiya__paragraph">
                    Подъем или спад более 6дб при эквализации должен как минимум вызвать у вас вопрос о правомерности своих действий. Ведь меняя тембр инструмента на такую большую величину, вы делаете его звук непохожим на исходный, более неестественный. Например, если бочка без низких или каких-либо других частот - в концепции вашего трека, то почему бы и нет. Для более натурального звучания инструментов подойдет мягкая эквализация до 6 дБ, в случае если речь идет о работе колокольчиком.
                </div>


                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Шелф вверх.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Очень редко бывает,чтоб такой прием пришелся к месту. В большинстве случаев подъем шелфом спровоцирует частотные конфликты в верхней ли нижней областях частот, что ведет к плохой читаемости целых групп инструментов.
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Слишком большой срез по низу.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Часто в просвещенных музыкальных кругах мы можем услышать совет по срезу от 30, а того и гляди от 40 Гц на всех инструментах. Ну вроде как не слышно этого, за то безопасно. Такой подход имеет право на жизнь, особенно в случае, если у вас мониторинг ближнего поля до 6 дюймов. В этом случае вы вряд ли в курсе того, какая дискотека происходит в области ваших саб-низов. Все,о чем вы не в курсе при сведении, потом при прослушивании на больших порталах может выйти боком. Однако для большинства треков срез от 40 Гц является уничтожением глубины, плотности, мягкости, иногда и теплоты трека.
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Использование эквалайзера вместо де-эсера.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Предположим, чтоб смягчит это, Вы опускаете на вокале 6 кГц. Это приводит к тому, что даже когда вокалист не поет звук "с", на голосе всё равно убираются обертона и все, что в области 6 кГц. Таким образом невозможно добиться близости объекта. Приходится идти на компромиссы между окрасом всего сигнала и режущим звуком "с". Де-эссер же будет работать, придавливая "с" только в зашкварные моменты, когда уровень сигнала переходит за порог. И это применение возможно не только к сибилянтам и шипящим вокала, но и к различным другим призвукам, периодически появляющимся в том или ином инструменте. 
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Неправильная постановка эквалайзера в цепи.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Например, до Гейта. Нельзя сказать, что это является незыблемым правилом, потому что в музыке вообще не может быть правил. Есть причинно-следственные связи. Постановка эквалайзера до Гейта скорее всего приведет к его некорректной работе, изменяя баланс звуков внутри дорожки. Для такой постановки в цепи должна быть четкая уверенность в результате, которого вы хотите добиться. Или другой пример: если у вас в цепи всего один эквалайзер, то вероятнее всего он будет до компрессора. В противном случае вы получите лишние пики на сигнале, и компрессия будет напрасной.
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Использование нескольких противоречащих приборов.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    И я даже не о том, что у вас в цепи стоит один eq на +5 дБ в области 2 кГц, а следом за ним другой eq на -5 дБ в той же области. Частенько забывая о том, что мы делали прежде, мы можем ошибиться и поставить на группу прибор, противоречащий обработке отдельно взятой дорожки. Или другой пример: прибавить на бочке 75 Гц на +5, а потом сильно пережать её компрессией, которая жрет низ. Каждое противоречащее действие ведет к искажениям в сигнале, что в итоге дает муть целого трека.
                </div>


                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Разные эквалайзеры на одних элементах группы.</li>
                    </ul>
                </div>

                <div class="kompressiya__paragraph">
                    Речь идет о сигналах одной функции, например бэк-вокалы или струнная секция. Предположим, что у вас есть бэки в 4 дорожки. Все они в сумме являются одним инструментом "бэк-вокал". Имеет смысл эквализировать их группой, а не каждый бэк отдельно: сэкономите ресурсы компьютера, да и пространственно и тембрально инструменты одной группы, обработанные одним эквалайзером, будут звучать более гладко.
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