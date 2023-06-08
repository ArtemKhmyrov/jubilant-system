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
        <div class="kompressiya-bg kompressiya-bg_prostranstvo">
            <picture>
                <img src="./img/lector/kompressiya-bg.png" alt="Компрессия">
            </picture>
        </div>

        <div class="kompressiya__wrap">
            <div class="container">
                <div class="title">
                    Пространство
                </div>
                <div class="to-back"><span class="to-back__first-arrow"></span><span class="to-back__second-arrow"></span><a href="./lector-choose.html">Вернуться назад</a></div>
                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">Дилей</h4>
                        Delay - дословно с английского «задержка», то есть это повторение сигнала с отставанием по времени в равномерном затухании.
                </div>
                <div class="kompressiya__paragraph">
                    Нужно знать, что мы слышим именно задержку (появившееся повторение) отдельно от прямого сигнала только при условии задержки 20-25 мс. При времени задержки менее 30 мс мы слышим видоизменившийся сигнал, но только 1, а не 2 (эффект Хааса).
                </div>
                <div class="kompressiya__paragraph">
                    Для построения пространства delay ставится через посыл. Поскольку delay часто эквализуется, а также сопровождается дополнительными эффектами, то постановка его в дополнительную шину (посыл) часто удобнее. Однако для каких-то однократных эффектов его можно использовать в инсерт, хоть и с меньшей свободой действий.
                </div>
                <div class="kompressiya__paragraph">
                    Однако для каких-то однократных эффектов его можно использовать в инсерт, хоть и с меньшей свободой действий. Чем больше само время задержки в приборе delay и выше количество повторений (feedback), тем большее пространство мы создаем. Короткие эффекты delay также часто применяются, но следует помнить, что у людей силен бытовой слуховой опыт и порой при ярком эффекте могут создаваться «туалетные» ассоциации.
                </div>
                <div class="kompressiya__paragraph">
                    Delay можно использовать и в стерео и в моно. В классических треках чаще всего можно встретить связку stereo reverb + mono delay на вокале и прочих звуках. В современных треках может быть все что угодно.
                </div>
                

                <div class="kompressiya__paragraph">
                    Как мы можем применять delay:
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Stereo/mono delay с большой задержкой и feedback - большое пространство. Если отражения кажутся слишком четкими, можно применить на эффекте компрессию с быстрой атакой или транзиент дизайнером убавить атаку. Если, например, в вокале отражения наползают на новый текст и мешают читаемости, то можно сделать sidechain компрессию под вокал.</li>
                    </ul>
                </div>
                <div class="kompressiya__paragraph">
                    *стоит обратить внимание, что в разных плагинах стерео delay разные настройки задержки левого и правого каналов. Например, в H-delay от waves невозможно выбрать время для каналов по отдельности. 
                </div>
                <div class="kompressiya__paragraph">
                    **также стоит обратить внимание на ширину стерео базы в шине, где стоит stereo delay. Порой при панорамировании каналов на 100% L-R delay звучит не естественно, а при 90% уже хорошо.
                </div>
                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Быстрый stereo delay с задержкой, например,25-35 мс и нулевым фидбэком - для создания стерео из моно сигналов и эффекта бОльшего расширения для стерео сигналов.</li>
                    </ul>
                </div>
                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        Такой способ работает хорошо, но иногда жестковато. Chorus при прочих равных звучит мягче.
                        <li class="kompressiya__item">Быстрый mono delay с минимальным фидбэком для уплотнения звука, например, на вокале. При этом неплохо было бы проработать eq нижнюю середину и низ эффекта.</li>
                        <li class="kompressiya__item">Быстрый mono delay влево, прямой моно сигнал вправо - для создания стерео образа из моно.</li>
                        <li class="kompressiya__item">Для всяких фантасмагорий и невероятных эффектов можно пробовать реверсивный delay, а также добавлять к нему pitch shifter. Есть такой плагин Crystallizer от Sound Toys, где все это совмещено.</li>
                        <li class="kompressiya__item">Можно использовать delay в противофазе, что тоже звучит довольно необычно. Создаем два моно delay с одинаковыми настройками, один налево+другой направо. И на одном переворачиваем фазу. </li>
                        <li class="kompressiya__item">Панорамирование mono delay. При панорамировании в то же место, где находится прямой сигнал delay читается более мягко. Например, гитара играет справа, и ее delay тоже справа.</li>
                    </ul>
                </div>
                <div class="kompressiya__paragraph">
                    При панорамировании в то же место, где находится прямой сигнал delay читается более мягко. Например, гитара играет справа, и ее delay тоже справа. При помещении в разные места эффекта и прямого сигнала с помощью разного панорамирования, длинный delay звучит более ярко и необычно.
                </div>
                <div class="kompressiya__paragraph">
                    <h4 class="kompressiya__paragraph--title">Реверберация</h4>
                    Почему реверб так важен для микса и как уложить не укладываемое?
                </div>
                <div class="kompressiya__paragraph">
                    Когда мы входим в помещение, мы чувствуем, как оно отражает, хоть и не даем себе отчета. Звук — это колебания воздуха, а отражениям нужно от чего отражаться, поэтому реверберации не существует только в безвоздушном пространстве, среде без поверхностей или полностью заглушенном помещении.
                </div>
                <div class="kompressiya__paragraph">
                    Чем меньше ты выберешь помещение для своего объекта, тем ближе он может казаться. Комната по размеру меньше концертного зала. И мы в принципе не можем в ней так далеко отойти от объекта, как в зале. Этот опыт переносится слушателем и в микс.
                </div>
                <div class="kompressiya__paragraph">
                    Реверберация не исправит ошибки микса. Если у тебя слишком много инструментов, их партии плохо сочетаются, лежат в одном регистре и в одну долю, никакая реверберация не спасет. По сути, реверб — это дополнительный шум в миксе, а если твой трек и так шумит, грязный и мутный, то эффекты, особенно длинные, только это ухудшат. Бывает, делаешь реверб, а звук не ложится в микс. Почему? Подумай, сколько уже разных эффектов в миксе ты используешь? Часто на инструментах из библиотек и в синтах уже свои ревербы. И если таких много в миксе, то каждый из этих звуков в своем пространстве. Тогда как они могут создать цельную картину? Поэтому желательно добавлять реверб к изначально сухим инструментам.
                </div>
                <div class="kompressiya__paragraph">
                    Если хочется добавить необычного звучания, покреативить, то с помощью простого реверба, можно свернуть горы. Вот несколько способов:
                </div>

                <div class="kompressiya__paragraph">
                    <ul class="kompressiya__list">
                        <li class="kompressiya__item">Reverb в моно. Такое отражение не так часто встретишь в окружающей среде. Все, что для нашего опыта редко - особенно заметно для слуха. Если хотите выделить какой-то инструмент из микса, этот эффект в помощь! Но звучит странновато. *Как правило в связке при сведении вокала идут моно дилэй+стерео реверб. Поэтому весьма необычно сделать другую связку: стерео дилэй+моно реверб</li>
                        <li class="kompressiya__item">Reverb справа - сигнал слева. Очень необычное звучание, особенно если использовать холл или другое большое пространство. Такой способ, вероятнее всего (в зависимости от плагина реверса), возможен будет только при постановке эффекта в посыл. Сама шина с ревербом двигается по панораме в одну сторону, а прямой сигнал в другую.</li>
                        <li class="kompressiya__item">Reverb + rhythmic filter. Берем долгий реверб и в инсерт его шины ставим какой-то ритмический фильтр. Его можно синхронизировать по темпу проекта или, наоборот, рассинхронить для пущей загадочности эффекта. Таким образом можно преобразить инструмент до неузнаваемости</li>
                        <li class="kompressiya__item">Реверсивный reverb. Интересная тема, причем не обязательно для суперконцептуальной косо-музыки. Если подмешивать эффекта не очень много, то для коммерческого трека тоже можно сделать свою фишку Короткий реверб. Очень быстрый эффект с небольшим pre-delay или с его отсутствием. Используется для создание широкой стереобазы сигнала. Важно, чтобы вы не слышали сам реверб как таковой, а чисто воплощали стереобраз Reverb с длинным pre-delay. Мы начинаем слышать pre-delay, когда он более 25 мс. Но если увеличить его до масштабных величин типа от 70 и более (можно и в разы), то реверб начинает звучать отдельно от сигнала, что порой весьма необычно, особенно вкупе со сдвигом панорамы реверба или реверсом. </li>
                    </ul>
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