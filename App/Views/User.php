<?php

if (!isset($_SESSION['user'])) {
  echo '
    <script>
      location.href = "login";
    </script>';
}

include "App/templates/userView.php";