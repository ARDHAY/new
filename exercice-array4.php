<?php
$cart = array(1 => array("asso" => '<img src="scopa/asso.jpg" /> '), 2 => array("due " => '<img src="scopa/2.jpg" />'), 3 => array("tre " => '<img src="scopa/3.jpg" />'),
    4 => array("quatro " => '<img src="scopa/4.jpg" />'), 5 => array("cinque" => '<img src="scopa/5.jpg" />'), 6 => array("sei " => '<img src="scopa/6.jpg" />'),
    7 => array("sette " => '<img src="scopa/7.jpg"/>'), 8 => array("otto" => '<img src="scopa/8.jpg" />'), 9 => array("nove " => '<img src="scopa/9.jpg" />'),
    10 => array("effe " => '<img src="scopa/10.jpg" />',),11=>array("cavallo " => '<img src="scopa/11.jpg" />'),12=> array("Re " => '<img src="scopa/12.jpg" />',));

$s1=0;
$s2=0;
for ($i = 1; $i <= 5; $i++) {
    $Cartjoueur1=(array_rand($cart, 1));
    $Cartjoueur2= (array_rand($cart, 1));
    if ($Cartjoueur1> $Cartjoueur2) {
        $s1++;
    }
    elseif ($Cartjoueur1< $Cartjoueur2) {
        $s2++;
    }
    foreach($cart[$Cartjoueur1] as $key=>$value){
        foreach($cart[$Cartjoueur2] as $key1=>$value1){
            ?>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" href="bootstrap.min.css">
            </head>
            <body class="container">
            <table border="0"  class="table-success">
                <tr>
                    <td> <?php echo $key ;?></td>
                    <td><?php echo $key1; ?></td>
                </tr>
                <tr>
                    <td><?php echo $value ;?></td>
                    <td><?php echo $value1 ;?></td>
                </tr>
                <?php echo " <br> <tr><td> first $s1 , second $s2</td> </tr> <br>" ; ?>
            </table>
            <br>
            </html>
            <?php
        } }} ?>
<table border="0" align="center" class="alert-danger">
    <tr><td> <?php echo ($s1==$s2) ? "paregio" : ($s1>$s2) ? "<p text-align='center'>first win</p>" : "second win" ;   ?>  </td></tr>
</table>
