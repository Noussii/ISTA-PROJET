<style>
.header-right-side-buttons-container{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    width: auto;
    height: 100%;
}
.header-notification-menu-button > img{
    height: 65%;
}

.header-notification-menu{
    background: var(--very-light-gray);
    height: auto;
    width: 400px; 
    position: absolute;
    right: 0px;
    top: 40px;
    border-radius: 10px;
    display: none;
    flex-direction: column;
    align-items: center;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.3);
    border: 1px solid gray;
    overflow: hidden;
    max-width: 100%;
    /* background-color: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(5px); /* Main effect */
}
.header-one-notification{
    background-color: transparent;
    padding: 10px;
    min-height: 60px;
    width: 100%;
    border-bottom: 1px solid lightgray;
    box-sizing: border-box;
    position: relative;
}
.active-notification{
    background-color: var(--ambient-light-color);
}
.active-notification::after{
    content: '';
    width: 10px;
    height: 10px;
    background-color: red;
    position: absolute;
    top: 5px;
    right: 5px;
    border-radius: 50%;
}
.header-one-notification:hover, .header-notification-menu-button:hover{
    background-color: lightgray;
    cursor: pointer;
}

.header-all-button, .header-notification-menu-button{
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--very-light-gray);
    height: 40px;
    width: 40px;
    border-radius: 50%;
    position: relative;
    border: none;
}
.header-all-button::after {
  content: "";
  display: inline-block;
  height: 20px; /* Change this to your desired height */
  width: 20px;
  background-image: url('../media/icons/arrow-down_icon_header.png');
  background-size: contain;
  background-repeat: no-repeat;
}

.header-all-button:hover{
    background-color: gray;
    cursor: pointer;
}
.header-all-button:hover .header-drop-down-menu{
    display: flex;
}
.header-drop-down-menu{
    background-color: var(--very-dark-primary-color);
    padding-top: 30px;
    height: auto;
    width: 250px;
    position: absolute;
    right: -10px;
    top: 35px;
    display: none;
    flex-direction: column;
    align-items: center;
    /* border: 1px solid gray; */
    border-top: none;
    transition: 500ms;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.3);
}
.header-drop-down-menu > .drop-down-menu-item{
    height: 40px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid gray;
    box-sizing: border-box;
    color: white;
}
.drop-down-menu-item:hover{
    background-color: var(--dark-primary-color);
}
.header-logo-container{
    /* background-color: red; */
    display: flex;
    align-items: center;
    column-gap: 10px;
}
.left-side-visibility-btn{
    border: none;
    height: 40px;
    width: 40px;
    background-color: transparent;
}
.left-side-visibility-btn:hover{
    background-color: lightgray;
    cursor: pointer;
}
.header{
    margin-top: -50px;
    position: fixed;
    z-index: 1000;
    box-sizing: border-box;
    padding-left: 40px;
    padding-right: 10px;
    width: 100%;
    background-color: white;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 3px solid darkblue;
}
.header a {
    color: black;
    text-decoration: none;
}
body{
    padding-top: 50px;
    margin: 0px;
}
</style>




<header class="header">
        <div class="header-logo-container">
            <button class='left-side-visibility-btn' onclick="leftSideVisibilityHandler()">|||</button>
            <a href="../index.php">
                <img height="35px" src="../media/logo.png" alt="website_logo">
            </a>
        </div>
        <div class="header-right-side-buttons-container">

            <button id='header-notification-btn' class="header-notification-menu-button active-notification">
                <img src="../media/icons/notification_icon_header.png">                
            </button>
            <button class="header-all-button">
                <nav class="header-drop-down-menu">
                    <a class="drop-down-menu-item" href="../page/profile.php">Profile</a>
                    <a class="drop-down-menu-item" href="../api/logout.php">Logout</a>
                    <a class="drop-down-menu-item" href="../api/logout.php">Logout</a>
                    <a class="drop-down-menu-item" href="../page/help.php">Help</a>
                    <a class="drop-down-menu-item" href="../api/logout.php">Logout</a>
                </nav>
            </button>
            <div class="header-notification-menu" data-visibility="0">
                <div class="header-one-notification active-notification">noti1</div>
                <div class="header-one-notification">noti2</div>
                <div class="header-one-notification">noti3</div>
                <div class="header-one-notification">noti4</div>
            </div>
        </div>
</header>
<script src='../scripts/header_student.js'></script>

