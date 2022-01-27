<h1>Les Articles</h1>
<?php foreach ($data['posts'] as $post): ?>
    <article class="card mb-3">
        <div class="card-body">
            <h2><?= $post->title ?></h2>
            <div>
                <?php foreach ($post->getTags() as $tag): ?>
                <a href="/tags/<?= $tag->id ?>"><span class="badge bg-dark mb-1"><?= $tag->name ?></span></a>
                <?php endforeach; ?>
            </div>
            <small class="badge bg-dark">Ecrit le : <?= $post->getCreatedAt() ?></small>
            <p class="mt-2"><?= $post->getExcerpt() ?></p>
            <?= $post->getButton("Lire Plus") ?>
        </div>
    </article>
<?php endforeach; ?>