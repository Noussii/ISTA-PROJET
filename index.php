<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Corner</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="/styles/index.css">
        
    </head>
    <body>
    <header class="h-main">
        <div class="header-logo-container">
        <a href="../index.php">
            <img height="40px" src="../media/logo.png" alt="website_logo">
        </a>
        </div>
        <nav>
            <a href="./page/updates.php">Updates</a>
            <a href="./page/login.php">Login</a>
        </nav>
    </header>

    <section id="banner" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="/media/banner-ga.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h2 class="text-center carousel-text">Best selection for your studies</h2>
        </div>
    </div>
    <div class="carousel-item">
        <img src="/media/banner-ga.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h2 class="text-center carousel-text">Hands-on experience</h2>
        </div>
    </div>
    <div class="carousel-item">
        <img src="/media/banner-ga.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h2 class="text-center carousel-text">Celebrate your achievements</h2>
        </div>
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
                            <a href="#" class="btn cc">En savoir plus</a>
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
        <section class="section-2">
            <div class="section-2-inner-container">
                <img width="50%" src="/media/ista.jpg">
                <div class="text">
                    <h1>ISTA Lazaret</h1>
                    <p>    
                        institution since 1945 this Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed distinctio harum velit iure quod, ratione rerum porro maxime fuga explicabo voluptate soluta eligendi numquam dolorem corrupti voluptas dolore. Deleniti, delectus?
                    </p>
                </div>

            </div>
        </section>
    </main>

    <script src="/scripts/index.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

</body>
</html>