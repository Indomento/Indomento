<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/site-logo.png"
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
	<a href="<?=APP_ROOT?>"><img src="<?=APP_ROOT?>/content/images/site-logo.png"></a> 
    <h2>Indomento</h2>
    <h3>Здравейте, <?php
        if(isset($_SESSION['username'])){
            echo htmlspecialchars($_SESSION['username']);
        } else{
            echo 'Guest';
        }
        ?>
    </h3>
    <ul>
        <li><a href="<?=APP_ROOT?>/">Начало</a></li>
    <?php if ($this->isLoggedIn) : ?>
        <li><a href="<?=APP_ROOT?>/posts">Публикации</a></li>
        <li><a href="<?=APP_ROOT?>/posts/create">Създай нова публикация</a></li>
        <li><a href="<?=APP_ROOT?>/users">Потребители</a></li>
    <?php else: ?>
        <li><a href="<?=APP_ROOT?>/users/login">Вход</a></li>
        <li><a href="<?=APP_ROOT?>/users/register">Регистрация</a></li>
    <?php endif; ?>
    <?php if ($this->isLoggedIn) : ?>
        <li>
            <a href="<?=APP_ROOT?>/users/logout">Изход</a>
        </li>
    <?php endif; ?>
    </ul>
    <hr />
    <ul>
    <?php foreach ($this->postsSidebar as $post) : ?>
        <li>
            <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?=htmlentities($post['title']) ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</header>

<?php require_once('show-notify-messages.php'); ?>
