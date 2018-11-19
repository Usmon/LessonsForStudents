<?php
session_start();
?>
<html>
<head>
    <title>Avtorizatsiya</title>
</head>
<body>
<form method="POST" action="login.php">
    <input type="text" placeholder="Login" name="login" required>
    <input type="password" placeholder="Password" name="password" required>
    <button type="submit">Login!</button>
</form>
<?php
    if(isset($_GET['message'])){
        echo $_GET['message'];
    }
    if(isset($_SESSION['user'])){
        echo '<a href="logout.php">Chiqish ('.$_SESSION['user'].')</a>';
    }
?>
</body>
</html>