function leftSideVisibilityHandler(){
    let leftSide = document.querySelector('.left-side');
    let mainSection = document.querySelector('.main-section');
    if(leftSide.dataset.visibility == '1'){
        leftSide.style.with = '0px';
        leftSide.style.opacity = '0';
        mainSection.style.paddingLeft = '10px';
        leftSide.dataset.visibility = 0;
    }else if (leftSide.dataset.visibility == '0'){
        leftSide.style.with = '230px';
        leftSide.style.opacity = '1';
        mainSection.style.paddingLeft = '250px';
        leftSide.dataset.visibility = 1;
    }
}