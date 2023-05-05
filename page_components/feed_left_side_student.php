<style>
@import url('./root_styles.css');

.left-side{
    padding-top: 0px;
    background-color: var(--very-light-gray);
    height: 100%;
    width: 230px;
    position: fixed;
    display: flex;
    align-items: center;
    flex-direction: column;
    row-gap: 12px;
    transition: 160ms;
}

.left-side-profile-card{
    background-color: var(--very-dark-primary-color);
    height: 70px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding-left: 20px;
    box-sizing: border-box;
}
.left-side-profile-card > .profile-img{
    display: inline-block;
    height: 50px;
    width: 50px;
    border: 1px solid white;
    border-radius: 50%;
    background-color: white;
    background-image: url('../media/man.png');
    background-size: contain;
}
.left-side-profile-card > .profile-right-text{
    color: white;
    display: flex;
    /* align-items: center; */
    justify-content: center;
    flex-direction: column;
    height: 50px;
    width: 100px;
}
.left-side-button{
    height: 40px;
    width: 95%;
    color: black;
    font-weight: 900;
    display: flex;
    justify-content: center;
    align-items: center;
    column-gap: 10px;
    position: relative;
}
.left-side-button > img{
    position: absolute;
    left: 25px;
    width: 20px;
}
.left-side-button:hover{
    cursor: pointer;
    background-color: var(--third-color);
}

body{
    height: 100%;
}
a {
    text-decoration: none;
}
.outer-container{
    padding-left: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;
    /* background-color: red; */
}
.main-container {
    width: 95%;
}
.main-container > section{
    background-color: var(--very-light-gray);
    padding: 20px 20px;
    /* margin-bottom: 15px; */
    box-sizing: border-box;
}


</style>
















<aside class='left-side' data-visibility='1'>

        <a class='left-side-profile-card' href="./profile.php">
            <span class='profile-img'></span>
            <span class='profile-right-text'>
                <span><?= $_SESSION['first_name'] ?></span>
                <span style="font-size: 10px;">profile</span>
            </span>
        </a>

        <a href='../index.php' class="left-side-button">
            <img src="../media/icons/home_icon_feed.png"> <span>Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <img src="../media/icons/homework_icon_feed.png"> <span>Homework&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <img src="../media/icons/notes_icon_feed.png"> <span>Notes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <img src="../media/icons/class_icon_feed.png"> <span>Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../index.php' class="left-side-button">
        <img src="../media/icons/newsLetter_icon_feed.png"> <span>Newsletter</span>
        </a>
    </aside>


    <script src='../scripts/left_side_feed_C.js'></script>