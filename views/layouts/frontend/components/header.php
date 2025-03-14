<?php
$page = $_GET["page"] ?? "";
?>
<div class="fe-layout_header">
  <div class="container">
    <div class="app-name">
      My website
    </div>

    <nav>
      <a href="<?php echo BASE_URL; ?>" class="<?= ($page === '') ? 'active' : '' ?>">
        <li>Kezdőlap</li>
      </a>

      <a href="?page=contact" class="<?= ($page === 'contact') ? 'active' : '' ?>">
        <li>Kapcsolat</li>
      </a>

      <a href="?page=order" class="<?= ($page === 'order') ? 'active' : '' ?>">
        <li>Rendelés</li>
      </a>
      <a href="?page=sign-in" class="<?= ($page === 'sign-in') ? 'active' : '' ?>">
        <li>Bejelentkezés</li>
      </a>
      <a href="?page=sign-up" class="<?= ($page === 'sign-up') ? 'active' : '' ?>">
        <li>Regisztráció</li>
      </a>
    </nav>
  </div>
</div>