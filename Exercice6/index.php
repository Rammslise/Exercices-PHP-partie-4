<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les fonctions, exercice 6</title>
</head>
<!-- Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.
Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prénom + ",tu as" + age + "ans". -->
<body>
  <?php
  function sentence($lastname,$firstname,$age){
    return 'Bonjour '.$lastname.' '.$firstname.', tu as '.$age.' ans.';
  }
  ?>
  <p><?= sentence('Pery','Elise',29) ?></p>
</body>
</html>
