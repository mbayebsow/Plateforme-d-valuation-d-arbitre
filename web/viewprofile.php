        <?php 
        include '../includes/adminheader.php'; 
        $user = $_SESSION['id'];
        $query = "SELECT * FROM users WHERE id = '$user' ";
        $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
        while ($row = mysqli_fetch_array($run_query)) {
            $name = $row['name'];
            $email = $row['email'];
            $course = $row['course'];
            $role = $row['role'];
            $bio = $row['about'];
            $image = $row['image'];
            $joindate = $row['joindate'];
            $gender = $row['gender'];
        }
        ?>
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
                            <div class="user_my-account">
                                <div class="user_profilepic-section">
                                    <img src="<?php $uri ?>/src/profilepics/<?php echo $image; ?>"/>
                                </div>
                                <div class="user_datainfo-section">
                                    <div class="user_datainfo-section_name"><?php echo $name; ?></div>
                                    <div class="user_datainfo-section_data"><p>Section : </p><?php echo $course; ?></div>
                                    <div class="user_datainfo-section_data"><p>Role : </p><?php echo $role; ?></div>
                                    <div class="user_datainfo-section_data"><p>Genre : </p><?php echo $gender; ?></div>
                                    <div class="user_datainfo-section_data"><p>Email : </p><?php echo $email; ?></div>
                                    <div class="user_datainfo-section_data"><p>Date inscrit : </p><?php echo $joindate; ?></div>
                                    <div class="user_datainfo-section_data"><p>N° ref : </p><?php echo $bio; ?></div>
                                <div class="user_bottom-section">
                                    <a class="user_bottom edit" href="./userprofile" data-bjax="">Editer</a>
                                    <a class="user_bottom logout" href="<?php echo $uri?>/logout" data-bjax="">Deconnecter</a>
                                </div>
                                </div>
                            </div>
                            <div class="user_geneinfo">
                                <?php include $uri.'/components/userstat.php';?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include $uri.'/components/infomessage.php'; ?>
            </div>
        </div>
    </body>
</html>
