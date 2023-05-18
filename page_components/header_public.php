<header class="h-main">
<div class="header-logo-container">
        <a href="../index.php">
            <img height="40px" src="../media/logo.png" alt="website_logo">
        </a>
        </div>
        <nav class='header-right-nav'>
            <a href="./updates.php" class='updates-link'></a>
            <a href="./login.php" class='login-link'></a>
        </nav>
</header>

<style>
body{
    margin: 0;
    padding-top: 50px;
}
.header-logo-container{
    /* background-color: yellow; */
}
header[class="h-main"]{
margin-top: -50px;
    margin-bottom: 100px;
    position: fixed;
    z-index: 1000;
    box-sizing: border-box;
    padding-left: 30px;
    padding-right: 10px;
    width: 100%;
    background-color: white;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 3px solid lightgray;
    box-shadow: 0px 5px 10px rgb(0, 0, 0,0.2);
}
header[class="h-main"] a {
    color: black;
    text-decoration: none;
}
.header-right-nav{
    display: flex;
    justify-content: end;
    align-items: center;
    gap: 15px;
}
.login-link, .updates-link{
    display: inline-block;
    background-color: rgba(0, 0, 29, 0.084);
    height: 40px;
    width: 40px;
    border-radius: 50%;
    position: relative;
}
.login-link::after{
    content: '';
    width: 25px; 
    height: 25px;
    background-image: url('../media/icons/profile_icon.png');
    position: absolute;
    background-size: cover;
    background-repeat: no-repeat;
    top: 50%;
    left:50%;
    transform: translate(-50%,-50%);
}
.updates-link::after{
    content: '';
    width: 25px; 
    height: 25px;
    background-image: url('../media/icons/newsLetter_icon_feed.png');
    position: absolute;
    background-size: cover;
    background-repeat: no-repeat;
    top: 50%;
    left:50%;
    transform: translate(-50%,-50%);
}
</style>