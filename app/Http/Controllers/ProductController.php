<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($product)
    {
        $commentsPath = app_path("comments/{$product} comments.json");

        $comments = file_exists($commentsPath) ? json_decode(file_get_contents($commentsPath), true) : [];
        if ($comments === null) {
            $comments = [];
        }
        $total_reviews = count($comments);
        $average_rating = 0;
        if (count($comments) > 0) {
            $total_rating = 0;
            foreach ($comments as $comment) {
                $total_rating += $comment['rating'];
            }
            $average_rating = round($total_rating / count($comments), 2);
        }

        $stars = $this->renderStars($average_rating);

        return view('products.' . $product, ['comments' => $comments, 'average_rating' => $average_rating, 'stars' => $stars, 'total_reviews' => $total_reviews]);
    }

    public function renderStars($rating)
    {
        $output = '';
        for ($i = 1; $i <= 5; $i++) {
            if ($rating >= $i) {
                $output .= '<span class="star">&#9733;</span>';  // solid star
            } else {
                $output .= '<span class="star">&#9734;</span>';  // empty star
            }
        }
        return $output;
    }


    public function store(Request $request, $product)
    {
        // Проверяем входные данные на соответствие набору правил
        $validated = $request->validate([
            'name' => 'required|max:255',
            'comment' => 'required',
            'rating' => 'required|numeric|between:1,5',
        ]);

        // Сохраняем комментарий в файле
        $commentsPath = app_path("comments/{$product} comments.json");
        $comments = file_exists($commentsPath) ? json_decode(file_get_contents($commentsPath), true) : [];
        if ($comments === null) {
            $comments = [];
        }
        array_push($comments, $validated);
        file_put_contents($commentsPath, json_encode($comments, JSON_PRETTY_PRINT));

        // Перенаправляем пользователя обратно на страницу товара
        return back()->with('success', 'Ваш комментарий был успешно добавлен!');
    }



    public function CartCounter(Request $request) {
        $cart = json_decode($request->cookie('cart'), true) ?? [];
        $totalItems = array_sum($cart);

        return response()->json(['totalItems' => $totalItems]);
    }



}
