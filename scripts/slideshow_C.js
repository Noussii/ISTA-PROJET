$(document).ready(function() {
    // Assuming you have an array of articles called `articles`
    var articles = [
      { title: "Article 1", imageUrl: "../media/slider-1.jpg" },
      { title: "Article 2", imageUrl: "../media/slider-1.jpg" },
      { title: "Article 3", imageUrl: "../media/slider-1.jpg" },
      // Add more articles as needed
    ];
  
    // Dynamically generate the slideshow items
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
          <a href="./page/article.php?title=test-article&date=2023-05-12" class="invisible-clickable-slideshow-link-layer"></a>
        </div>
      `;
      carouselInner.append(item);
    }
    
    // Initialize the carousel
    $('.carousel').carousel();
  });
  