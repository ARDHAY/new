<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
<table border="1" class="alert-danger">
    <tr>
        <th>cle</th>
        <th>valeur</th>
    </tr>

    <?php
    $carte = array(1 => "asso", 2 => "2", 3 => "3", 4 => "4", 5 => "5", 6 => "6", 7 => "7",
        8 => "8", 9 => "9", 10 => "10", 11 => "fante", 12 => "cavallo", 13 => "re",);


    foreach ($carte as $i => $val) {
        ?>
        <tr>
            <td><?php echo $val ?></td>
            <td>
                    <table>
                    <tr><td> <?php $i ?></td>
                       <!-- <td><img src="scopa/asso.jpg" alt="asoo" width="30" height="60"></td>-->
                    </tr>
                    </table>
            </td>
        </tr>

            <?php

    }
    ?>
</table>
</body>
</html>