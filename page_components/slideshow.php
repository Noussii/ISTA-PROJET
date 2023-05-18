<?php
    require_once '../classes/Dbc.php';
    function get_articles_array(){
        $dbc = new Dbc();
        $pre_stmt = "select article_id, title from article limit 5;";
        $stmt = $dbc->connect()->prepare($pre_stmt);
        $stmt->execute();
        $results = $stmt->fetchAll();
        // echo var_dump($results);
        return $results;

    }
    $data = get_articles_array() ?? false;
?>


<section id="banner" class="carousel slide custom-slideshow-container-class" data-bs-ride="carousel">
  <div class="carousel-inner" id="carouselInner">
    <!-- Slideshow items will be dynamically added here -->
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
<script src='../scripts/slideshow_C.js'></script>