<?php
include("path.php");
error_reporting(0);
?>
<header>
  <!--Navigacija-->
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo.png" alt="" width="60" height="60" class="d-inline-block align-text-center">
        Udruga LePas
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/index.php' ?>">Početna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/udomi.php' ?>">Udomi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/onama.php' ?>">O nama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/novosti.php' ?>">Novosti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/donacije.php' ?>">Donacije</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/kontakti.php' ?>">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>