<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Telegram\Bot\Laravel\Facades\Telegram;


use Illuminate\Support\Facades\Log;

class CartController extends Controller
{



    public function add(Request $request, $product)//додавання товару
    {
        // отримання вмісту кошика з cookie
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // якщо вже в кошику,збільшення кількості
        if (array_key_exists($product, $cart)) {
            $cart[$product]++;
        } else {
            // інашке додати 1 шт
            $cart[$product] = 1;
        }


        $cookie = Cookie::make('cart', json_encode($cart), 60 * 24 * 7); // збереження на 7 днів

        return back()->withCookie($cookie)->with('success', 'Продукт успешно добавлен в корзину!');
    }






    public function index(Request $request)//поточний стан кошика
    {
        $cart = json_decode($request->cookie('cart'), true) ?? [];//кукі в масив

        $products = json_decode(file_get_contents(public_path('prices.json')), true)['products'];//інф про продукт

        $prices = [];
        $names = [];
        $images = [];
        foreach ($products as $product) {
            $prices[$product['name_en']] = $product['price'];
            $names[$product['name_en']] = $product['name_ua'];
            $images[$product['name_en']] = $product['image'];
        }

        return view('products.cart', ['cart' => $cart, 'prices' => $prices, 'names' => $names, 'images' => $images, 'quantities' => $cart]);
    }




    public function increase(Request $request, $product)//збільшення кількості
    {
        // отримання вмісту кошика з cookie
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        //якщо вже в корзині, збільшити кількість
        if (array_key_exists($product, $cart)) {
            $cart[$product]++;
        }

        // зберегти оновлений кошик в cookie
        $cookie = Cookie::make('cart', json_encode($cart), 60 * 24 * 7); // Сохранить на 7 дней

        return back()->withCookie($cookie);
    }


    public function decrease(Request $request, $product)//зменшення кількості
    {
        // отримання вмісту кошика з cookie
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        //якщо вже в корзині, зменшити кількість
        if (array_key_exists($product, $cart) && $cart[$product] > 0) {
            $cart[$product]--;
        }

        // якщо кількість 0, то видалити з кошика
        if ($cart[$product] == 0) {
            unset($cart[$product]);
        }

        // зберегти оновлений кошик в cookie
        $cookie = Cookie::make('cart', json_encode($cart), 60 * 24 * 7); // Сохранить на 7 дней

        return back()->withCookie($cookie);
    }



    public function totalPrice(Request $request)//ціна з н кількість 1 продукту
    {
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        $prices = json_decode(file_get_contents(public_path('prices.json')), true);

        $totalPrice = 0;
        foreach ($cart as $product => $quantity) {
            foreach ($prices['products'] as $priceInfo) {
                if ($priceInfo['name_en'] == $product) {
                    $totalPrice += $priceInfo['price'] * $quantity;
                    break;
                }
            }
        }

        return $totalPrice;
    }

    public function show()//виведення
    {
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // отримання ціни і картинок з json файлу
        $data = json_decode(file_get_contents(public_path('prices.json')), true);
        $prices = array_column($data['products'], 'price', 'name_en');
        $images = array_column($data['products'], 'image', 'name_en');
        $names = array_column($data['products'], 'name_ua', 'name_en');

        return view('cart', compact('cart', 'prices', 'images', 'names'));
    }


    public function updateCart(Request $request)
    {
        $cart = json_decode($request->cookie('cart'), true) ?? [];
        $product = $request->input('product');
        $quantity = $request->input('quantity');
        $products = json_decode(file_get_contents(public_path('prices.json')), true);

        $prices = [];
        $names = [];
        $images = [];
        foreach ($products['products'] as $prod) {
            $prices[$prod['name_en']] = $prod['price'];
            $names[$prod['name_en']] = $prod['name_ua'];
            $images[$prod['name_en']] = $prod['image'];
        }

        // оновлення кількості в кошику
        $cart[$product] = $quantity;
        $totalPrice = 0;

        // фінальна ціна
        foreach ($cart as $product => $quantity) {
            $price = isset($prices[$product]) ? $prices[$product] : 0;
            $totalPrice += $price * $quantity;
        }

        // ціна 1 продукту
        $priceForProduct = isset($prices[$product]) ? $prices[$product] * $quantity : 0;

        // збереження оновленого кошика в cookie
        return response()->json(['totalPrice' => $totalPrice, 'priceForProduct' => $priceForProduct])
            ->cookie('cart', json_encode($cart), 60);
    }



    public function remove(Request $request, $product)
    {
        // отримання вмісту кошика з cookie
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // видалення продуктів з кошика
        if (isset($cart[$product])) {
            unset($cart[$product]);
        }

        // збереження оновленого кошика в cookie
        $cookie = Cookie::make('cart', json_encode($cart), 60 * 24 * 7); // зберегти на 7 днів

        return response('', 200)->withCookie($cookie);
    }







    //повна ціна замовлення
    private function calculateTotalPrice(Request $request)
    {
        // отримання вмісту кошика з cookie
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // отримання цін продуктів
        $pricesData = json_decode(file_get_contents(public_path('prices.json')), true);
        $prices = [];
        foreach ($pricesData['products'] as $product) {
            $prices[$product['name_en']] = $product['price'];
        }

        $totalPrice = 0;

        // для кожного продукта ціна*к-кість
        foreach ($cart as $productKey => $quantity) {
            if (isset($prices[$productKey])) {
                $totalPrice += $prices[$productKey] * $quantity;
            }
        }

        return $totalPrice;
    }





    //оформити замовлення
    public function submitOrder(Request $request)
    {
        $totalPrice =  $this->calculateTotalPrice($request);
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'delivery_type' => 'required',
            'city' => 'required',
            'viddil' => 'required'
        ]);

        // отримання вмісту кошика з  cookie
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // отримання цін продуктів
        $productsData = json_decode(file_get_contents(public_path('prices.json')), true);
        $products = [];
        foreach ($productsData['products'] as $product) {
            $products[$product['name_en']] = $product['name_ua'];
        }

        // формування інформації про замовлення
        $orderInfo = [
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'phone' => $validatedData['phone'],
            'delivery_type' => $validatedData['delivery_type'],
            'city' => $validatedData['city'],
            'viddil' => $validatedData['viddil'],
            'totalPrice' => $totalPrice,
            'cart' => $cart
        ];

        // формування інформації про замовлення для відправки Telegram
        $text = "Нове замовлення!:\n";
        $text .= "Ім'я: {$orderInfo['first_name']}\n";
        $text .= "Прізвище: {$orderInfo['last_name']}\n";
        $text .= "Телефон: {$orderInfo['phone']}\n";
        $text .= "Тип доставки: {$orderInfo['delivery_type']}\n";
        $text .= "Місто: {$orderInfo['city']}\n";
        $text .= "№ відділеення/Поштомату: {$orderInfo['viddil']}\n";
        $text .= "Сума до сплати: {$orderInfo['totalPrice']}\n";
        $text .= "Кошик:\n";

        foreach ($orderInfo['cart'] as $product => $quantity) {
            $text .= "{$products[$product]}: {$quantity} шт.\n";
        }

        // відправка інформації в Telegram
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '337105280'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        $cookie = Cookie::forget('cart');

        return back()->with('success_message', 'Ваше замовлення було офрмлено!')->withCookie($cookie);
    }






}
