<?php

/** @var \App\Model\Note $note */
/** @var \App\Service\Router $router */

$title = 'Create note';
$bodyClass = "edit";

ob_start(); ?>
    <h1>Create Note</h1>
    <form action="<?= $router->generatePath('note-create') ?>" method="post" class="edit-form">
        <?php require __DIR__ . DIRECTORY_SEPARATOR . '_form.html.php'; ?>
        <input type="hidden" name="action" value="note-create">
    </form>

    <a href="<?= $router->generatePath('note-index') ?>">Back to list</a>
<?php $main = ob_get_clean();

include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'base.html.php';
