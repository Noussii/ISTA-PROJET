let emploi_btn = document.querySelector('.emploi_card')
let chat_btn = document.querySelector('.chat_card');

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
        
    fetch('../api/class_A.php?req=emploi')
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


function get_emploi(){
    fetch('../api/class_A.php?req=emploi')
    .then(res => res.text())
    .then(link => TempEmploiInsertion(link))
    .catch(err => console.log(err));
}
function TempEmploiInsertion(emploi_link){
    let outerContainer =document.querySelector('#updated-container');
        outerContainer.innerHTML = `
        <section id='iframe-section'>
            <iframe src='${emploi_link}'></iframe>
        </section>
                `;
}

function TempMessengerInsertion(){
    let outerContainer =document.querySelector('#updated-container')
        outerContainer.innerHTML = `
            <section class='messages-outer-container'>
            <h1>latest messages: </h1>
            <div class="messages-container">
            <div class="one-message-container">
            <div class="user-identifier">
            <span class="message-user-name">Ilias</span>
            <span class="message-datetime">2023-05-17 6:23pm</span>
            </div>
            <p>Hello</p>
            </div>
            
            <div class="one-message-container my-message">
            <div class="user-identifier">
            <span class="message-user-name">John</span>
            <span class="message-datetime">2023-05-17 7:45pm</span>
            </div>
            <p>How are you doing?</p>
            </div>
            
            <div class="one-message-container">
                <div class="user-identifier">
                <span class="message-user-name">Sarah</span>
                    <span class="message-datetime">2023-05-17 8:12pm</span>
                </div>
                <p>Hey there!</p>
                </div>
                
                <div class="one-message-container">
                <div class="user-identifier">
                <span class="message-user-name">Ilias</span>
                <span class="message-datetime">2023-05-17 8:35pm</span>
                </div>
                <p>I'm doing well, thank you!</p>
                </div>
                </div>
                    <section class='message-writing-container'>
                    <input type="text" placeholder='type message here..'>
                    <input type="button" value='send'>
                    </section>
                </section>
                `;
        }
            
            emploi_btn.onclick = get_emploi;
            chat_btn.onclick = TempMessengerInsertion;