<div class="profile-content">
  <?php if (isset($_SESSION['user'])) { ?> 
    <button class="btn btn-primary" onclick="bookAnimal()">Réverver</button>
  <?php } else if (!isset($_SESSION['user'])) { ?>
    <button class="btn btn-primary" onclick="bookError()">Réverver</button>
  <?php } ?>

  <?php require('./App/templates/head/footer.php'); ?>
</div>

<script>
  function bookError(){
    Swal.fire({
      title: "Erreur",
      icon: "error",
      text: "Vous devez vous connecter",
    }).then(function () {
      window.location.href = "../login";
    });  
  }

  function bookAnimal(){
    Swal.fire({
      title: "Succès!",
      icon: "success",
      text: "Réservation Terminée",
    }).then(function () {
      window.location.href = "../index";
    });  
  }
</script>