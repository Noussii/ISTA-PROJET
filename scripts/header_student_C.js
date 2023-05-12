function notificationMenuVisisbilityHandler(){
    let noti_menu = document.querySelector('.header-notification-menu');
    console.log('noti_menu : ', noti_menu)
    if(noti_menu.dataset.visibility == '0'){
        noti_menu.style.display = 'flex';
        noti_menu.dataset.visibility = '1';
    }else{
        noti_menu.style.display = 'none';
        noti_menu.dataset.visibility = '0';
    }
}

document.getElementById('header-notification-btn').onclick = notificationMenuVisisbilityHandler;