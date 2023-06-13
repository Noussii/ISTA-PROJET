let emploi_btn = document.querySelector('.emploi_card');
let chat_btn = document.querySelector('.chat_card');
let announce_btn = document.querySelector('.anounce_card');

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

function get_announcements(){
    fetch('../api/class_A.php?q=gt_announcements')
    .then(res => res.json())
    .then(data => populate_announcements(data))
    .catch(err => console.log(err));
}

function populate_announcements(json){

    let outerContainer =document.querySelector('#updated-container');
    outerContainer.innerHTML = '<h1>No announcements have been sent yet.</h1>';
    outerContainer.style.backgroundColor = 'white'; 
    if(json.length > 0){
        outerContainer.innerHTML = '';

        json.forEach(announce => {
            let announce_container = document.createElement('div');
            let announce_left_side_text_container = document.createElement('div');
            let announce_right_side_text_container = document.createElement('div');
            let announce_text = document.createElement('p');
            let sender_full_name = document.createElement('h2');
            let date = document.createElement('p');
            sender_full_name.innerText = announce.first_name+' '+announce.last_name;
            date.innerText = announce.date_time.slice(0, 16);
            date.style.color = 'gray';
            
            console.log(date)
            announce_left_side_text_container.append(sender_full_name, date);

            announce_container.className = 'announce-outer-container';
            announce_left_side_text_container.className = 'announce-left-side-text-container';
            announce_right_side_text_container.className = 'announce-right-side-text-container'
            announce_text.className = 'announce-text-body';


            announce_text.innerText = announce.body;

            switch(announce.sender_type){
                case 'teacher':
                    announce_container.style.backgroundColor = 'rgba(245,255,245)';
                    break;
                case 'administration':
                    announce_container.style.backgroundColor = 'rgba(255,245,245)';
                    break;
            }

            announce_right_side_text_container.appendChild(announce_text);
            announce_container.append(announce_left_side_text_container ,announce_right_side_text_container);
            outerContainer.appendChild(announce_container)
        });


    }


}



function get_emploi(){
    fetch('../api/class_A.php?req=emploi')
    .then(res => res.text())
    .then(link => TempEmploiInsertion(link))
    .catch(err => console.log(err));
}
function TempEmploiInsertion(emploi_link){
    let outerContainer =document.querySelector('#updated-container');
    outerContainer.style.backgroundColor = 'white';
        outerContainer.innerHTML = `
        <section id='iframe-section' style='margin-top: 20px;'>
            <iframe src='${emploi_link}'></iframe>
        </section>
    `;
}

function TempMessengerInsertion(){
    let outerContainer =document.querySelector('#updated-container')
    outerContainer.style.backgroundColor = 'rgb(230,230,230)';
        outerContainer.innerHTML = `
        <section class='messages-outer-container' id='updated-container'>
        <h1>the following section will be added on later updates</h1>
        <h1>Derniers messages :</h1>
        <div class="messages-container">
            <div class="one-message-container">
                <div class="user-identifier">
                    <span class="message-user-name">Ilias</span>
                    <span class="message-datetime">2023-06-07 6:23pm</span>
                </div>
                <p>Salut</p>
            </div>

            <div class="one-message-container my-message">
                <div class="user-identifier">
                    <span class="message-user-name">SNOUSSI</span>
                    <span class="message-datetime">2023-06-07 7:45pm</span>
                </div>
                <p>Bonjour !</p>
            </div>

            <div class="one-message-container">
                <div class="user-identifier">
                    <span class="message-user-name">Ilias</span>
                    <span class="message-datetime">2023-06-07 8:12pm</span>
                </div>
                <p>Demain la compétition</p>
            </div>

            <div class="one-message-container">
                <div class="user-identifier">
                    <span class="message-user-name">SNOUSSI</span>
                    <span class="message-datetime">2023-06-07 8:35pm</span>
                </div>
                <p>Oui, on va gagner sans doute.</p>
            </div>
        </div>
        <section class='message-writing-container'>
            <input type="text" placeholder='Saisissez votre message ici...'>
            <input type="button" value='send'>
        </section>
    </section>`;
}
            
emploi_btn.onclick = get_emploi;
chat_btn.onclick = TempMessengerInsertion;
announce_btn.onclick = get_announcements
document.body.onload = get_emploi


document.body.onload = function(){
    let params = new URLSearchParams(window.location.search);
    if(params.get('l') === 'anouncement'){
        get_announcements();
    }else{
        get_emploi();
    }
}