<nav class="navbar navbar-expand-lg navbar-light bg-light" >
      <a href="./index.php" class="navbar-brand mb-0">Premium6</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="index.php" class="nav-link <?php if($page=="home") echo "active"; ?>">Strona Główna</a></li>
          <li class="nav-item"><a href="apartament.php" class="nav-link <?php if($page=="apartament") echo "active"; ?>">Apartament</a></li>
          <li class="nav-item"><a href="atrakcje.php" class="nav-link <?php if($page=="atrakcje") echo "active"; ?>">Atrakcje</a></li>
          <li class="nav-item"><a href="kontakt.php" class="nav-link <?php if($page=="kontakt") echo "active"; ?>">Kontakt</a></li>
          <li class="nav-item"><a href="#" class="nav-link d-md-none <?php if($page=="home1") echo "active"; ?>">Click for English!</a></li>
        </ul>
        <button type="button" onclick = "location.href='index_en.php'" class="btn btn-outline-secondary d-none d-md-block <?php if($page=="home1") echo "active"; ?>">Click for English!</button>
      </div>
</nav>