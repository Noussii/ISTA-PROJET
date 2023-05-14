function createPost(contentString, color, img){
    let mainContainer = document.querySelector('.main-container')
    let container = document.createElement('section');
    let content = document.createElement('p');

    
    container.className = 'feed-section';
    container.style.backgroundColor = color;
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

createPost('hello from javascript function', 'yellow')
createPost('wtf123 jsgdfjgs gjgfs ', 'red')
