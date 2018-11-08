<html lang="fr">
<body>
<div class="container">
    <h1 class="">Table De Multiplication</h1> <br>
    <?php
    $m = 9; // tableau de 10 col et 10 lignes
    echo "<table border='2' bgcolor='yellow'>"; //ouverture de notre tableau avec un font jaune
    echo "<tr>"; //ouverture d'une ligne
    echo "<th bgcolor='yellow'  width='20' ><b>*</b></th>"; //cellule qui porte *
    //remplir la premiére ligne avec les chiffres de 1 à 9
    $i = 1;
    while ($i <= $m) {
        echo "<th bgcolor='yellow' width='20' ><b>" . $i . "</b></th>"; //ecrire en gras et changer la couleur des cellules en jaune
        $i++;
    }
    echo "</tr>"; //fermeture de la premiere ligne
    //compléter le tableau et remplir la premiére colone avec les chiffres de 1 à 9  et le corps du tableau avec les resultats calculées
    $j = 1;
    while ($j <= $m) {
        echo "<tr>"; //a chaque boucle j'ouvre une ligne
        echo "<th bgcolor='yellow'><b>" . $j . "</b></th>"; //premiere colone avec couleur jaune et chiffres de 1 à 9
        //je vais parcourir les chiffres de 1 à 9 pour les multiplier par la valeur de la ligne courante ($j)
        $k = 1;
        while ($k <= $m) {
            echo "<td bgcolor='red' width='20' align = \"center\" ><font color=\"white\"><b>" . ($j * $k) . "</b></font></td>";
            //à chaque boucle j'ouvre une case, j'affiche le résultat de la multiplication et je referme la case
            //changer la couleur des case en rouge et la police centee en blanc
            $k++;
        }
        echo "</tr>"; //fermeture de la ligne
        $j++;
    }
    echo '</table>';
    ?>
</div>
</body>
</html>