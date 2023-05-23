function generatePost(contentString, color, img, title){
    let mainContainer = document.querySelector('.main-container')
    let container = document.createElement('section');
    let content = document.createElement('p');

    if(title){
        let title_h3 = document.createElement('h3');
        title_h3.innerText = title;
        container.appendChild(title_h3);
    }
    
    container.className = 'feed-section';
    color ? container.style.backgroundColor = color : false;
    content.innerText = contentString;
    container.appendChild(content);
    
    
    if (img) {
        let imgTag = document.createElement("img")
        imgTag.setAttribute("src",img)
        container.appendChild(imgTag)
    }

    mainContainer.appendChild(container)
    return container;
}

function generatePosts(json){
    if(json.empty) return;

    if(json.length > 0){
        json.forEach((dataObj, idx) => {
            if(idx == 0){
                generatePost(dataObj.body, null, '../media/ista.jpg', dataObj.title);
            }else generatePost(dataObj.body, null, null, dataObj.title);
        });
    }
}

let articlesData = fetch('../api/articles_A.php?q=latest&n=5')
.then(res => res.json())
.then(json => generatePosts(json));
