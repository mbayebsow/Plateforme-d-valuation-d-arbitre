        <?php  include '../includes/headermobile.php'; ?>
        <div id="wrapper">
            <div id="page-wrapper">
                <h2 class="i-title">Activités</h2>
                <div class="data_display">
                    <div class="data_display_card 1">
                        <?php  include $uri.'/components/userstat.php'; ?>
                    </div>
                    <div class="data_display_card 2">
                        <?php  include $uri.'/components/dernierevalarbitre.php'; ?>
                    </div>
                    <div class="data_display_card 3">
                        +
                    </div>
                </div>
                <div class="bottom_section">
                    <h2 class="i-title">Evaluation</h2>
                    <?php  include $uri.'/components/evalution.php'; ?>  

                    <h2 class="i-title">Derniers match</h2>
                    <div class="data_display last_matchs">
                        <?php  include $uri.'/components/derniermatch.php'; ?>
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>