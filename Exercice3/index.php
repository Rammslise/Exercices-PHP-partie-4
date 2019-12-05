<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les fonctions, exercice 3</title>
</head>
<!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines-->
<body>
  <!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines-->
  <?php
  //paramètres de fonction
  function sentence($a,$b) {
    //concaténation avec '.'
    return $a.' '.$b;
  }
  ?>
  <p>
    <!--arguments de fonction-->
    <?= sentence('Hello World','Bonjour') ?>
  </p>
</body>
</html>
