<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_why.css">
    <link rel="stylesheet" href="css/order_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Оформлення замовлення</title>


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
            <li><a class="menu_green__item" href="cart">Кошик</a></li>
        </ul>
    </div>

    <nav class="menu-1_green">
        <ul>
            <li><a href="#"><img src="mapG.svg">Доставка по всій Україні</a></li>
            <li><a href="#"><img src="callG.svg">(066)709-97-35</a></li>
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

            <li>
                <a href="cart" class="menu-icons">
                    <img src="bagG.svg">
                </a>
            </li>


        </ul>
    </nav>



    <div class="container_order">
        <h1>Оформлення замовлення</h1>
        <table class="order_table">
            <tr><th> </th>
                <th>Фото</th>
                <th>Назва</th>
                <th>Кількість</th>
                <th>Ціна</th>
            </tr>

{{--            заповнення таблиці--}}
            @if(!empty($cart))
                @php
                    $totalPrice = 0;
                @endphp
               @foreach($cart as $product => $quantity)
                    @php
                       $price = isset($prices[$product]) ? $prices[$product] : 0;
                        $totalPrice += $price * $quantity;
                    @endphp
                    <tr>

                        <td><button data-product="{{ $product }}" class="remove-product"><img src="greenCross.png"></button></td>

                        <td><img src="banki/{{ $images[$product] ?? 'default.png' }}" alt="Фото товару"></td>
                        <td>{{ $names[$product] ?? $product }}</td>
                        <td>
                            <div class="counter">
                                <button class="minus update-quantity" data-direction="down"><i class="fas fa-caret-down"></i></button>
                                <input type="text" value="{{ $quantity }}" class="quantity_input" data-product="{{ $product }}" data-price="{{ $prices[$product] }}">

                                <button class="plus update-quantity" data-direction="up"><i class="fas fa-caret-up"></i></button>
                            </div>
                        </td>
                        <td class="product-price">{{ $price * $quantity }} грн</td>
                    </tr>
                @endforeach

                <tr>
                    <td class="total_price" colspan="5">Сума <span id="total-price">{{ $totalPrice }}</span> грн</td>
                </tr>
            @else
                <tr>
                    <td colspan="5">Ваша кошик порожній</td>
                </tr>
            @endif

        </table>



        <div class="second_column">
            <form action="/submit-order" method="POST">
                @csrf
                <div class="text_block">
                    <h2>Контактні дані отримувача</h2>
                    <hr>
                    <div class="form_group">
                        <label for="first_name">Ім'я:</label>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div class="form_group">
                        <label for="last_name">Прізвище:</label>
                        <input type="text" id="last_name" name="last_name">
                    </div>
                    <div class="form_group">
                        <label for="phone">Телефон:</label>
                        <input type="text" id="phone" name="phone">
                    </div>
                </div>

                <div class="text_block">
                    <h2>Доставка(за тарифами Нової пошти)</h2>
                    <hr>
                    <div class="form_group">
                        <label>Нова пошта:</label><br>
                        <input type="radio" id="type1" name="delivery_type" value="У відділенні">
                        <label for="type1">У відділенні Нової пошти</label>
                        <input type="radio" id="type2" name="delivery_type" value="Кур'єром Нової пошти">
                        <label for="type2">Кур'єром Нової пошти</label>
                        <input type="radio" id="type3" name="delivery_type" value="В поштомат Нової пошти">
                        <label for="type3">В поштомат Нової пошти</label>
                    </div>
                    <div class="form_group">
                        <label for="city">Місто:</label>
                        <input type="text" id="city" name="city">
                    </div>
                    <div class="form_group">
                        <label for="viddil">Відділення:</label>
                        <input type="text" id="viddil" name="viddil">
                    </div>
                </div>
                <div class="text_block">
                    <h2>Оплата</h2>
                    <p>Оплата відбувається при отриманні товару і складається з ціни доставки та суми замовлення.
                </div>
                <button type="submit" class="button_order">ОФОРМИТИ ЗАМОВЛЕННЯ</button>
            </form>

        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        window.onload = function() {
            const counters = document.querySelectorAll('.counter');

            let totalSum = parseFloat(document.querySelector('#total-price').innerText);//загальна вартість замовлення

            counters.forEach(counter => {//отримання
                const minusBtn = counter.querySelector('.minus');
                const plusBtn = counter.querySelector('.plus');
                const input = counter.querySelector('.quantity_input');
                const product = input.dataset.product;// айді продукта
                const pricePerItem = parseFloat(input.dataset.price);
                let quantity = parseInt(input.value);//поточна к-кість товару
                const priceCell = counter.closest('tr').querySelector('.product-price');//загальна вартість н кількості 1 товару

                function updateCart() {
                    fetch('/update-cart', {
                        method: 'POST',
                        body: JSON.stringify({
                            product: product,
                            quantity: quantity
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        credentials: 'same-origin',
                    })
                        .then(response => response.json())
                        .then(data => {
                            document.querySelector('#total-price').innerText = Math.round(totalSum);//після відповіді сервера оновлення загальной вартості замовлення
                        });
                }

                minusBtn.addEventListener('click', function() {//зменшення кількості
                    if (quantity > 0) {
                        quantity--;
                        input.value = quantity;
                        let currentProductTotal = pricePerItem * quantity;
                        priceCell.innerText = currentProductTotal + ' грн';
                        totalSum -= pricePerItem;
                        document.querySelector('#total-price').innerText = Math.round(totalSum);
                        updateCart();
                    }
                });

                plusBtn.addEventListener('click', function() {//збільшення кількості
                    quantity++;
                    input.value = quantity;
                    let currentProductTotal = pricePerItem * quantity;
                    priceCell.innerText = currentProductTotal + ' грн';
                    totalSum += pricePerItem;
                    document.querySelector('#total-price').innerText = Math.round(totalSum);
                    updateCart();
                });
            });
        };


        $(document).ready(function() {//видалення товару
            $('.remove-product').on('click', function() {
                const product = $(this).data('product');//айді товару який видаляється

                fetch('/cart/remove/' + product, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    credentials: 'same-origin',
                })
                    .then(response => {

                        if (!response.ok) {
                            throw new Error("HTTP error " + response.status);
                        }

                        location.reload();
                    })
                    .catch(function() {

                        alert("Удаление не было выполнено. Пожалуйста, повторите попытку.");
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

</div>
</body>
</html>

