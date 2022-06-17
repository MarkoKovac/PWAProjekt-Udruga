<?php
include("path.php");
error_reporting(0);
?>
<footer class="text-center text-black">
    <div class="container p-3 mt-3">
      <div class="row">
        <div class="col">
        <a href="https://www.facebook.com/lepas.udruga" id="footer-btn">
          <span class="fa-stack fa-2x">
            <i class="fa-solid fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook-f fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a href="https://www.instagram.com/lepas_udruga/" id="footer-btn">  
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a href="udruga@lepas.hr" id="footer-btn">  
          <span class="fa-stack fa-2x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-google fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        </div>  
      </div>
      <div class="m-4">
        <p>
        Naš cilj i ključni dio naše misije je pomaganje životinjama od kojih drugi okreću glave jer su bolesne, teško udomljive ili stare (skupina na koju smo posebno slabi).
        </p>
        <ul class="list-inline mb-0 h5">
            <li class="list-inline-item">
              <a href="<?php echo BASE_URL . '/index' ?>" id="footer-link">Početna</a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo BASE_URL . '/udomi' ?>" id="footer-link">Udomi</a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo BASE_URL . '/onama' ?>" id="footer-link">O nama</a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo BASE_URL . '/novosti' ?>" id="footer-link">Novosti</a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo BASE_URL . '/donacije' ?>" id="footer-link">Donacije</a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo BASE_URL . '/kontakti' ?>" id="footer-link">Kontakti</a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo BASE_URL . '/login' ?>" id="footer-link">Login</a>
            </li>
          </ul>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © <?php echo date("Y"); ?>
      <a class="text-black" href="index">LePas.com</a>
    </div>
    <button class="scrollToTopBtn"><i class="fa-solid fa-paw fa-2xl"></i></button>
  </footer>
