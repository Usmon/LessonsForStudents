<?php
    include "db_connection.php";
    $query = $connection->query('SELECT * FROM contacts ORDER BY id DESC');
    $list = $query->fetchAll();
?>
<html>
<head>
    <title>List of contacts</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach ($list as $contact): ?>
                <tr>
                    <td><?= $contact['id'] ?></td>
                    <td><?= $contact['first_name'] ?></td>
                    <td><?= $contact['last_name'] ?></td>
                    <td><?= $contact['phone'] ?></td>
                    <td><?= $contact['address'] ?></td>
                    <td><?= $contact['email'] ?></td>
                    <td>
                        <a href="update.php?id=<?=$contact['id']?>">Update</a> |
                        <a href="delete.php?id=<?=$contact['id']?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>