<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($product)
    {
        $comments = $this->getComments($product);

        $totalRating = 0;
        $totalReviews = count($comments);

        foreach ($comments as $comment) {
            $totalRating += $comment['rating'];
        }

        $averageRating = $totalReviews > 0 ? round($totalRating / $totalReviews, 1) : 0;

        return view('product', [
            'comments' => $comments,
            'averageRating' => $averageRating
        ]);
    }

    public function store(Request $request, $product)
    {
        $name = htmlspecialchars(trim($request->input('name')));
        $comment = htmlspecialchars(trim($request->input('comment')));
        $rating = $request->input('rating') ? intval($request->input('rating')) : 0;

        if (!empty($name) && !empty($comment) && $rating > 0) {
            $newComment = ['name' => $name, 'comment' => $comment, 'rating' => $rating];

            $comments = $this->getComments($product);
            $comments[] = $newComment;
            $this->saveComments($comments, $product);
        }

        return redirect('/product/' . $product);
    }

    private function getComments($product)
    {
        $product .= ' comments';
        if (!file_exists(storage_path('app/comments/'.$product.'.json'))) {
            return [];
        }

        $commentsJson = file_get_contents(storage_path('app/comments/'.$product.'.json'));
        $comments = json_decode($commentsJson, true) ?? [];

        return $comments;
    }

    private function saveComments($comments, $product)
    {
        $product .= ' comments';
        $commentsJson = json_encode($comments, JSON_UNESCAPED_UNICODE);
        file_put_contents(storage_path('app/comments/'.$product.'.json'), $commentsJson);
    }
}
