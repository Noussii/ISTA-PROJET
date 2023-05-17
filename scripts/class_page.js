let emploi_btn = document.querySelector('.emploi_card')
function insertEmploiPdf(){
    if(document.querySelector('#iframe-section')){
        return;
    }
        function insertDom(json){
            let mainContainer = document.querySelector('.main-container-reactive');
            let iframe = document.createElement('iframe');
            let section = document.createElement('section');
            section.id = 'iframe-section';
            iframe.setAttribute('src', json.link);
            section.appendChild(iframe);
            mainContainer.appendChild(section);
        }
        
    fetch('../api/class.php?req=emploi')
    .then(res => res.json())
    .then(json => insertDom(json))
    .catch(err => console.log(err));
}



emploi_btn.onclick = insertEmploiPdf