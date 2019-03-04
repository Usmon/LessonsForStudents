<?php
include "db_connection.php";
$id = $_GET['id'];
if(empty($id)) {
    echo 'ID YOQ'; exitt();
}

if(!$_POST) {
    $query = $connection->query('SELECT * FROM contacts WHERE id = '. $id);
    $contact = $query->fetch();
}
else
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $query = $connection->prepare(
            'UPDATE contacts SET first_name = ?, last_name = ?, phone = ?, address = ?, email =? WHERE id = '. $id
    );
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
        <input required type="text" name="first_name" value="<?=$contact['first_name']?>">
    </label> <br>
    <label>
        Last name:
        <input required type="text" name="last_name" value="<?=$contact['last_name']?>">
    </label> <br>
    <label>
        Phone:
        <input required type="text" name="phone" value="<?=$contact['phone']?>">
    </label> <br>
    <label>
        Address:
        <input type="text" name="address" value="<?=$contact['address']?>">
    </label> <br>
    <label>
        Email:
        <input type="email" name="email" value="<?=$contact['email']?>">
    </label> <br>
    <button type="submit">Update</button>
</form>
</table>
</body>
</html>