
let global_curr_articles_date_time = null;

function isEndOfPageReached() {
  const scrollHeight = Math.max(
    document.body.scrollHeight,
    document.documentElement.scrollHeight,
    document.body.offsetHeight,
    document.documentElement.offsetHeight,
    document.body.clientHeight,
    document.documentElement.clientHeight
  );

  const windowHeight = window.innerHeight || document.documentElement.clientHeight; // Height of the viewport
  const scrollPosition = window.scrollY || window.pageYOffset; // Vertical scroll position

  return scrollPosition + windowHeight >= scrollHeight;
}

function fetchArticlesWithNum(num) {
  if (typeof num !== 'number' || num < 0) return;
  fetch('../api/articles_A.php?q=latest&n=' + num)
    .then(res => res.json())
    .then(data => initialPopulation(data))
    .catch(err => console.log(err));
}

function fetchArticlesContinuouslyWithNumAndDate(num, date) {
  if (typeof num !== 'number' || num < 0 || !date) return;
  fetch('../api/articles_A.php?q=bfr_date&n=' + num + '&bfr_date=' + date)
    .then(res => res.json())
    .then(data => continuousPopulation(data))
    .catch(err => console.log('error : ', err));
}

function showErr(err) {
  console.log(err);
}

function continuousPopulation(json) {
  const container = document.querySelector('.main-container-reactive');
  for (let i = 0; i < json.length; i++) {
    let one_item_html = `
      <section>
        <a href="../page/article.php?ref=${json[i].article_id}" class="big-card">
          <div class="img-container">
            <img src="${json[i].key_img_path}" alt="test_img">
          </div>
          <div class="txt-container">
            <h1 class='card-title'>${json[i].title}</h1>
            <p class='card-paragraph'>${json[i].body}</p>
            <div class="read-more-btn">Read More.</div>
          </div>
        </a>
      </section>`;
    if (i === json.length - 1) {
      global_curr_articles_date_time = json[i].date_time;
    }
    container.innerHTML += one_item_html;
  }
}

function initialPopulation(json) {
  const container = document.querySelector('.main-container-reactive');
  json.forEach(article => {
    let one_item_html = `
      <section>
        <a href="../page/article.php?ref=${article.article_id}" class="big-card">
          <div class="img-container">
            <img src="${article.key_img_path}" alt="test_img">
          </div>
          <div class="txt-container">
            <h1 class='card-title'>${article.title}</h1>
            <p class='card-paragraph'>${article.body}</p>
            <div class="read-more-btn">Read More.</div>
          </div>
        </a>
      </section>`;
    global_curr_articles_date_time = article.date_time;
    container.innerHTML += one_item_html;
  });
}

document.addEventListener('DOMContentLoaded', function() {
  fetchArticlesWithNum(7);
});

document.addEventListener('scroll', function() {
  if (isEndOfPageReached()) {
    fetchArticlesContinuouslyWithNumAndDate(2, global_curr_articles_date_time);
  }
});

