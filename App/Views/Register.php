<?php

if ((isset($_REQUEST['email'])) && (trim($_REQUEST['email']) !== '') && (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))) {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> Le champ email n'est pas au bon format";
  } else {
    $erreur = "Le champ email n'est pas au bon format";
  }
}

if (!isset($_REQUEST['email']) || trim($_REQUEST['email']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> L'email est manquant";
  } else {
    $erreur = "L'email est manquant";
  }
}

if (!empty($_REQUEST['email'])) {
  $reponse = Bdd::getInstance()->conn->query('SELECT mail FROM users WHERE mail = "' . $_POST['email'] . '" ');
  $mail = $reponse->fetch();

  if (strtolower($_POST['email']) == strtolower($mail['mail'])) {
    $erreur = "Cette adresse de mail est déjà utilisée";
  }
}

if (!isset($_REQUEST['password']) || trim($_REQUEST['password']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> Le champ password est incomplet";
  } else {
    $erreur = "Le champ password est incomplet";
  }
}

if (!isset($_REQUEST['nom']) || trim($_REQUEST['nom']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> Le champ nom est incomplet";
  } else {
    $erreur = "Le champ nom est incomplet";
  }
}

if (!isset($_REQUEST['prenom']) || trim($_REQUEST['prenom']) === '') {
  if (isset($erreur)) {
    $erreur = $erreur . " <br/> Le  champ prenom est incomplet";
  } else {
    $erreur = "Le champ prenom est incomplet";
  }
}

if (isset($_POST['bouton']) && !isset($erreur)) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
    $hashedPassword = $hashPassword;

     Bdd::getInstance()->conn->exec('INSERT INTO users (nom, prenom, mail, password) 
      VALUES (' . $nom . ',' . $prenom . ',' . $email . ',' . $hashedPassword . ')');
    $result = Bdd::getInstance()->conn->query('SELECT * FROM `users` WHERE `mail` LIKE "' . $emailbis . '" AND `password` LIKE "' . $hashPassword . '"');

    foreach ($result as $row) {
      $_SESSION['user'] = $row->id;
    }

    ?>
    <script>
        Swal.fire({
          icon: "success",
          title: "Succès!",
          text: "Votre compte à bien été créé",
        }).then(function () {
          window.location.href = "login.php";
        });
    </script>
<?php }


if (isset($_POST['bouton']) && isset($erreur)) {
  echo '
    <script>
      Swal.fire({
        icon: "error",
        title: "Erreur",
        html: " ' . $erreur . ' ",
      });
    </script>';
}

include "App/templates/registerView.php";
