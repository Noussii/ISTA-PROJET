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
document.body.addEventListener('click', function (e){
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


document.getElementById('header-notification-btn').onclick = notificationMenuVisisbilityHandler;

