<?php
    $userid = $_SESSION['id'];
    $query = "SELECT * FROM users WHERE id = '$userid' ";
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
<div class="user_info">
    <div class="user_info_name">
        Section : <?php echo $_SESSION['course']; ?><br>
        <p><?php echo $name; ?></p>
    </div>
    <div class="user_info_img">
        <img src="<?php $uri ?>/src/profilepics/<?php echo $image; ?>"/>
    </div>
</div>