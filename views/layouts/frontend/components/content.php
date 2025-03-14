<?php
$page = $_GET["page"] ?? "";
?>
<div class="fe-layout_content">
  <div class="container">
    <?php
    $pageObj = new Page();
    $pageObj->setPath('views/pages/frontend/homepage.php');

    if ($page === 'contact') {
      $pageObj->setPath('views/pages/frontend/contact.php');
    }

    if ($page === 'order') {
      $pageObj->setPath('views/pages/frontend/order.php');
    }
    if ($page === 'sign-in') {
      $pageObj->setPath('views/pages/frontend/sign-in.php');
    }
    if ($page === 'sign-up') {
      $pageObj->setPath('views/pages/frontend/sign-up.php');
    }

    $pageObj->show();
    ?>
  </div>
</div>