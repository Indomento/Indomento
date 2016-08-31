<?php $this->title = 'Създаване на нова публикация'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post" > <br/>
    <div>Заглавие:</div>
    <input type="text" class="form-control" name="post_title" />
    <br/>
    <div>Текст:</div>
    <textarea rows=10 name="post_content"></textarea>
    <div>
        <input type="submit" value="Създай" class="btn btn-success"/>
        <a class="btn btn-danger" href="<?=APP_ROOT?>/posts">Отказ</a>
    </div>
</form>
