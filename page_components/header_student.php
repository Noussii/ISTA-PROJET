<header class="h-main">
        <div class="header-logo-container">
            <button class='left-side-visibility-btn' onclick="leftSideVisibilityHandler()">|||</button>
            <a href="../index.php">
                <img height="35px" src="../media/logo.png" alt="website_logo">
            </a>
        </div>
        <nav>
            <a href="./login.php">Login</a>
            <a href="./updates.php">Updates</a>
            <a href="../api/logout.php">Logout</a>
        </nav>
</header>

<style>
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
header[class="h-main"]{
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
header[class="h-main"] a {
    color: black;
    text-decoration: none;
}

</style>