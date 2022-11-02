<div class="navbar-header">
    <div class="navbar-header-content">
        <div class="header-left">
            <a href="<?php echo $uri?>/web/" class="navbar-brand" data-bjax="">
                <img class="logo_img" src ="<?php echo $uri?>/src/img/logofsf.png"/>
                <p class='title-logo'>SOUS COMMISSION REGIONALE DES ARBITRES DE RUFISQUE</p>
            </a>
        </div>
        <div class="nav navbar-right top-nav">
            <?php include ($uri.'/components/searchbar.php'); ?>
            <small><p>Section :</p> <br> <?php echo $_SESSION['course']; ?></small>
        </div>
    </div>
</div>