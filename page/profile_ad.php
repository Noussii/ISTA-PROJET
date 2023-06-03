<?php 
include_once '../usefulFunctions.php';
include_once '../classes/Administration.php';

if(check_general_authentication()){
    $user_type = return_user_type();
    if($user_type == 'administration'){
        $administration = new Administration($_SESSION['user_id']);
        $data = $administration->return_all_data();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='../styles/root_styles.css'>
    <link rel='stylesheet' href='../styles/profile-page.css'>
    <link rel="icon" type="image/x-icon" href="../media/fav.ico">
</head>
<body>
    <?php add_header_and_left_side_after_auth() ;?>
    <section class="outer-container">
        <main class='main-container-reactive'>
            <section style="background-color: #ff4d2e;">
                <div class="top-section-container" style='color: white;'>
                    <div class="name-and-img-div">
                        <div class="profile-img-container">
                            <div class="profile-img">
                                <span><?=$_SESSION['first_name'][0]?></span>
                            </div>
                        </div>
                        <div class="text-div">
                            <span class="fname"><?=$_SESSION['first_name']?></span>
                            <span class="lname"><?=$data['last_name'];?></span>
                            <?php
                                if($_SESSION['user_type'] == 'student') {?>
                            <span class="lname"><?=$data['nb']?></span>
                      <?php }?>
                        </div>
                    </div>

                    <div class="profile-infos-top">
                        <?php
                            foreach($data as $key => $value){
                                if($key == 'first_name' || $key == 'last_name'){
                                    continue;
                                }
                        ?>
                        <div class="one-line">
                            <span class="title"><?=$key?>:</span>
                            <span class="value"><?=$value?></span>
                        </div>

                  <?php } ?>
                    </div>
                </div>
            </section>
            <section>
                <p> <b>Check your data :</b> <br><br> if something wrong please contact you local administration.</p>
            </section>
        </main>
    </section>
</body>
</html>
