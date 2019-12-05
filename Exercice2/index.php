<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les fonctions, exercice 2</title>
</head>
<!-- Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.-->
<body>
  <?php
  function returnString($string) {
    return $string;
  }
  ?>
  <p>
    <?= returnString('Hello World !') ?>
  </p>
</body>
</html>
