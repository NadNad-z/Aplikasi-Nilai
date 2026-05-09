<?php
if(!isset($page)){
  $page = "";
}
?>

<div class="menu-bar">

  <div class="menu-logo">
    <img src="aplikasi nilai.png" alt="Logo">
  </div>

  <a href="index.php"
     class="menu-btn <?php if($page=='home') echo 'active'; ?>">
     Home
  </a>

  <a href="profil.php"
     class="menu-btn <?php if($page=='profil') echo 'active'; ?>">
     Profil
  </a>

  <a href="aplikasi.php"
     class="menu-btn <?php if($page=='app') echo 'active'; ?>">
     App
  </a>

</div>