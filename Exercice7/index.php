<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les fonctions, exercice 7</title>
</head>
<!-- Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne.
Le genre peut être :
.Homme
.Femme
La fonction doit renvoyer en fonction des paramètres :
.Vous êtes un homme et vous êtes majeur
.Vous êtes un homme et vous êtes mineur
.Vous êtes une femme et vous êtes majeur
.Vous êtes une femme et vous êtes mineur
Gérer tous les cas. -->
<body>
  <?php
  function sentence($age,$gender) {
    //pour rentrer dans la condition, il faut que $gender soit différent homme ou femme.
    if ($gender != 'homme' && $gender !='femme'){
      return 'Veuillez entrer homme ou femme.';
    } else {
      //test âge
      if ($age >= 18) {
        return 'Vous êtes une '.$gender.' et vous êtes majeur.';
      } else {
        return 'Vous êtes un '.$gender.' et vous êtes mineur.';
      }
    }
  }
  ?>
  <p><?= sentence(29,'homme') ?></p>
</body>
</html>
