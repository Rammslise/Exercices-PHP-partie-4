<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les fonctions, exercice 4</title>
</head>
<body>
  <!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
  .Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
  .Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
  .Les deux nombres sont identiques si les deux nombres sont égaux -->
  <?php
  function compare($a,$b) {
    if ($a > $b) {
      return $a.' est plus grand que '.$b;
    }
    elseif ($a < $b) {
      return $a.' est plus petit que '.$b;
    }
    elseif ($a == $b) {
      return $a.' est identique à '.$b;
    }
  }
  ?>
  <p><?= compare(30,30) ?></p>
</body>
</html>
