<?php
$fileName = 'uploads/contact.csv';
$csv_file = fopen($fileName,'r') or die("Unable to open file!");
$count = 0;
//Get one item
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $name = '';
    $phone = '';
    while ($info_contact = fgetcsv($csv_file, 5000 ,';')){
        $count++;
        if($count == $id)
        {
            $name = $info_contact[0];
            $phone = $info_contact[1];
        }
    }
    fclose($csv_file);
}
//Begin update
else if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['phone']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $content_string = '';
    while ($info_contact = fgetcsv($csv_file, 5000 ,';')){
        $count++;
        if($count == $id)
        {
            $content_string .= $name;
            $content_string .= ';';
            $content_string .= $phone;
            $content_string .= "\n";
        }
        else
        {
            $content_string .= $info_contact[0];
            $content_string .= ';';
            $content_string .= $info_contact[1];
            $content_string .= "\n";
        }
    }
    file_put_contents($fileName, $content_string);
    fclose($csv_file);
    header('Location: index.php');
}
?>
<!DOCTYPE>
<html>
<head>
    <title>Contact update</title>
</head>
<body>
<form method="POST" action="update.php">
    <input type="hidden" value="<?=$id?>" name="id" />
    <input type="text" value="<?=$name?>" name="name" />
    <input type="text" value="<?=$phone?>" name="phone" />
    <input type="submit" name="" />
</form>
</body>
</html>
