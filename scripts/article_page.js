let global_data = {};

function get_article(){
    let par = new URLSearchParams(window.location.search).get('ref');
    console.log(par)
    if(Number(par) > 0){
        global_data.article_id = par;
        fetch('../api/articles_A.php?q=sing&ref='+par)
        .then(res => res.json())
        .then(data => populate_artilce(data))
        .catch(err => console.log(err));
    }
}
function populate_artilce(json){
    
    
    global_data.date_time = json.date_time;
    global_data.user_type = json.user_type;

    const title = document.querySelector('#article-title');
    const article_body = document.querySelector('#article-body');
    const key_img = document.querySelector('#key-img');
    const blurred_top_img = document.querySelector('#blurred-top-img');
    if(json.title && json.body && json.key_img_path){
        
        title.innerText = json.title;
        article_body.innerText = json.body;
        key_img.setAttribute('src', json.key_img_path);
        blurred_top_img.setAttribute('src', json.key_img_path);
    }
}
function populate_side_bar(json){
    const side_bar = document.querySelector('#left-side-articles-inner-container');
    json.forEach(article => {
        let container = document.createElement('a');
        let title = document.createElement('h4');
        let date = document.createElement('span');

        container.classList.add('left-side-one-article', 'normal-link');
        
        let normalized_title = article.title;
        if(normalized_title.length > 22){
            normalized_title = normalized_title.slice(0, 22)+'..';
        }
        container.href = './article.php?title='+article.title+'&ref='+article.article_id;
        title.className = 'title';
        title.title = article.title;
        date.className = 'date';
        
        title.textContent = normalized_title;
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

function get_publisher_data(){

    function populate_publisher_data(json){
        console.log('publisher data : =======\n', global_data);
        let circle = document.querySelector('.publisher > .img-span');
        let txt = document.querySelector('.publisher > .txt-span');
        let right_far_right_txt = document.querySelector('.publisher > .txt-right-span');
        right_far_right_txt.children[0].innerText = global_data.date_time.slice(0,10);
        right_far_right_txt.children[1].innerText = global_data.user_type;

        circle.innerText = json.first_name;
        txt.children[0].innerText = json.first_name;
        txt.children[1].innerText = json.last_name;
    }



    if(global_data.article_id){
        fetch('../api/articles_A.php?q=publisher&ref='+global_data.article_id)
        .then(res => res.json())
        .then(data => populate_publisher_data(data))
        .catch(err => err);
    }
}

get_sidebar_articles();
get_article();
get_publisher_data();