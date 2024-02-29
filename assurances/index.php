<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>O'ssurance</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php

  $color = "";

  if (isset($_POST['age']) && isset($_POST['anciennete_permis']) && isset($_POST['accident']) && isset($_POST['anciennete_assureur']) && $_POST['age'] !== '' && $_POST['anciennete_permis'] !== '' && $_POST['accident'] !== '' && $_POST['anciennete_assureur'] !== '') {
    $age = $_POST['age'];
    $anciennete_permis = $_POST['anciennete_permis'];
    $accident = $_POST['accident'];
    $anciennete_assureur = $_POST['anciennete_assureur'];

    $palier = 1 - $accident;

    if ($anciennete_permis > 2) {
      $palier++;
    }
    if ($age > 25) {
      $palier++;
    }
    if ($anciennete_assureur > 5 && $palier > 0) {
      $palier++;
    }


    switch ($palier) {
      case '1':
        $color = 'rouge';
        break;
      case '2':
        $color = 'orange';
        break;
      case '3':
        $color = 'vert';
        break;
      case '4':
        $color = 'bleu';
        break;

      default:
        $color = 'Il semble qu\'il y ai une erreur.';
        break;
    }

    if ($palier <= 0) {
      $color = "gris";
    }
  }

  ?>
  <div class="container">
    <div class="left">
      <h1>O'ssurance</h1>
      <h2>Calcul du tarif de votre client</h2>
      <form action="index.php" method="post">
        <input type="number" name="age" id="age" placeholder="Àge" required>
        <input type="number" name="anciennete_permis" id="anciennete_permis" placeholder="Nombre d'année de permis" required>
        <input type="number" name="accident" id="accident" placeholder="Nombre d'accident responsable" required>
        <input type="number" name="anciennete_assureur" id="anciennete_assureur" placeholder="Nombre d'année chez cet assureur" required>
        <input type="submit" value="Calculer le tarif" class="button">
      </form>

      <p>Votre client à droit au tarif <strong class="<?= $color ?>"><?= $color ?></strong></p>
    </div>
    <div class="right">
      <img src="img/voitures.jpg" alt="Image d'un accident de voiture">
    </div>
  </div>
</body>

</html>