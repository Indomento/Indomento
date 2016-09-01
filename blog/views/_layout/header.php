<!DOCTYPE html>
<html>

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/styles.css"/>
    <link rel="icon" href="<?= APP_ROOT ?>/content/images/site-logo.png" />

    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="<?= APP_ROOT ?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>

</head>

<body>
<header>
	<span class="logo">
        <a href="<?= APP_ROOT ?>"><img src="<?= APP_ROOT ?>/content/images/site-logo.png"></a>
        <h2>Indomento</h2>
        <h3>Здравейте, <?php
            if (isset($_SESSION['username'])) {
                echo htmlspecialchars($_SESSION['username']);
            } else {
                echo 'Guest';
            }
            ?>
        </h3>
    </span>
    <ul>
        <li><a href="<?= APP_ROOT ?>/">Начало</a></li>
        <?php if ($this->isLoggedIn) : ?>
            <li><a href="<?= APP_ROOT ?>/posts">Публикации</a></li>
            <li><a href="<?= APP_ROOT ?>/posts/create">Създай нова публикация</a></li>
            <li><a href="<?= APP_ROOT ?>/users">Потребители</a></li>
        <?php else: ?>
            <li><a href="<?= APP_ROOT ?>/users/login">Вход</a></li>
            <li><a href="<?= APP_ROOT ?>/users/register">Регистрация</a></li>
        <?php endif; ?>
        <?php if ($this->isLoggedIn) : ?>
            <li>
                <a href="<?= APP_ROOT ?>/users/logout">Изход</a>
            </li>
        <?php endif; ?>
    </ul>
    <hr/>
    <ul>
        <?php foreach ($this->postsSidebar as $post) : ?>
            <li>
                <a href="<?= APP_ROOT ?>/home/view/<?= $post['id'] ?>"><?= htmlentities($post['title']) ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</header>

<?php require_once('show-notify-messages.php'); ?>
