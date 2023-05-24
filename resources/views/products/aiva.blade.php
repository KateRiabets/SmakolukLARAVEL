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

    <title>Айвовий джем</title>


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
            <li><a href="why">Чому ми?</a></li>
            <li class="menu-icons"><img src="heartG.svg"></li>
            <li class="menu-icons"><img src="bagG.svg"></li>
        </ul>
    </nav>
    <div class="container_tovar">
        <div class="tovar_image">
            <img src="banki/swaiva_d.png">
        </div>
        <div class="tovar_info">
            <h1>АЙВОВИЙ ДЖЕМ</h1>
            <img class="mobile-img-tovar" src="banki/swaiva.png">
            <h3>130 грн</h3>
            <a href="#" class="button_add">ДОДАТИ ДО КОШИКА</a>
            <div class="tovar_rating-p">

                <div class="tovar_rating">
                    <span class="average-rating"><?php echo $average_rating; ?> </span>
                    <span class="rating-stars"><?php echo $stars; ?></span>

                </div>

                <p>Відгуки: <?php echo $total_reviews; ?></p>
            </div>

        </div>
    </div>

    <div class="opis">
        <h2>ОПИС</h2>
        <p >Цей джем виготовлений зі свіжих айв, які мають пряний, витончений смак. Він має чарівний аромат, який сповільнює
            час і забезпечує вам моменти відпочинку. Цей джем - ідеальний вибір для тих, хто хоче зануритися в світ приголомшливого смаку.</p>
    </div>

    <div class="feedback">
        <h2>Сподобалось? Поділися враженнями з іншими!</h2>
        <p>Відгуки: <?php echo $total_reviews; ?></p>
        <div class="rating2">
            <p>Оцінка:</p>
            <div class="stars2">
                <span class="star2" data-rating="1">&#9734;</span>
                <span class="star2" data-rating="2">&#9734;</span>
                <span class="star2" data-rating="3">&#9734;</span>
                <span class="star2" data-rating="4">&#9734;</span>
                <span class="star2" data-rating="5">&#9734;</span>
            </div>
        </div>

        <div>
            <div>
                <form action="" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Як до Вас звертатися?">
                    <input type="text" name="comment" placeholder="Напишіть Ваш відгук про товар...">
                    <input type="hidden" name="rating" id="rating" value="0" required>
                    <div class="button-container">
                        <button class="ok">OK</button>
                    </div>
                </form>
            </div>

        <div class="vidhuky">
            @if(count($comments) > 0)
                @foreach($comments as $com)
                    <div class="comment">
                        <div class="comment-header">
                            <p class="comment-name">{{ $com['name'] }}</p>
                            <p class="comment-rating">
                                @for ($i = 1; $i <= $com['rating']; $i++)
                                    &#9733;
                                @endfor
                                @for ($i = $com['rating'] + 1; $i <= 5; $i++)
                                    &#9734;
                                @endfor
                            </p>
                        </div>
                        <div class="comment-text">{{ $com['comment'] }}</div>
                    </div>
                @endforeach
            @else
                <p>Пока отзывов нет</p>
            @endif
        </div>

    </div>

</div>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.star2');
        const ratingInput = document.getElementById('rating');

        stars.forEach((star, index) => {
            star.addEventListener('click', function() {
                const rating = 5 - parseInt(star.dataset.rating) + 1;
                ratingInput.value = rating;

                stars.forEach((s, i) => {
                    if (i >= index) {
                        s.classList.add('selected');
                        s.innerHTML = '&#9733;';
                    } else {
                        s.classList.remove('selected');
                        s.innerHTML = '&#9734;';
                    }
                });
            });
        });
    });
</script>







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
