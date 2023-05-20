function initLeftSideVisibility(){
    if(!localStorage.getItem('leftSideFirstVisit') == '1'){
        localStorage.setItem('leftSideFirstVisit', '1');
        localStorage.setItem('leftSideVisibilityBoolean', '1');
        leftSideVisibilityToggle(true);
    }else {
        if(localStorage.getItem('leftSideVisibilityBoolean') == '1'){
            leftSideVisibilityToggle(true);
        }else{
            leftSideVisibilityToggle(false);
        }
    }
}

initLeftSideVisibility();


function leftSideVisibilityHandler(){
    let leftSide = document.querySelector('.left-side');
    let outerContainer = document.querySelector('.outer-container-reactive');
    // if(outerContainer){
        if(leftSide.dataset.visibility == '1'){
            leftSideVisibilityToggle(false);
            console.log('before false')
        }else if (leftSide.dataset.visibility == '0'){
            leftSideVisibilityToggle(true);
            console.log('before true');
        }
}

function leftSideVisibilityToggle(bool){
    let leftSide = document.querySelector('.left-side');
    let outerContainer = document.querySelector('.outer-container-reactive');
    if(bool === true){
        console.log('from true')
        setVisibilityToLocalStorage(true);
        if(outerContainer){
            leftSide.dataset.visibility = '1';
            leftSide.style.with = '230px';
            leftSide.style.opacity = '1';
            leftSide.style.display = 'flex';
            outerContainer.style.paddingLeft = '230px';
            leftSide.dataset.visibility = 1;
        }else {
            leftSide.dataset.visibility = '1';
            leftSide.style.with = '230px';
            leftSide.style.opacity = '1';
            leftSide.style.display = 'flex';
            leftSide.dataset.visibility = 1;  
        }
    }if(bool === false){
        console.log('from false')
        setVisibilityToLocalStorage(false);
        if(outerContainer){
            leftSide.dataset.visibility = '0';
            leftSide.style.with = '0px';
            leftSide.style.opacity = '0';
            leftSide.style.display = 'none';
            outerContainer.style.paddingLeft = '0px';
            leftSide.dataset.visibility = 0;  
        }else {
            leftSide.dataset.visibility = '0';
            leftSide.style.with = '0px';
            leftSide.style.opacity = '0';
            leftSide.style.display = 'none';
            leftSide.dataset.visibility = 0;  
        }
    }
}

function setVisibilityToLocalStorage(visibilityBoolean){
    if(visibilityBoolean){
        localStorage.setItem('leftSideVisibilityBoolean', '1');
    }else{
        localStorage.setItem('leftSideVisibilityBoolean', '0');
    }
}