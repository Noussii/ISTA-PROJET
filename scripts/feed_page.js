function leftSideVisibilityHandler(){
    let leftSide = document.querySelector('.left-side');
    let outerContainer = document.querySelector('.outer-container');
    if(leftSide.dataset.visibility == '1'){
        leftSide.style.with = '0px';
        leftSide.style.opacity = '0';
        outerContainer.style.paddingLeft = '10px';
        leftSide.dataset.visibility = 0;
    }else if (leftSide.dataset.visibility == '0'){
        leftSide.style.with = '230px';
        leftSide.style.opacity = '1';
        outerContainer.style.paddingLeft = '250px';
        leftSide.dataset.visibility = 1;
    }
}