<?php
include "db_connection.php";

//Agar post kelsa
if ($_POST) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $query = $connection->prepare('INSERT INTO contacts (first_name, last_name, phone, address, email) VALUES (?, ?, ?, ?, ?)');
    $result = $query->execute([$first_name, $last_name, $phone, $address, $email]);

    if ($result) {
        header('Location: index.php');
    }
    else
    {
        $error_message = 'XATOLIK Bo`ldi!';
    }

}
?>
<html>
<head>
    <title>Create contact</title>
</head>
<body>
    <?php include "menu.php"; ?>

    <?php if (isset($error_message)): ?>
        <?= $error_message ?>
        <!-- @TODO ALERT ERROR-->
    <?php endif; ?>
    <form method="POST">
        <label>
            First name:
            <input required type="text" name="first_name">
        </label> <br>
        <label>
            Last name:
            <input required type="text" name="last_name">
        </label> <br>
        <label>
            Phone:
            <input required type="text" name="phone">
        </label> <br>
        <label>
            Address:
            <input type="text" name="address">
        </label> <br>
        <label>
            Email:
            <input type="email" name="email">
        </label> <br>
        <button type="submit">Create</button>
    </form>
</table>
</body>
</html>