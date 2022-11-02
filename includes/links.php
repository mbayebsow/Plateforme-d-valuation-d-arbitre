<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="apple-mobile-web-app-status-bar" content="#ffffff">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">
<title>Bievenue</title>
<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if ($detect->isMobile()) {?>
    <link rel="stylesheet" href="../src/css/mobile.css">
    <?php
}
else{?>
    <link rel="stylesheet" href="../src/css/web.css">
    <?php
}
?>
<link rel="icon" href="../src/img/logofsf.png" type="image/x-icon" />   
<link rel="apple-touch-icon" href="../src/img/logofsf.png">   
<link rel="stylesheet" href="../src/css/bjax.min.css"/>
<link rel="stylesheet" href="../src/css/lightweightpopup.css"/>
<script src="../src/js/jquery-1.9.1.min.js"></script>
<script src="../src/js/bjax.js"></script>
<script src="../src/js/lightWeightPopup.js"></script>
<script src="../src/js/app.js"></script>
<link rel="manifest" href="../manifest.json"/>