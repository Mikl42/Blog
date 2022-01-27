<h1><?= $data['tag']->name ?></h1>
<?php foreach ($data['tag']->getPosts() as $post): ?>
    <article class="card mb-3">
        <div class="card-body">
            <a href="/posts/<?= $post->id ?>"><?= $post->title ?></a>
        </div>
    </article>
<?php endforeach; ?>