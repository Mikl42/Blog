<h1>Formulaire <?= $data['post']->title ?></h1>

<form action="/admin/posts/edit/<?= $data['post']->id ?>" method="POST">
    <div class="form-group my-3">
        <label for="titre">Titre de l'article</label>
        <input type="text" class="form-control" name="title" value="<?= $data['post']->title ?>">
    </div>
    <div class="form-group my-3">
        <label for="content">Contenu de l'article</label>
        <textarea name="content" id="content" rows="8" class="form-control"><?= $data['post']->content ?></textarea>
    </div>
    <div class="form-group my-3">
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </div>
</form>