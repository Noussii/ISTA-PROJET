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
.header-logo-container{
    /* background-color: yellow; */
}
header[class="h-main"]{
    margin-top: -50px;
    position: fixed;
    z-index: 1000;
    box-sizing: border-box;
    padding-left: 30px;
    padding-right: 10px;
    width: 100%;
    background-color: white;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 3px solid darkblue;
}
header[class="h-main"] a {
    color: black;
    text-decoration: none;
}
</style>