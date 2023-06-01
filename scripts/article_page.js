function get_article(){
    let par = new URLSearchParams(window.location.search).get('ref');
    console.log(par)
    if(Number(par) > 0){
        fetch('../api/articles_A.php?q=sing&ref='+par)
        .then(res => res.json())
        .then(data => populate_artilce(data))
        .catch(err => console.log(err));
    }
}
function populate_artilce(json){
    console.log(json)
    const title = document.querySelector('#article-title');
    const article_body = document.querySelector('#article-body');
    const key_img = document.querySelector('#key-img');
    if(json.title && json.body && json.key_img_path){
        title.innerText = json.title;
        article_body.innerText = json.body;
        key_img.setAttribute('src', json.key_img_path);
    }
}
function populate_side_bar(json){
    const side_bar = document.querySelector('#left-side-articles-inner-container');
    json.forEach(article => {
        let container = document.createElement('a');
        let title = document.createElement('h4');
        let date = document.createElement('span');

        container.classList.add('left-side-one-article', 'normal-link');
        container.href = './article.php?title='+article.title+'&ref='+article.article_id;
        title.className = 'title';
        date.className = 'date';
        
        title.textContent = article.title;
        date.textContent = article.date_time.slice(0,10);

        if(article.user_type === 'administration'){
            container.classList.add('clr-red')
            console.log('here')
        }

        container.append(title, date);
        side_bar.appendChild(container);
    });
}
function get_sidebar_articles(){
    fetch('../api/articles_A.php?q=latest&n=5&no_b=1')
    .then(res => res.json())
    .then(data => populate_side_bar(data))
    .catch(err => console.log(err))
}





get_sidebar_articles();
get_article();