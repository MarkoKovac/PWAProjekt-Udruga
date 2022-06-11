<?php
include("path.php");
error_reporting(0);
?>
<header>
  <!--Navigacija-->
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="index">
        <img src="<?php echo BASE_URL . '/assets/images/logo.png' ?>" alt="" width="60" height="60" class="d-inline-block align-text-center">
        Udruga LePas
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/index' ?>">Početna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/udomi' ?>">Udomi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/onama' ?>">O nama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/novosti' ?>">Novosti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/donacije' ?>">Donacije</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/kontakti' ?>">Kontakti</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>