function createPost(contentString, color){
    let container = document.createElement('section');
    let content = document.createElement('p');

    container.className = 'feed-section';
    container.style.backgroundColor = color;
    content.innerText = contentString;
    container.appendChild(content);
    return container;
}

document.querySelector('.main-container').appendChild(createPost('hello from javascript function', 'yellow'))