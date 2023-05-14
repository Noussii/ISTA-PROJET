function showErr() {
    var alertEl = document.getElementById('alert-message');
    alertEl.classList.add('show');
    alertEl.style.display = 'block';
  }
  
  let searchQuery = new URLSearchParams(window.location.search);
  if (searchQuery.get('err')) {
    showErr();
  }

function Close(){
    var alertDel=document.querySelector('.btn-close')
    var alertSection=document.querySelector('#alert-message')
    if(alertDel){
        alertSection.remove()
    }
}

