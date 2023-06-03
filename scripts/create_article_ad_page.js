const urlParams = new URLSearchParams(window.location.search);
if(urlParams.get('success') === '1'){
    let message = document.createElement('p');
    let modal = document.getElementById('success-dialog');
    message.innerText = 'Article was created successfully';
    message.style.fontSize = '24px';
    modal.style.backgroundColor = '#90EE90';
    modal.appendChild(message);
    modal.showModal();
    setTimeout(() => {
        modal.close();
    }, 2000);
}
if(urlParams.get('success') === '0'){
    let message = document.createElement('p');
    let modal = document.getElementById('success-dialog');
    message.innerText = 'something went wrong please try again';
    message.style.fontSize = '24px';
    modal.style.backgroundColor = '#ff726f';
    modal.appendChild(message);
    modal.showModal();
    setTimeout(() => {
        modal.close();
    }, 2000);
}


function updatePreview(input, target) {
    let file = input.files[0];
    let reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = function () {
        let img = document.getElementById(target);
        // can also use "this.result"
        img.src = reader.result;
    }
}

