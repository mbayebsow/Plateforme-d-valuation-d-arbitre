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
                            <img class="no_data" src = "<?php echo $uri?>/src/img/no-data.jpg"/>
                        </div>
                    </div>
                </div>
                <?php include $uri.'/components/infomessage.php'; ?>
            </div>
        </div>
    </body>
</html>