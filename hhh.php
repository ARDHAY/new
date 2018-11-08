<table border="1" >
    <tr>
        <th>cle</th>
        <th>valeur</th>
    </tr>
    <?php
    $imCarte= array( uno=>'<img src="scopa/asso.jpg" alt="">',due=>'<img src="scopa/2.jpg" alt="">',tre=>'<img src="scopa/3.jpg" alt="">',
        quatro=>'<img src="scopa/4.jpg" alt="">',cinque=>'<img src="scopa/5.jpg" alt="">',sei=>'<img src="scopa/6.jpg" alt="">',
        sette=>'<img src="scopa/asso.7" alt="">',otto=>'<img src="scopa/8.jpg" alt="">',nove=>'<img src="scopa/9.jpg" alt="">',
        diece=>'<img src="scopa/10.jpg" alt="">',undice=>'<img src="scopa/11.jpg" alt="">',dodice=>'<img src="scopa/12.jpg" alt="">',
        tredice=>'<img src="scopa/13.jpg" alt="">',);
    $carte = array(1 => "asso", 2 => "2", 3 => "3", 4 => "4", 5 => "5", 6 => "6", 7 => "7",
        8 => "8", 9 => "9", 10 => "10", 11 => "fante", 12 => "cavallo", 13 => "re",);
    foreach ($carte as $i => $val) {
        ?>
        <tr>
            <td>
                <table>
                    <tr>
                        <td><?php echo $val ?></td>
                    </tr>
                </table>
            </td>
            <td>
                <table border="1">
                 <?php   foreach ($imcarte as $j => $val) {?>
                    <tr>
                        <td><?php $j ?></td>
                        <td><?php$val ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <?php
    }}
    ?>
</table>