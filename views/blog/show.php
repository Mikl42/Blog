
<h1><?= $data['post']->title ?></h1>
<div>
    <?php foreach ($data['post']->getTags() as $tag): ?>
        <span class="badge bg-dark mb-1"><?= $tag->name ?></span>
        <?php endforeach; ?>
    </div>
<small>Ecrit le : <?= $data['post']->created_at ?> </small>
<p class="mt-3"><?= $data['post']->content ?></p>