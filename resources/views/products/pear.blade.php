<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_why.css">
    <link rel="stylesheet" href="css/style_store.css">
    <link rel="stylesheet" href="css/tovar_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Грушевий джем</title>


</head>
<body>

<div class="section_green">
    <div class="logo_green">
        <img src="logogreen.png" alt="Logo">
    </div>

    <div class="hamburger-menu">
        <input id="menu_green__toggle" type="checkbox" />
        <label class="menu_green__btn" for="menu_green__toggle">
            <span></span>
        </label>
        <ul class="menu_green__box">
            <li><a class="menu_green__item" href="store">Магазин</a></li>
            <li><a class="menu_green__item" href="contacts">Контакти</a></li>
            <li><a class="menu_green__item" href="why">Чому ми?</a></li>
            <li><a class="menu_green__item" href="#">Обране</a></li>
            <li><a class="menu_green__item" href="#">Кошик</a></li>
        </ul>
    </div>




    <nav class="menu-1_green">
        <ul>
            <li><a href="#"><img src="mapG.svg">Доставка по всій Україні</a></li>
            <li><a href="#">  <img src="callG.svg">(066)709-97-35  </a></li>
            <li><a href="#"><img src="instG.svg"></a></li>
            <li><a href="#"><img src="tgG.svg"></a></li>
        </ul>
    </nav>
    <nav class="menu-2_green">
        <ul>
            <li class = "logo-in-menu_green"><img src="logogreen.png" width = "220px" height="80px"></li>
            <li><a href="store">Магазин</a></li>
            <li><a href="contacts">Контакти</a></li>
            <li><a href="why
            ">Чому ми?</a></li>
            <li class="menu-icons"><img src="heartG.svg"></li>
            <li class="menu-icons"><img src="bagG.svg"></li>
        </ul>
    </nav>
    <div class="container_tovar">
        <div class="tovar_image">
            <img src="banki/swapear_d.png">
        </div>
        <div class="tovar_info">
            <h1>ГРУШЕВИЙ ДЖЕМ</h1>
            <img class="mobile-img-tovar" src="banki/swapear.png">
            <h3>130 грн</h3>
            <a href="#" class="button_add">ДОДАТИ ДО КОШИКА</a>
            <div class="tovar_rating-p">
                <div class="tovar_rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
                <p>Відгуки: 0</p>
            </div>

        </div>
    </div>

    <div class="opis">
        <h2>ОПИС</h2>
        <p >Якщо ви шукаєте джем з легким, але насиченим смаком, то грушевий джем - ваш вибір! Він створений зі свіжих груш,
            які дають йому приємний фруктовий аромат, має ніжний і соковитий смак, який може доповнити будь-який сніданок чи десерт. <p>
    </div>

    <div class="feedback">
        <h2>Сподобалось? Поділися враженнями з іншими!</h2>
        <p>Відгуки: 0</p>
        <div class="rating2">
            <p>Оцінка:</p>
            <div class="stars2">
                <span class="star2">&#9734;</span>
                <span class="star2">&#9734;</span>
                <span class="star2">&#9734;</span>
                <span class="star2">&#9734;</span>
                <span class="star2">&#9734;</span>
            </div>
        </div>
        <input type="text" placeholder="Як до Вас звертатися?">
        <input type="text" placeholder="Напишіть Ваш відгук про товар...">
        <div class="button-container">
            <button class="ok">OK</button>
        </div>
        <div class="vidhuky">
            <p>Поки що відгуки відсутні</p>
        </div>
    </div>

</div>


<footer class="footer">
    <div class="container4">
        <div class="row-1">
            <p><img src="np.svg">Доставка новою поштою від 50 грн</p>
            <p><img src="clock.svg">Відправка в день замовлення - при замовленні до 18:00 по буднях<br> і до 16:00 по вихідних</p>
            <p><img src="pin.svg">Доставка по всій Україні</p>
        </div>
        <hr class="footer-line">
        <div class="row-2">
            <div class="col1">
                <img src="logoWT.svg" alt="Логотип" width="196" height="60">
                <p>— магазин найкращих крафтових джемів</p>
            </div>
            <div class="col2">
                <h4>Смаки</h4>
                <ul>
                    <li><a href="lemon">Лимон</a></li>
                    <li><a href="apricot">Абрикос</a></li>
                    <li><a href="peach">Персик</a></li>
                    <li><a href="apple">Яблуко</a></li>
                    <li><a href="pumpkin">Гарбуз</a></li>
                    <li><a href="blueberry">Чорниця</a></li>
                    <li><a href="raspberry">Малина</a></li>
                    <li><a href="mandarin">Мандарин</a></li>
                    <li><a href="pear">Груша</a></li>
                    <li><a href="aiva">Айва</a></li>
                    <li><a href="plum">Слива</a></li>
                </ul>
            </div>
            <div class="col3">
                <h4 >Інформація</h4>
                <ul>
                    <a href="{{ route('home') }}">Про нас</a>
                    <li><a href="contacts">Фізичний магазин</a></li>
                    <li><a href="why">Переваги</a></li>
                    <li><a href="contacts">Контакти</a></li>
                </ul>
            </div>
            <div class="col4">
                <p>Доставка по всій Україні</p>
                <p>Працюємо щодня</p>
                <p>066-709-97-35</p>
                <p>Запитання? Дзвони або пиши з 9 до 21</p>
                <p>Без вихідник</p>
            </div>
        </div>
    </div>
</footer>


</body>




</html>