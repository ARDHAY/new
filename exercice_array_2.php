
<html>
<head>
    <title>array</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container">
<table border="1" class="alert-danger">
    <tr>
        <th>constante </th>
        <th>valeur</th>
    </tr>
    <?php
    $arr=get_defined_constants();
    foreach ($arr as $key => $val) {

        ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $val ?></td>
        </tr>

        <?php
    }
    ?>
</table>
</body>
</html>
