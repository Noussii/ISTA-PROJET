let clickable = document.querySelector('.slidshow > .clickable');
let slidshowTitle = document.querySelector('.slidshow-title');

document.querySelector('.section-1-inner-container > .third').addEventListener('click', function() {
    window.location.href = "http://localhost/page/login.php"
  });

clickable.addEventListener('mouseover', ()=>{
    document.querySelector('.slidshow > img').style.transform = "scale(1.2)";
})
slidshowTitle.addEventListener('mouseover', ()=>{
    document.querySelector('.slidshow > img').style.transform = "scale(1.2)";
})
clickable.addEventListener('mouseleave', ()=>{
    document.querySelector('.slidshow > img').style.transform = "scale(1)";
    document.querySelector('.slidshow > img').style.cursor = "pointer";
})

console.log(slidshowTitle)