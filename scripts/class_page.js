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

function isertMessenger(){
    let messages_outer_container = document.createElement('section');
    let h1 = document.createElement('h1');
    messages_outer_container.appendChild(h1);

    let messages_container = document.createElement('div');
    let one_message_container = document.createElement('div');
    let user_identifier = document.createElement('div');
    let message_user_name_span = document.createElement('span');
    let message_datetime_span = document.createElement('span');

    messages_outer_container.className = 'messages-outer-container';
    messages_container.className = 'messages-container';
    one_message_container.className = 'one-message-container';
    user_identifier.className = 'user-identifier';
    message_user_name_span.className = 'message-user-name';
    message_datetime_span.className = 'message-datetime';

    

}

emploi_btn.onclick = insertEmploiPdf