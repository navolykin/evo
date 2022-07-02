<?php

define('ROOT_URL', '/evo/');

$articles = [
    'first-article' => [
        'title' => 'Это первая статья - заголовок',
        'slug'  => 'first-article',
        'content' => 'Это содержание первой статьи'
    ],
    'second-article' => [
        'title' => 'Это вторая статья - заголовок',
        'slug'  => 'second-article',
        'content' => 'Это содержание второй статьи'
    ],
];

$meta = [
    '<meta charset="UTF-8">',
];

if ($_SERVER['REQUEST_URI'] === ROOT_URL) {
    $title = 'Это Домашняя страница - evo';
    $tpl = 'tpl/homepage.php';
    $menu = $articles;

} elseif($_SERVER['REQUEST_URI'] === ROOT_URL . 'first-article') {
    $title = 'Это первая статья - заголовок';
    $tpl = 'tpl/article.php';
    $article = $articles['first-article'];
    $menu = $articles;

} elseif ($_SERVER['REQUEST_URI'] === ROOT_URL . 'second-article') {
    $title = 'Это вторая статья - заголовок';
    $tpl = 'tpl/article.php';
    $article = $articles['second-article'];
    $menu = $articles;

} else {
    $title = 'Нет такой страницы';
    $tpl = 'tpl/no_page.php';
}

include_once 'Views/index.php';
