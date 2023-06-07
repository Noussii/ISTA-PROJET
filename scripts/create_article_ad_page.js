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

function showMyModal(title, message, duration, success){
    let dialog = document.getElementById('success-dialog');
    dialog.innerHTML = '';
    let title_element = document.createElement('h1');
    let message_element = document.createElement('p');
    message_element.innerText = message;
    title_element.innerText = title;
    
    if(success && success !== true){
        dialog.style.border = '3px solid '+success;
    }

    if(success === false){
        dialog.style.border = '3px solid red';
    }


    dialog.append(title_element, message_element);
    dialog.showModal()
    if(duration && typeof duration == 'number'){
        setTimeout(() => {
            dialog.close();
        }, duration);
    }
}


if(urlParams.get('dt')){
    console.log(urlParams.get('dt'))
    let safeData = xssBasicPrevention(urlParams.get('dt'));
    safeData = JSON.parse(safeData);
    showMyModal(safeData.title, safeData.message, 3000, safeData.success_state);
}

function xssBasicPrevention(txt){

    txt = txt.replace('function', 'fanction');
    txt = txt.replace('()', '[]');
    const wordsList = ['<script>', '</script>', 'eval(', ';'];
    let regex = /<script>|<\/script>|eval\s\(|eval|;/gi
    txt = txt.replace(regex, '');
    return txt;

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

