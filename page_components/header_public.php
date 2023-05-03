<header class="h-main">
            <div class="header-logo-container">
        <a href="./index.php">Corner</a>
        </div>
        <nav>
            <a href="./page/updates.php">Updates</a>
            <a href="./page/login.php">Login</a>
        </nav>
</header>

<style>
.header-logo-container{
    /* background-color: red; */
}
header[class="h-main"]{
    margin-top: -50px;
    position: fixed;
    z-index: 1000;
    box-sizing: border-box;
    padding-left: 10px;
    padding-right: 10px;
    width: 100%;
    background-color: white;
    height: 50px;
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