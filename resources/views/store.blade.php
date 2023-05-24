<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_why.css">
    <link rel="stylesheet" href="css/style_store.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Товари</title>


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
    <div class="container_store">
        <h1>Наші джеми</h1>
        <div class="row_store">
            <a href="apricot">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('apricot');  ?>

                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>


                        </div>
                        <img src="banki/apricot.png">
                        <h3>Абрикосовий джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>
            <a href="aiva">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('aiva');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>

                        </div>
                        <img src="banki/aiv.png">
                        <h3>Айвовий джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>

            <a href="peach">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('peach');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>

                        </div>
                        <img src="banki/pea.png">
                        <h3>Персиковий джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>
            <a href="pumpkin">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('pumpkin');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>

                        </div>
                        <img src="banki/pump.png">
                        <h3>Ґарбузовий джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>
            <a href="pear">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('pear');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>
                        </div>
                        <img src="banki/pr.png">
                        <h3>Грушевий джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>

            <a href="lemon">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('lemon');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>
                        </div>
                        <img src="banki/lem.png">
                        <h3>Лимонний джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>
            <a href="mandarin">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('mandarin');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>
                        </div>
                        <img src="banki/mandaryn.png">
                        <h3>Мандариновий джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>
            <a href="apple">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php

                            $productData = $productController->show('apple');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>
                        </div>
                        <img src="banki/yabloko.png">
                        <h3>Яблучний джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>


            <a href="plum">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('plum');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>
                        </div>
                        <img src="banki/slyva.png">
                        <h3>Сливовий джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>

            <a href="raspberry">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php

                            $productData = $productController->show('raspberry');  ?>

                            <span class="average-rating"><?php echo $productData['average_rating']; ?> </span>
                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>
                        </div>
                        <img src="banki/mal.png">
                        <h3>Малиновий джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>

            <a href="blueberry">
                <div class="column_store">
                    <div class="card_store">
                        <div class="rating">
                            <?php
                            $productController = new \App\Http\Controllers\ProductController();
                            $productData = $productController->show('blueberry');  ?>


                            <span class="rating-stars"><?php echo $productData['stars']; ?> </span>
                        </div>
                        <img src="banki/chornytsia.png">
                        <h3>Чорничний джем</h3>
                        <p>130 грн</p>
                    </div>
                </div>
            </a>



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
