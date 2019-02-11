<?php
    $name = $_POST['ismi'];
    echo 'Ismingiz: <b>'. $name .'</b> Xush kelibsiz!';
?>
<html>
    <head>
        <title>PHP with forms</title>
    </head>
    <body>
        <form action="" method="POST">
            <label>
                Ism:
                <input type="text" name="ismi" />
            </label>
            <label>
                Familya:
                <input type="text" name="familya" />
            </label>
            <button type="submit">Yuborish</button>
        </form>
    </body>
</html>