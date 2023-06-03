function notificationMenuVisisbilityHandler(){
    let noti_menu = document.querySelector('.header-notification-menu');
    if(noti_menu.dataset.visibility == '0'){
        noti_menu.style.display = 'flex';
        noti_menu.dataset.visibility = '1';
    }else{
        noti_menu.style.display = 'none';
        noti_menu.dataset.visibility = '0';
    }
}
document.addEventListener('click', function (e){
    let noti_menu = document.querySelector('.header-notification-menu');
    let noti_btn = document.querySelector('.header-notification-menu-button');
    let notifications = document.querySelectorAll('.header-one-notification');
    notifications = Array.from(notifications);
    e.stopPropagation();
    let isAnotificationClicked = notifications.some((one_noti) => one_noti == e.target);
    if(e.target.contains(noti_btn)) return;
    if(isAnotificationClicked) return;
    if(!e.target.contains(noti_menu)){
        noti_menu.dataset.visibility = '0';
        noti_menu.style.display = 'none';
    }
})
document.addEventListener('touchstart', function (e){
    let noti_menu = document.querySelector('.header-notification-menu');
    let noti_btn = document.querySelector('.header-notification-menu-button');
    let notifications = document.querySelectorAll('.header-one-notification');
    notifications = Array.from(notifications);
    e.stopPropagation();
    let isAnotificationClicked = notifications.some((one_noti) => one_noti == e.target);
    if(e.target.contains(noti_btn)) return;
    if(isAnotificationClicked) return;
    if(!e.target.contains(noti_menu)){
        noti_menu.dataset.visibility = '0';
        noti_menu.style.display = 'none';
    }
})

{/* <div class="header-notification-menu" data-visibility="0">
        <div class="header-one-notification active-notification">noti1</div>
        <div class="header-one-notification">noti2</div>
        <div class="header-one-notification">noti3</div>
        <div class="header-one-notification">noti4</div>
    </div> */}


function getNotifications(){

    function populateNotifications(json){
        let noti_menu = document.querySelector('.header-notification-menu');
        let active_noti_counter = 0;
        
        if(json.dont_have_notifications) return;

        while(noti_menu.lastChild){
            noti_menu.removeChild(noti_menu.lastChild);
        }
        
        json.forEach(dataObj => {
            console.log(dataObj)
            let one_noti = document.createElement('a');
            one_noti.innerText = dataObj.message;
            one_noti.dataset.checked = dataObj.checked;
            one_noti.dataset.context = dataObj.context;
            one_noti.dataset.ref = dataObj.noti_id;
            one_noti.classList.add('header-one-notification');
            // if(dataObj.link) one_noti.setAttribute('href', dataObj.link);
            if(dataObj.checked == 0){
                active_noti_counter++;
                one_noti.classList.add('active-notification');
                switch(dataObj.context){
                    case 'administration':
                        one_noti.classList.add('ad');
                        break;
                    case 'teacher':
                        one_noti.classList.add('te');
                        break;
                    case 'system':
                        one_noti.classList.add('sys');
                }
            }

            one_noti.addEventListener('click', function (){
                if(one_noti.dataset.checked == 1){
                    window.location.href = dataObj.link;
                    return;
                }
                one_noti.dataset.checked = 1;
                one_noti.classList.remove('active-notification', 'te');
                fetch('../api/header.php?q=checked&noti_ref='+one_noti.dataset.ref)
                .then(()=> {
                    window.location.href = dataObj.link;
                })
                .catch(err => console.log(err));
            });
            noti_menu.insertAdjacentElement('afterbegin',one_noti);
        });
        active_noti_counter > 0 ? document.querySelector('#header-notification-btn').classList.add('active-notification') : false;
    }

    fetch('../api/header.php?req=notifications')
    .then(response => response.json())
    .then(data => populateNotifications(data))
}
getNotifications();

document.getElementById('header-notification-btn').onclick = notificationMenuVisisbilityHandler;