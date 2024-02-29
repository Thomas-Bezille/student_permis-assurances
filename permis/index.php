<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Permis de conduire</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <main>
    <h1>Inscription au permis de conduire</h1>
    <form action="" method="GET">
      <label for="lastname">Nom</label>
      <input type="text" name="lastname" id="lastname">
      <label for="firstname">Prénom</label>
      <input type="text" name="firstname" id="firstname">
      <label for="age">Âge</label>
      <input type="number" name="age" id="age">
      <button>Je m'inscris</button>
    </form>
  </main>

  <aside>
    <h1>Résumé de l'inscription</h1>
    <h2>Inscription de </h2>
    <div class="answer">
      <?php

      if (isset($_GET['firstname'])) {
        if ($_GET['firstname'] !== '') {
          echo $_GET['firstname'] . ' ';
        } else {
          echo 'Merci de renseigner votre prénom ';
        }
      }

      if (isset($_GET['lastname'])) {
        if ($_GET['lastname'] !== '') {
          echo $_GET['lastname'];
        } else {
          echo 'Merci de renseigner votre nom';
        }
      }

      ?>
    </div>
    <h2>Autorisation </h2>
    <div class="answer">
      <?php

      if (isset($_GET['age'])) {
        if ($_GET['age'] !== '') {
          if ($_GET['age'] > 0) {
            if ($_GET['age'] < 16) {
              echo 'Impossible de s\'inscrire pour le moment, vous pourrez vous inscrire au code dans ' . 16 - $_GET['age'] . ' ans et au permis dans ' . 18 - $_GET['age'] . ' ans';
            } elseif ($_GET['age'] < 18) {
              echo 'Vous pouvez vous inscrire au code mais pas au permis, vous pourrez vous inscrire au permis dans ' . 18 - $_GET['age'] . ' ans';
            } else {
              echo 'Vous pouvez vous inscrire au code et au permis';
            }
          } else {
            echo 'Votre age ne peut pas être négatif';
          }
        } else {
          echo 'Merci de renseigner votre age';
        }
      }

      ?>
    </div>
  </aside>
</body>

</html>