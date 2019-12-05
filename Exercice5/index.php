<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les fonctions, exercice 5</title>
</head>
<!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères,
et qui renvoit la concaténation de ces deux paramètres. -->
<body>
    <?php
    function sentence($a,$b) {
      return $a.' '.$b;
    }
    ?>
  <p><?= sentence(24,'petits nains') ?></p>
</body>
</html>
