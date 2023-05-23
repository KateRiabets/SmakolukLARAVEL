<?php
//отримання коментарів з файлу
if (!function_exists('get_comments')) {
    function get_comments() {
        if (!file_exists('comments.json')) {
            return [];
        }

        $comments_json = file_get_contents('comments.json');
        $comments = json_decode($comments_json, true) ?? [];
        return $comments;
    }
}

//збереження коментарів у файл
if (!function_exists('save_comments')) {
    function save_comments($comments) {
        $comments_json = json_encode($comments, JSON_UNESCAPED_UNICODE);
        file_put_contents('comments.json', $comments_json);
    }
}

//обробка відправки форми
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $comment = htmlspecialchars(trim($_POST['comment']));
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;

    if (!empty($name) && !empty($comment) && $rating > 0) {
        $new_comment = ['name' => $name, 'comment' => $comment, 'rating' => $rating];

        $comments = get_comments();
        $comments[] = $new_comment;
        save_comments($comments);
    }

    header('Location: apricot');
    exit;
}

$comments = get_comments();



$total_rating = 0;
$total_reviews = count($comments);

foreach ($comments as $comment) {
    $total_rating += $comment['rating'];
}

$average_rating = $total_reviews > 0 ? round($total_rating / $total_reviews, 1) : 0;



if (!function_exists('renderStars')) {
    function renderStars($average_rating) {
        $rounded_rating = round($average_rating);

        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rounded_rating) {
                echo '&#9733;';
            } else {
                echo '&#9734;';
            }
        }
    }
}


?>
