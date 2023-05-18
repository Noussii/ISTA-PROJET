<header class="h-main">
            <div class="header-logo-container">
        <a href="../index.php">
            <img height="40px" src="../media/logo.png" alt="website_logo">
        </a>
        </div>
        <nav>
            <a href="./updates.php">Updates</a>
            <a href="./login.php">Login</a>
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
    box-shadow: 0px 5px 10px rgba(0,0,0,0.1)
}
header[class="h-main"] a {
    color: black;
    text-decoration: none;
}
</style>