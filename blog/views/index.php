<main>
    <?php foreach ($this->posts as $post) : ?>
        <article>
            <h2>
                <?= htmlspecialchars($post['title']) ?>
                <? if ($post['id'] == $_SESSION['id']): ?>
                    <span class="article-control-buttons">
                        <button
                            onclick="window.location='<?= APP_ROOT ?>/posts/edit/<?= htmlspecialchars($post['id']) ?>'">Редактирай</button>
                        <button
                            onclick="window.location='<?= APP_ROOT ?>/posts/delete/<?= htmlspecialchars($post['id']) ?>'">Изтрий</button>
                    </span>
                <? endif; ?>
            </h2>
            <p><?= $post['full_name'] ?></p>
            <br/>
            <div><?= $post['content'] ?></div>
        </article>
    <?php endforeach ?>
    </table>
</main>