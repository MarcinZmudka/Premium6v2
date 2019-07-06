<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <?php  include 'includes/head.php' ?>
  </head>
  <body>
    <?php $page = "home"; include 'includes/navbar.php' ?>
    <main>
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
              <img src="images/stronaG.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block ">
                <h1>Witamy na naszej stronie !</h1>
                <p><h4>Rozejrzyj się na naszej stronie i dowiedz się wiecej o naszym apartamencie</h4></p>
              </div>
            </div>
            <div class="carousel-item" data-interval="5000">
              <img src="images/apartament.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block ">
                <h1>Apartament</h1>
                <p><h4>Tutaj dowiesz się wiecej o tym co nasz Apartament ma do zaoferowania</h4></p>
              </div>
            </div>
            <div class="carousel-item" data-interval="5000">
              <img src="images/atrakcje.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block ">
                <h1>Atrakcje</h1>
                <p><h4>Białka Tatrzańska to nie tylko termy ale i ..</h4></p>
              </div>
            </div>
            <div class="carousel-item" data-interval="5000">
              <img src="images/kontakt.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block ">
                <h1>Kontakt</h1>
                <p><h4>Uzyskaj informacje na temat cen, dostępnych terminów oraz wskazówek dojazdu!</h4></p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-sm card bg-light p-0 m-2">
              <a href="dojazd.php" class="cardT">
                <div class="card-body ">
                <h5 class="card-title m-0">Zobacz jak do nas dojechać !</h5>
              </div>
              <div class="cardimg">
                <img src="images/dojazd_2.jpg" alt="" class="card-img-bottom">
                <!--<i class="fas fa-question"></i>-->
              </div>
            </a>
            </div>
            <div class="col-sm card bg-light p-0 m-2">
              <a href="klucze.php" class="cardT">
                <div class="card-body ">
                  <h5 class="card-title m-0">Zobacz jak odebrać od nas klucze !</h5>
                </div>
                <div class="cardimg">
                  <img src="images/keys.jpg" alt="" class="card-img-bottom">
                  <!--<i class="fas fa-question"></i>-->
                </div>
              </a>
            </div>
            <div class="col-sm card bg-light p-0 m-2">
              <a href="kontakt.php" class="cardT">
                <div class="card-body ">
                  <h5 class="card-title m-0">Zapytaj o wolny termin !</h5>
                </div>
                <div class="cardimg">
                  <img src="images/calendar.jpg" alt="" class="card-img-bottom img-fluid">
                  <!--<i class="fas fa-question"></i>-->
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-3">
        <div class="row justify-content-center">
          <div class="col-md-3 ">
            <img src="images/book.png" alt="" class="img-fluid bookPhoto">
          </div>
          <div class="col-md-6 booktext ">
            <div class="text">
              <h5>Zostaliśmy odznaczeni!</h5><br> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
      </div>
      <div class="jumbotron mb-0 mt-4 pt-4 py-4">
        <div class="container">
          <h2 class="markTitle">Sprawdź opinie naszych gości:</h2>
          <div class="row marks my-4 ">
            <div class="col-md-2">
              <img src="images/comment (1).jpg" alt="" class="profile img-fluid">
            </div>
            <div class="col">
              <h5><strong>Monika z Booking.com</strong></h5><br>„Najbardziej podobało nam się, ze obiekt był świetnie wyposażony. Ma zmywarkę, toster i nawet ekspres do kawy. Było wszystko czego nam było potrzeba plus sklep nieopodal i blisko busik, który wiezie prosto na stok. Właścicielka jest przemiłą i pomocną osobą. Przywitały nas nawet czekoladki od Właścicielki.”
            </div>
          </div>
          <div class="row marks2 p-4 my-1">
            <div class="col-md-2">
              <img src="images/comment (2).jpg" alt="" class="profile img-fluid">
            </div>
            <div class="col">
              <h5><strong>Agnieszka z Booking.com</strong></h5><br>"Apartament mega... czyściutko, cieplutko i przestronnie :) wyposażony naprawdę we wszystko co potrzebne a nawet więcej... dawno nie spotkałam się z tak dobrze zaopatrzonym apartamentem. Kominek ... wisienka na torcie po całym dniu na stoku aż miło było się przy nim odprężyć :) Wszędzie blisko sklep 5min spacerem stok "bania" 3 min samochodem . Właścicielka lokalu przemiła kobieta pomocna w każdej sytuacji, pełen profesjonalizm i indywidualne podejście do swoich gości ;) Byliśmy bardzo zadowolone z pobytu i na pewno polecimy to miejsce innym :)"
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <?php include 'includes/footer.php' ?>
    </footer>
    <?php include 'includes/scripts.php' ?>
  </body>
</html>
