<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les fonctions, exercice 1</title>
</head>
<!-- Faire une fonction qui retourne true.-->
<body>
  <!-- Comme les boucles, les fonctions permettent d'éviter d'avoir à répéter du code PHP.
  Une fonction est une série d'instructions qui effectue des actions et qui retourne une valeur
  Elles sont capables de s'adapter en fonction des informations que vous leur envoyez-->
  <p>
    <?php
    function didier()
    {
      //Si appelée depuis une fonction, la commande return termine immédiatement la fonction, et retourne l'argument qui lui est passé.
      //Si appelée depuis l'environnement global, l'exécution du script est interrompue.
      return true;
    }
    echo didier();
    ?>
  </p>
</body>
</html>
