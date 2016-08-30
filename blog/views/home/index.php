<main>
    <?php $this->title = 'Добре дошли'; ?>

    <h1><?= htmlspecialchars($this->title) ?></h1>

    <?php foreach ($this->posts as $post) : ?>
        <h2 class="title"><?= htmlentities($post['title']) ?></h2>
        <div class="date">
            <i>от</i> <?= htmlentities($post['full_name']) ?>
            <i>в</i><?= (new DateTime($post['date']))->format('H:i') ?>
            <i>на</i> <?= (new DateTime($post['date']))->format('d.m.Y') ?>
        </div>
        <p class="content"><?= $post['content'] ?></p>
    <?php endforeach ?>
</main>




