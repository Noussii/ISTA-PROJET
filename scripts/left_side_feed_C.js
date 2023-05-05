function leftSideVisibilityHandler(){
    let leftSide = document.querySelector('.left-side');
    let outerContainer = document.querySelector('.outer-container-reactive');
    if(outerContainer){
        if(leftSide.dataset.visibility == '1'){
            leftSide.style.with = '0px';
            leftSide.style.opacity = '0';
            leftSide.style.display = 'none';
            outerContainer.style.paddingLeft = '0px';
            leftSide.dataset.visibility = 0;
        }else if (leftSide.dataset.visibility == '0'){
            leftSide.style.with = '230px';
            leftSide.style.opacity = '1';
            leftSide.style.display = 'flex';
            outerContainer.style.paddingLeft = '230px';
            leftSide.dataset.visibility = 1;
        }
    }else {
        if(leftSide.dataset.visibility == '1'){
            leftSide.style.with = '0px';
            leftSide.style.opacity = '0';
            leftSide.style.display = 'none';
            leftSide.dataset.visibility = 0;
        }else if (leftSide.dataset.visibility == '0'){
            leftSide.style.with = '230px';
            leftSide.style.opacity = '1';
            leftSide.style.display = 'flex';
            leftSide.dataset.visibility = 1;
        }
    }
}