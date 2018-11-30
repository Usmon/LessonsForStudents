<?php
    include 'db.php';

    $query = $connection->query('SELECT * FROM contacts')->fetchAll();
?>
<html>
<head>
    <title>Contact list</title>
</head>
<body>
<p><a href="insert.php">Qo'shish</a></p>
    <table border="1px">
        <thead>
            <th>ID</th>
            <th>Ismi</th>
            <th>Telefon</th>
            <th>Amallar</th>
        </thead>
        <tbody>
            <?php foreach($query as $item): ?>
            <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['full_name']?></td>
                <td><?=$item['phone']?></td>
                <td>
                    <a href="update.php?id=<?=$item['id']?>">O'zgartirish</a>
                    <a href="delete.php?id=<?=$item['id']?>">O'chirish</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>