<?php
    include 'db.php';
    if(isset($_POST['full_name']) && isset($_POST['phone']))
    {
        $name = $_POST['full_name'];
        $phone = $_POST['phone'];
        $query = $connection->query('INSERT INTO contacts(full_name, phone) VALUES("'.$name.'", "'.$phone.'")');
        header('Location: index.php');
        exit;
    }
?>

<html>
<head>
    <title>Qo'shish</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="Nomi" name="full_name" required>
        <input type="text" placeholder="Telefon" name="phone" required>
        <button type="submit">Saqlash</button>
    </form>
</body>
</html>
