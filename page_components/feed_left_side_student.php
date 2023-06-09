<style>
@import url('../styles/root_styles.css');

.left-side{
    padding-top: 0px;
    background-color: white;
    height: 100%;
    width: 230px;
    position: fixed;
    display: flex;
    align-items: center;
    flex-direction: column;
    row-gap: 12px;
    transition: 160ms;
    box-shadow: 5px 0px 8px rgba(0,0,0,0.1);
    z-index: 10;
    transition: 300ms;
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
    border-radius: 20px;
}
.left-side-button > img{
    position: absolute;
    left: 25px;
    width: 20px;
}
.left-side-button:hover{
    cursor: pointer;
    background-color: rgba(0,0,0,0.2);
}

</style>
















<aside class='left-side' data-visibility='1'>

        <a class='left-side-profile-card' href="./profile.php">
            <span class='profile-img'></span>
            <span class='profile-right-text'>
                <span><?= $_SESSION['first_name'] ?></span>
                <span style="font-size: 10px;">Profile</span>
            </span>
        </a>

        <a href='../page/feed.php' class="left-side-button">
            <img src="../media/icons/home_icon_feed.png"> <span>Flux&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../page/notes.php' class="left-side-button">
            <img src="../media/icons/notes_icon_feed.png"> <span>Notes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
        <a href='../page/class.php' class="left-side-button">
        <img src="../media/icons/class_icon_feed.png"> <span>Classe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </a>
    </aside>


    <script src='../scripts/left_side_feed_C.js'></script>