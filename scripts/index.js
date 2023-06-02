function fetch_articles_with_num(num){
    if(typeof num !== 'number' || num < 0) return;
    fetch('./api/articles_A.php?q=latest&n='+num)
    .then(res => res.json())
    .then(data => populate_slide_show(data))
    .catch(err => console.log(err));

}


function populate_slide_show(json) {
    let slide_show_container = document.querySelector('#banner');
    let carousel_inner = slide_show_container.querySelector('.carousel-inner');

    carousel_inner.innerHTML = '';
    
  
    json.forEach((article, idx) => {

      let final_title = article.title;
      if(final_title.length > 35) final_title = final_title.slice(0, 35)+'..';
      let activeClass = idx === 0 ? 'active' : '';
      let html = `
        <div class="carousel-item ${activeClass}">
          <div class="slideshow-img-container">
            <img src=${article.key_img_path} class="slideshow-img">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h2 class="text-center banner_taital" title=${article.title}>${final_title}</h2>
          </div>
          <a href="./page/article.php?title=${article.title}&ref=${article.article_id}" class="invisible-clickable-slideshow-link-layer"></a>
        </div>`;
      carousel_inner.innerHTML += html;
    });
  
    console.log(json)
    let carousel = new bootstrap.Carousel(slide_show_container);
  }
  

fetch_articles_with_num(5)