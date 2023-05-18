document.querySelector('.emploi_card').onclick = function (e){
    fetch('../api/class.php?emploi=true', {method: 'POST',headers: {'Content-Type': 'application/json'}})
    .then(res => console.log(res))
    .catch(err => console.log(err));
}