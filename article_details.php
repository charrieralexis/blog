<?php // article_details.php

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
require_once 'app/init.php';

if(!$id) {
    header('Location: '.BASE_URL.'index.php');
    exit();
}

$crudArticle = new Blog\DbTable\Article($connection);
$article = $crudArticle->findById($id);

include_once 'header.phtml';
?>

<section id="article" class="center">
    <article>
        <header>
            <h1><?= $article->getTitle(); ?></h1>
            <p><?= $article->getTeaser(); ?></p>
            <time>Mise à jour le <?= $article->getUpdated(); ?></time>
        </header>
        <p><?= $article->getContent(); ?></p>
    </article>
</section>

<?php include_once 'footer.phtml'; ?>