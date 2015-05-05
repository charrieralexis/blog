<?php // index.php
require_once 'app/init.php';
include_once 'header.phtml';

$crudArticle = new Blog\DbTable\Article($connection);

?>

    <section id="articles" class="center">
    <?php foreach ($crudArticle->findAll() as $a) : ?>
        <?php if ($a->isActive()) : ?>
        <article>
            <header>
                <h1><?= $a->getTitle() ?></h1>
                <p><?= $a->getTeaser() ?></p>
            </header>
            <div>
                <a class="right" href="<?= BASE_URL . 'article/' . $a->getId() ?>">Read more</a>
            </div>
        </article>
        <?php endif; ?>
    <?php endforeach; ?>
    </section>

<?php include_once 'footer.phtml'; ?>
