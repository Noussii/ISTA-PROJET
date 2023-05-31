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
    const title = document.querySelector('#article-title');
    const article_body = document.querySelector('#article-body');
    console.log(json)
    if(json.title && json.body){
        title.innerText = json.title;
        article_body.innerText = json.body;
    }
}

get_article();