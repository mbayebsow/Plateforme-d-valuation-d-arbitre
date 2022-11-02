<?php
    $uri = "..";
    include('connection.php');
    session_start();
    include('links.php');
    if ($detect->isMobile()) {
        header("location: ../mobile/");
    }
    else{
    }
    if (isset($_SESSION['username'])) {}
    else { header("Location: ../login"); }
    $currentusercourse = $_SESSION['course'];
    $userid = $_SESSION['id'];
?>
<!DOCTYPE HTML>
<html lang="fr-SN">
    <head>
    </head>
    <body>
    <div class="notification_alert">
     <?php include('nointernet.php'); ?>
    </div>
    <?php include('navbarheader.php'); ?>
