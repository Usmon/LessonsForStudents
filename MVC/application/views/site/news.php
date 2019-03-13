<h1>Yangiliklar</h1>
<?php foreach ($data['list_news'] as $item): ?>
    <h4><?= $item['title'] ?></h4>
    <p>
        <?= Format::cutText($item['body'], 100) ?>
    </p>
    <span> <?= Format::dateFormat($item['added_time'], 'd.m.Y') ?> </span>
    <hr>
<?php endforeach; ?>
