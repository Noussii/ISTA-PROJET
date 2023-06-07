function insertion(data, parent_element, date_time, user_type){
    let publisher_container = document.createElement('div');
    let circle = document.createElement('div');
    let publisher_left_side = document.createElement('div');
    let publisher_right_side = document.createElement('div');
    let publisher_right_side_txt = document.createElement('div');
    let publisher_fname = document.createElement('h5');
    let publisher_lname = document.createElement('h5');

    let publisher_type = document.createElement('h5');
    let article_date = document.createElement('h5');


    console.log('data isssss: ', data)

    publisher_fname.innerText = data.first_name;
    publisher_lname.innerText = data.last_name;
    circle.innerText = data.first_name[0];
    publisher_type.innerText = user_type;
    article_date.innerText = date_time.slice(0,10);
    circle.className = 'publisher-circle';
    publisher_container.className = 'publisher-container';

    publisher_left_side.className = 'publisher-left_side-container';
    publisher_right_side.className = 'publisher-right-side-container';
    publisher_right_side_txt.append(publisher_fname, publisher_lname);
    publisher_left_side.append(circle, publisher_right_side_txt);
    publisher_right_side.append(publisher_type, article_date);
    publisher_container.append(publisher_left_side, publisher_right_side);
    
    parent_element.insertAdjacentElement("afterbegin", publisher_container);
}

function generatePost(data, color='white'){
    // generatePost(dataObj.body, null,dataObj.key_img_path, dataObj.title, dataObj.article_id);

    let article_body = data.body;
    if(data.body.length > 200){
        article_body = data.body.slice(0, 200)+'...';
    }
    let mainContainer = document.querySelector('.main-container')
    let container = document.createElement('section');
    let content = document.createElement('p');
    let link = document.createElement('a');
    link.href = '../page/article.php?ref='+data.article_id;
    link.innerText = 'Read more.';
    link.style.color = 'blue';
    link.style.paddingLeft = '10px';

    if(data.title){
        let title_h3 = document.createElement('h3');
        title_h3.innerText = data.title;
        container.appendChild(title_h3);
    }
    
    container.className = 'feed-section';
    color ? container.style.backgroundColor = color : false;
    content.innerText = article_body;
    content.appendChild(link);
    container.appendChild(content);

    fetch('../api/articles_A.php?q=publisher&ref='+data.article_id)
    .then(res => res.json())
    .then(json => insertion(json, container, data.date_time, data.user_type))
    .catch(err => console.log(err));
    
    
    if (data.key_img_path) {
        let imgTag = document.createElement("img")
        imgTag.setAttribute("src", data.key_img_path)
        container.appendChild(imgTag)
    }

    mainContainer.appendChild(container)
    return container;
}

function generatePosts(json){
    if(json.empty) return;

    console.log(json)
    if(json.length > 0){
        json.forEach((dataObj, idx) => {
            if(idx == 0){
                generatePost(dataObj);
            }else generatePost(dataObj);
        });
    }
}

let articlesData = fetch('../api/articles_A.php?q=latest&n=5')
.then(res => res.json())
.then(json => generatePosts(json));
