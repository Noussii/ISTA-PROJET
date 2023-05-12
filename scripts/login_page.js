function showErr(){
    document.querySelector('.alert-message').style.display = 'flex';
}


let searchQuery = new URLSearchParams(window.location.search);
if(searchQuery.get('err')){
    showErr();
}

