<?php 

switch ($_SERVER['REQUEST_URI']):
    case ("/chats") :
      $active = "chats";
      break;
    case ("/chiens") :
      $active = "chiens";
      break;
    case ("/poissons") :
      $active = "poissons";
      break;
    case ("/reptiles") :
      $active = "reptiles";
      break;
    case ("/") :
      $active = "home";
      break;
    case ("/login") :
      $active = "login";
      break;
    case ("/register") :
      $active = "register";
      break;
    default:
      $active = "";
      break;
endswitch;
?>
<div class="navbar">
  <img class="logo" width=300px; src="/App/templates/img/logo.png" style="z-index: 1">
  <div style="margin-left: auto; margin-right: auto; display: flex; z-index: 2;">  
  <a <?php if($active === "chiens"): ?> class="active" <?php endif ?> href="/chiens">Chiens</a>
  <a <?php if($active === "chats"): ?> class="active" <?php endif ?> href="/chats">Chats</a>
  <a <?php if($active === "poissons"): ?> class="active" <?php endif ?> href="/poissons">Poissons</a>
  <a <?php if($active === "reptiles"): ?> class="active" <?php endif ?> href="/reptiles">Reptiles</a>
  <a <?php if($active === "home"): ?> class="active" <?php endif ?> href="/">Accueil</a>
  <a <?php if($active === "register"): ?> class="active" <?php endif ?> href="/register">S'enregistrer</a>
  <a <?php if($active === "login"): ?> class="active" <?php endif ?> href="/login">Se connecter</a>
  </div>
</div>