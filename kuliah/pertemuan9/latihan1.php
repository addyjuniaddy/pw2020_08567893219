<?php
// Pengulangan
// for, while,do.. while, foreach
// foreach untuk array

use League\CommonMark\Extension\Table\Table;

for ($i=0; $i < 5; $i++) { 
    echo "Hello World! <br>";
}
echo "<br>";
$a=0;
while ($a < 10) {
    echo "Hello World! <br>";
    $a++;
}

echo "<br>";
$a=0;
do {
    echo "Hello World! <br>";
    $a++;
} while ($a < 7);

echo "<br>";echo "<br>";echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for ($i=1; $i <=3 ; $i++) { 
                echo "<tr>";
                for ($j=1; $j <=5 ; $j++) { 
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>   

    <br> cara kedua
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i <=3 ; $i++) : ?>
            <tr>
                <?php for ($j=1; $j <=5 ; $j++) : ?>
                    <td>
                        <!-- <?php echo"$i,$j"; ?> -->
                        <!-- php echo bisa diganti = -->
                        <?= "$i,$j"; ?>
                    </td>
                <?php endfor; ?>   
            </tr>
        <?php endfor; ?>
    </table>   
</body>
</html>