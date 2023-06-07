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

const articlesContainer = document.getElementById('articles-container');

fetch('./api/articles_A.php?q=latest&n=6')
  .then(response => response.json())
  .then(data => {
    data.forEach(article => {
      console.log(article)
      const articleElement = document.createElement('a');
      articleElement.href = '../page/article.php?q=sing&ref='+article.article_id;
      articleElement.classList.add('col-md-6', 'col-lg-4');
      articleElement.innerHTML = `
        <div class="article">
          <h3>${article.title}</h3>
          <div class='article-img-container'>
            <img width='100%' src='${article.key_img_path}' alt='article_img'>
          </div>
          <p>${article.body.slice(0,100)+'...'}</p>
        </div>
      `;
      articlesContainer.appendChild(articleElement);
    });
  })
  .catch(error => console.error(error));