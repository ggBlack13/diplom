<div class="container py-3">
  <header>
  <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4"><ya-tr-span data-index="0-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Pricing example" data-translation="Пример ценообразования" data-type="trSpan">------</ya-tr-span></span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark" href="/iindex.php">Главная</a>
    </nav>
    <?php
    if($_SESSION['users']){ ?>   
<a class="btn btn-outline-primary" href="../exit.php">Выйти</a>
    <?php } 
    else {?>
        <a class="btn btn-outline-primary" href="/index.php">Войти</a>
    <?php } ?>
      </div>