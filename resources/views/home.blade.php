<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adapt.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Smakoluk.ua - крафтові джеми</title>


</head>
<body>

<div class="section-1">
    <div class="logo">
        <img src="logoW.png" alt="Logo">
    </div>

    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <ul class="menu__box">
            <li><a class="menu__item" href="store">Магазин</a></li>
            <li><a class="menu__item" href="contacts">Контакти</a></li>
            <li><a class="menu__item" href="why">Чому ми?</a></li>
            <li><a class="menu__item" href="#">Обране</a></li>
            <li><a class="menu__item" href="cart">Кошик</a></li>
        </ul>
    </div>




    <nav class="menu-1">
        <ul>
            <li><a href="#"><img src="map.svg">Доставка по всій Україні</a></li>
            <li><a href="#">  <img src="call.svg">(066)709-97-35  </a></li>
            <li><a href="#"><img src="inst.svg"></a></li>
            <li><a href="#"><img src="tg.svg"></a></li>
        </ul>
    </nav>
    <nav class="menu-2">
        <ul>
            <li class = "logo-in-menu"><img src="logoW.png" width = "220px" height="80px"></li>
            <li><a href="store">Магазин</a></li>
            <li><a href="contacts">Контакти</a></li>
            <li><a href="why">Чому ми?</a></li>
            <li class="menu-icons"><img src="heart.svg"></li>

            <li>
                <a href="cart" class="menu-icons" style="text-decoration: none;">
                    <span id="cart-counter-white" class="cart-counter">0</span>
                    <img src="bag.svg">
                </a>
            </li>

            <script>
                window.onload = function() {
                    fetch('/cart-counter')
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('cart-counter-white').textContent = data.totalItems;
                        });
                }
            </script>

        </ul>
    </nav>




    <div class="container">
        <h1>Крафтові джеми<br> з натуральних<br> продуктів</h1>

        <a href="store" class="button1">Обери свій смак</a>
    </div>
</div>

<div class="section-2">
    <div class="container2">
        <div class="content">
            <div class="text-wrapper">
                <h2 class="section-title">Наша продукція</h2>
                <h2 class="section-subtitle">Натуральність і якість</h2>
                <p class="section-text">Крафтовий джем від «Smakoluk» виготовляється виключно з натуральних, якісних продуктів.
                    Усі продукти вирощені на власному господарстві, дбайливо зібрані й майстерно приготовані, щоб ви їли лише найкраще.
                    Ми пропонуємо вам джеми з 11 різними смаками: від абрикоса та яблука до гарбуза та мандаринів.
                    Всі вони різні, але смакують однаково чудово.<br><br> Наш крафтовий джем є ідеальним варіантом для смачного сніданку, обіду чи вечері,
                    особливо якщо доповнювати ним млинці чи печиво. Він підіймає настрій навіть в найхолодніший вечір та є не тільки смачним, а й корисним!
                    Кожна банка містить дозу вітамінів, достатню на цілий день, тому їсти джем від «Smakoluk» - це поєднання приємного з корисним.</p>
                <img src="sec2.png" class="mobile-img">
                <div class="img-wrapper"><img src="sec2_mob.png" class="mobile-ver-img"></div>

                <div class="block-button2"><a href="why" class="button2">Дізнатися більше</a></div>
            </div>
            <div class="image-wrapper">
                <img src="sec2.png">
            </div>
        </div>
    </div>
</div>




<div class="section-3">
    <div class="container3">
        <div class="content2">
            <div class="text-wrapper2">
                <h2 class="section-word">Абрикос</h2>
                <p class="section-text2">Хто ж не любить абрикосовий джем? Він не лише має неймовірний смак, але й зміцнює імунітет,
                    підтримує функцію кровотворення,  покращує зір та стан шкіри. Не кажучи вже про те, що таке частування прекрасно смакує з
                    млинцями, печивом та іншими кондитерськими виробами. Абрикосовий джем вдало прикрасить ваші улюблені страви і подарує справжнє задоволення
                    та чудовий настрій вам та вашій родині.</p>
                <img src="banki/apr.png" id="jam-mobile">

                <a href="#" class="button3">Хочу!</a>
            </div>
            <div class="image-wrapper2">
                <img  id ="jam" src="banki/apr.png" alt="Абрикос" >
            </div>


        </div>


    </div>
    <div class="rows1and2">
        <div class="row1">
            <script src="script.js"></script>
            <div class="item" onclick="changeText('1')" >
                <img src="fruit-icon/lemon2.svg" >
                <div class="caption">Лимон</div>
            </div>
            <div class="item" id="apr" onclick="changeText('2')">
                <img src="fruit-icon/apricot.svg" >
                <div class="caption">Абрикос</div>
            </div>
            <div class="item" onclick="changeText('3')">
                <img src="fruit-icon/sliv2.svg" >
                <div class="caption">Слива</div>
            </div>
            <div class="item" onclick="changeText('4')">
                <img src="fruit-icon/apple2.svg" >
                <div class="caption">Яблуко</div>
            </div>
            <div class="item" onclick="changeText('5')">
                <img src="fruit-icon/pumpkin2.svg" >
                <div class="caption">Гарбуз</div>
            </div>

            <div class="item" onclick="changeText('9')">
                <img src="fruit-icon/pear2.svg" alt="Image 9">
                <div class="caption">Груша</div>
            </div>

        </div>


        <!-- Второй ряд из 5 картинок -->
        <div class="row2">
            <div class="item" onclick="changeText('7')">
                <img src="fruit-icon/rasp2.svg" alt="Image 7">
                <div class="caption">Малина</div>
            </div>
            <div class="item" onclick="changeText('8')">
                <img src="fruit-icon/mand2.svg" alt="Image 8">
                <div class="caption">Мандарин</div>
            </div>
            <div class="item" onclick="changeText('6')">
                <img src="fruit-icon/blue2.svg" >
                <div class="caption">Чорниця</div>
            </div>
            <div class="item" onclick="changeText('10')">
                <img src="fruit-icon/aiva2.svg" alt="Image 10">
                <div class="caption">Айва</div>
            </div>
            <div class="item" onclick="changeText('11')">
                <img src="fruit-icon/peach2.svg" alt="Image 11">
                <div class="caption">Персик</div>
            </div>
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




<script src="{{ asset('js/script.js') }}"></script>


</body>




</html>
