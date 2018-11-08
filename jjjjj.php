<table border="1" >
    <tr>
        <th>cle</th>
        <th>valeur</th>
    </tr>
    <?php
                $carte = array(1 => "asso", 2 => "2", 3 => "3", 4 => "4", 5 => "5", 6 => "6", 7 => "7",
                    8 => "8", 9 => "9", 10 => "10", 11 => "fante", 12 => "cavallo", 13 => "re",);
                ?>
    <tr>
        <td>
            <table border="1" >
                <?php
                foreach ($carte as $i => $val) {
                ?>
                <tr>
                    <td><?php echo $val ?></td>

                </tr>
            </table>
        </td>
        <td>
            <table border="1" >
                <?php
                foreach ($carte as $i => $val) {
                ?>
                <tr>
                    <td><?php $i ?></td>
                   <!-- <td><img src="scopa/asso.jpg" alt=""></td>-->

                </tr>
            </table>
        </td>
    </tr>
<?php
}
}
?>
</table>