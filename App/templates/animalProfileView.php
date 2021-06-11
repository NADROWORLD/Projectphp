<div class="profile-content">
  <button class="btn btn-primary" onclick="bookAnimal()">Réverver</button>

  <?php require('./App/templates/head/footer.php'); ?>
</div>

<script>
  function bookAnimal(){
    Swal.fire({
      title: "Succès!",
      icon: "success",
      text: "Réservation Terminée",
    }).then(function () {
      window.location.href = "index";
    });  
  }
</script>