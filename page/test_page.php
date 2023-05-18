<!DOCTYPE html>
<html>
<head>
  <title>Dynamic Carousel</title>
  <style>
    .custom-slideshow-container {
      /* Add custom styles for the slideshow container */
    }
  
    .custom-slideshow-container .carousel-item {
      /* Add custom styles for each slideshow item */
    }
  </style>
</head>
<body>
  <section id="banner" class="carousel slide custom-slideshow-container" data-bs-ride="carousel">
    <div class="carousel-inner" id="carouselInner">
      <!-- Slideshow items will be dynamically added here -->
    </div>
  </section>

  <script src="path/to/jquery-3.6.0.min.js"></script>
  <script>

  $(document).ready(function($) {
    var articles = [
      { title: "Article 1", imageUrl: "/media/article1.jpg" },
      { title: "Article 2", imageUrl: "/media/article2.jpg" },
      { title: "Article 3", imageUrl: "/media/article3.jpg" },
      // Add more articles as needed
    ];

    var carouselInner = $('#carouselInner');
    for (var i = 0; i < articles.length; i++) {
      var article = articles[i];
      var activeClass = (i === 0) ? 'active' : '';
      var item = `
        <div class="carousel-item ${activeClass}">
          <img src="${article.imageUrl}" class="slideshow-img">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="text-center banner_taital">${article.title}</h2>
          </div>
        </div>
      `;
      carouselInner.append(item);
    }

    $('.carousel').carousel({
      interval: 3000, // Change slide every 3 seconds
      wrap: true // Loop the carousel
    });
  });
</script>

</body>
</html>
