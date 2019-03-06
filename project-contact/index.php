<?php
    include "db_connection.php";

    $page_limit = 5;
    if (!empty($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    //Pagination BEGIN
    $query = $connection->query('SELECT COUNT(*) as elements FROM contacts');
    $count_result = $query->fetch();
    $count = (int) $count_result['elements'];
    if($count > $page_limit)
    {
        $offset = ($page - 1) * $page_limit;
    }

    $pager = ceil($count / $page_limit);

    //Pagination END

    $query = $connection->query(
        'SELECT * FROM contacts ORDER BY id DESC LIMIT '.$page_limit.' OFFSET '.$offset
    );
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
    <div class="pagination">
        <?php for ($index = 1; $index <= $pager; $index++): ?>
            <a href="index.php?page=<?=$index?>"><?=$index?> - bet</a>
        <?php endfor; ?>
    </div>
</body>
</html>