function generatePost(contentString, color, img){
    let mainContainer = document.querySelector('.main-container')
    let container = document.createElement('section');
    let content = document.createElement('p');

    
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

    
}

let articlesData = fetch('../api/articles_A.php?q=latest&n=5')
.then(res => res.json())
.then(json => generatePosts(json));


generatePost('wtf123 jsgdfjgs gjgfs ', null, '../media/man.png')
