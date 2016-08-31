<?php $this->title = 'Редактирай публикация'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<form method="post"><br>
    <div>Заглавие:</div>
    <input type="text" name="post_title" value="<?= htmlspecialchars($this->post['title']) ?>"/>
    <div>Текст:</div>
    <textarea rows="10" name="post_content"><?= htmlspecialchars($this->post['content']) ?></textarea><br>
    <input type="text" name="post_date" value="<?= htmlspecialchars($this->post['date']) ?>"/>
    <div>Author ID:</div>
    <input type="text" name="user_id" value="<?= htmlspecialchars($this->post['user_id']) ?>"/><br/>
    <div><input type="submit" value="Редактирай">
        <a class="btn btn-danger" href="<?= APP_ROOT ?>/posts">Отказ</a>
</form>
