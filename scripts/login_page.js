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


var state = false;
function toggle() {
  if (state) {
    document.getElementById("password").setAttribute("type", "password");
    state = false;
  } else {
    document.getElementById("password").setAttribute("type", "text");
    state = true;
  }
}