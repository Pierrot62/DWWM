<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jeu du Memorie</h1>

   

    <?php 

        for($i=1;$i<=8;$i++){
            $tab[]=$i;
            $tab[]=$i;
        }
    
    for ($a=1;$a<5;$a++){
    
        echo '<div class="espaceHaut"></div>';
        echo '<div class="espace"></div>';
        echo '<div class="ligne">';

        for ($i=1;$i<5;$i++){
            $pos=array_rand($tab);
            $nb=$tab[$pos];
            echo'
            <div class="espace"></div>
            <div class="espace"></div>

            <div class="case">
                <img class="recto" src="./img/plage.jpg" alt="">
                <img class="verso" src="./img/'.$nb.'.jpg" alt="">
            </div>
            <div class="espace"></div>';
            unset($tab[$pos]);
            sort($tab);
           }

         echo '</div>
         <div class="espace"></div>';
    }
    ?>

    

</body>
</html>