        <?php  include '../includes/adminheader.php'; ?>
        <div id="wrapper">
            <div id="page-wrapper">
                <div class="content-data_section">
                    <div class="content-data_section_left">
                        <div class="dolum-data avaluez">
                            <?php include $uri.'/components/evalution.php';?>
                        </div>
                    </div>
                    <div class="content-data_section_right">
                        <?php include $uri.'/includes/adminnav.php'; ?>
                        <div class="content-data">
                            <div class="dolum-data">
                                <div class="dolum-data_title">
                                    <img src = "<?php echo $uri?>/src/img/arbitres_icon.svg"/>
                                    <h3>Arbitres récement notés</h3>
                                </div>
                                <?php include $uri.'/components/arbitresnoterec.php';?>
                            </div>
                            <div class="dolum-data">
                                <div class="dolum-data_title">
                                    <img src = "<?php echo $uri?>/src/img/notes_icon.svg"/>
                                    <h3>Meilleurs notes</h3>
                                </div>
                                <?php include $uri.'/components/arbitresmeilnote.php';?>
                            </div>
                            <div class="dolum-data matchs">
                                <div class="dolum-data_title">
                                    <img src = "<?php echo $uri?>/src/img/arbitres_icon.svg"/>
                                    <h3>Derniers matchs</h3>
                                </div>
                                <?php include $uri.'/components/derniermatch.php';?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include $uri.'/components/infomessage.php'; ?>
            </div>
        </div>
        
    </body>
</html>