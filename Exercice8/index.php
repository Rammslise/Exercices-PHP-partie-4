<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les fonctions, exercice 8</title>
</head>
<!--Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut. -->
<body>
  <?php
  function result($a=12,$b=45,$c=60){
    return $a + $b +$c;
  }
  ?>
  <p><?= result() ?></p>
</body>
</html>
