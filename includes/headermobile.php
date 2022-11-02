<?php
    $uri = "..";
    include('connection.php');
    session_start([
        'cookie_lifetime' => 86400*365,
      ]);
    if (isset($_SESSION['username'])) {
        
    }
    else { 
        header("Location: ../login"); 
    }
    include('links.php');
    if ($detect->isMobile()) {
    }
    else{
        header("location: ../web");
    }
?>
<!DOCTYPE HTML>
<html lang="fr-SN">
    <head>
    </head>
    <body>
    <div class="top_section">
        <div class="notification_alert">
            <?php include('nointernet.php'); ?>
        </div>
        <div class="top-header">
            <a href="./" class="navbar-brand" data-bjax="">
                <img class="logo_img" src ="<?php echo $uri?>/src/img/icons8-home.svg"/>
            </a>
            <?php include('../components/userinfo.php'); ?>
        </div>

        <?php include ('../components/searchbar.php'); ?>
    </div>
