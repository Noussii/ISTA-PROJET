<?php include_once './logic_php_layer/index-page-logic.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Corner</title>
        <link rel="stylesheet" href="./styles/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="/styles/index.css">
        <link rel="icon" type="image/x-icon" href="./media/fav.ico">
    </head>
    <body>
    <header class="h-main">
        <div class="header-logo-container">
        <a href="../index.php?acc=1">
            <img height="40px" src="../media/logo.png" alt="website_logo">
        </a>
        </div>
        <nav class='header-right-nav'>
            <a href="./page/updates.php" class='updates-link'></a>
            <a href="./page/login.php" class='login-link'></a>
        </nav>
    </header>

    <section id="banner" class="carousel slide custom-slideshow-container-class" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="slideshow-img-container">
            <img src="/media/slider-1-1.jpg" class="slideshow-img">
        </div>
        <div class="carousel-caption d-none d-md-block">
            <h2 class="text-center banner_taital">Official Site ISTA LAZARET</h2>
        </div>
        <a href="./page/article.php?q=sing&ref=11" class="invisible-clickable-slideshow-link-layer"></a>
    </div>
    <div class="carousel-item">
        <div class="slideshow-img-container">
            <img src="/media/slider-2-2.jpg" class="slideshow-img">
        </div>
        <div class="carousel-caption d-none d-md-block">
            <h2 class="text-center banner_taital">Official Site ISTA LAZARET</h2>
        </div>
        <a href="./page/article.php?title=test-article&date=2023-05-12" class="invisible-clickable-slideshow-link-layer"></a>
    </div>
  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>




    <main id="main-content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <i class="fa fa-bullhorn fa-3x mb-3"></i>
                        <h5 class="card-title mb-2">Les dernières annonces</h5>
                        <h6 class="card-subtitle mb-2">Restez à jour avec les dernières nouvelles</h6>
                        <div class="mt-auto">
                            <a href="./page/updates.php" class="btn cc">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <i class="fa fa-chalkboard-teacher fa-3x mb-3"></i>
                        <h5 class="card-title mb-2">Espace Formateur</h5>
                        <h6 class="card-subtitle mb-2">Formateur de l'éducation</h6>
                        <div class="mt-auto">
                            <a href="./page/login.php" class="btn cc">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
    <div class="col-sm-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="fa fa-graduation-cap fa-3x mb-3"></i>
                <h5 class="card-title mb-2">Espace stagiaire</h5>
                <h6 class="card-subtitle mb-2">Apprenant en formation</h6>
                <div class="mt-auto">
                    <a href="./page/login.php" class="btn cc">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
  </div>
    </div>
        <a class="go-to-main-btn" href="#main-content">▼</a>

    <!-- Latest Articles Section -->
<section id="latest-articles">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold">Latest Articles</h2>
      <div class="row" id="articles-container">
        <!-- Articles seront ajoutés ici dynamiquement via JavaScript -->
      </div>
    </div>
</section>


<!-- Archive Section -->


        <!-- FAQ section -->
        <section id="faq">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Frequently Asked Questions</h2>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-question-circle"></i> Comment s'inscrire ?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Les comptes stagiaires sont délivrés que par l'administaration pour éviter toute conflit ou spam de comptes
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-question-circle"></i> Question 2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Answer 2
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="fas fa-question-circle"></i> Question 3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Answer 3
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </main>


    <footer class="text-center text-lg-start text-white">
    <div class="container p-4 pb-0">
        <section >
        <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">E-ISTALAZARET</h6>
                    <p>institution since 1945 this Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sed distinctio harum velit iure quod.</p>
                </div>
            <!-- Do not delete this line; shown only in sm / used to separate divs with hr -->
            <hr class="w-100 d-md-none" />
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p><a href="./page/about.php" class="text-white">About us</a> </p>
                    <p><a href="./page/article.php" class="text-white">Articles</a></p>          
                    <p><a href="./page/updates.php" class="text-white">Updates</a></p>           
                    <p><a href="./page/newsLetter.php" class="text-white">Newsletter</a></p>
                </div>
            <hr class="w-100 d-md-none" />
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> ISTA LAZARET, OUJDA</p>
                    <p><i class="fas fa-envelope mr-3"></i> istalazaret@ofppt-edu.ma</p>
                    <p><i class="fas fa-phone mr-3"></i> + 212 123 456 708</p>
                </div>
        </div>
        </section>
        <hr class="my-3">

            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <div class="p-3">© 2023 Copyright:<a class="text-white" href="index.php">e-istalazaret.com</a></div>    
                </div>
                </div>
            </section>
    </div>
    </footer>

    <script src="/scripts/index.js"></script>
    <script src="./styles/bootstrap/js/bootstrap.min.js"></script>
<script>const articlesContainer = document.getElementById('articles-container');

fetch('./api/articles_A.php?q=latest&n=5')
  .then(response => response.json())
  .then(data => {
    data.forEach(article => {
      const articleElement = document.createElement('div');
      articleElement.classList.add('col-md-6', 'col-lg-4');
      articleElement.innerHTML = `
        <div class="article">
          <h3>${article.title}</h3>
          <p>${article.description}</p>
        </div>
      `;
      articlesContainer.appendChild(articleElement);
    });
  })
  .catch(error => console.error(error));

//********************** */



//************************** */

</script>
</body>
</html>