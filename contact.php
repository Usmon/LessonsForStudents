<?php

$csv_file = fopen('uploads/contacts.csv', 'r');

?>

<table border="1" cellpadding="0" cellspacing="0">
    <thead>
        <th>Name</th>
        <th>Phone</th>
    </thead>
    <tbody>
        <?php
            while ($contact = fgetcsv($csv_file, 5000, ';')){
                echo '<tr>';
                echo '<td>'. $contact[0] .'</td>';
                echo '<td>'. $contact[1] .'</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

<?php
fclose($csv_file);
?>
