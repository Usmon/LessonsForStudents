<?php
    if(isset($_FILES['mening_faylim']))
    {
        if($_FILES['mening_faylim']['type'] == "application/pdf")
        {
            $file_name = $_FILES['mening_faylim']['name'];
            $path = 'files';
            $result = move_uploaded_file($_FILES['mening_faylim']['tmp_name'],$path.DIRECTORY_SEPARATOR.$file_name);
            echo "Yuklandi fayl nomi: " .$file_name;
            exit;

        }
        echo "Fayl PDF bolishi shart!!!! Sizning faylingiz tipi boshqa: " .$_FILES['mening_faylim']['type'];
        exit;
    }
?>
<html>
<head>
    <title>File upload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <label> Fayl tanlang*
            <input type="file" name="mening_faylim" />
        </label>
        <button type="submit">Yuborish</button>
    </form>
</body>
</html>