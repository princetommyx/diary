<!-- ========== Start controller ========== -->
<?php
require_once 'config.php';
require_once 'controllers/dashboard.php';
?>
<!-- ========== End controller ========== -->

<!-- ========== Start template ========== -->
<?php require_once "components/template_start.php"; ?>
<!-- ========== End template ========== -->

<section class="container py-4">
  <h1 class="display-1">Welcome <?= $_SESSION["user"]["name"] ?></h1>
</section>

<!-- ========== Start footer ========== -->
<?php require_once "components/footer.php"; ?>
<!-- ========== End footer ========== -->

<!-- ========== Start footer ========== -->
<?php require_once "components/template_end.php"; ?>
<!-- ========== End footer ========== -->