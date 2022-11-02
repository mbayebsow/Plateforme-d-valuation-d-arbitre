<?php
include ('../includes/adminheader.php');
?>
<?php
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$query = "SELECT * FROM users WHERE username = '$username'" ; 
	$result= mysqli_query($conn , $query) or die (mysqli_error($conn));
	if (mysqli_num_rows($result) > 0 ) {
		$row = mysqli_fetch_array($result);
		$userid = $row['id'];
		$usernm = $row['username'];
		$userpassword = $row['password'];
		$useremail = $row['email'];
		$name = $row['name'];
		$profilepic = $row['image'];
		$bio = $row['about'];
	}
	if (isset($_POST['uploadphoto'])) {
		$image = $_FILES['image']['name'];
		$ext = $_FILES['image']['type'];
		$validExt = array ("image/gif",  "image/jpeg",  "image/pjpeg", "image/png");
		if (empty($image)) {
			$picture = $profilepic;
		}
		else if ($_FILES['image']['size'] <= 0 || $_FILES['image']['size'] > 1024000 ) {
			echo "<script>alert('Image size is not proper'); window.location.href='/viewprofile';</script>";
		}
		else if (!in_array($ext, $validExt)){
			echo "<script>alert('Not a valid image'); window.location.href='/viewprofile';</script>";
		}
		else {
			$folder  = $uri.'/src/profilepics/';
			$imgext = strtolower(pathinfo($image, PATHINFO_EXTENSION) );
			$picture = rand(1000 , 1000000) .'.'.$imgext;
			if (move_uploaded_file($_FILES['image']['tmp_name'], $folder.$picture)) {
			$queryupdate = "UPDATE users SET image = '$picture' WHERE id= '$userid' " ;
			$result = mysqli_query($conn , $queryupdate) or die(mysqli_error($conn));
			if (mysqli_affected_rows($conn) > 0) {
				echo "<script>alert('Profile Photo uploaded successfully');
				window.location.href= '/viewprofile';</script>";
			}
			else {
				echo "<script>alert('Error! ..try again');</script>";
			}
		}
		else {
			echo "<script>alert('Error occured while uploading! ..try again');</script>";
		}
	}
}
else  {
	$picture = $row['image'];
}

if (isset($_POST['update'])) {
	require $uri."/gump.class.php";
	$gump = new GUMP();
	$_POST = $gump->sanitize($_POST); 
	$gump->validation_rules(array(
		'name'   => 'required|alpha_space|max_len,30|min_len,2',
		'email'       => 'required|valid_email',
		'bio'    => 'max_len,150',
		'currentpassword' => 'required|max_len,50|min_len,6',
		'newpassword'    => 'max_len,50|min_len,6',
	));
	$gump->filter_rules(array(
		'name' => 'trim|sanitize_string',
		'currentpassword' => 'trim',
		'newpassword' => 'trim',
		'email'    => 'trim|sanitize_email',
		'bio' => 'trim',
	));
	$validated_data = $gump->run($_POST);
	if($validated_data === false) {
		?>
		<center><font color="red" > <?php echo $gump->get_readable_errors(true); ?> </font></center>
		<?php
	}
	else if (!password_verify($validated_data['currentpassword'] ,  $userpassword)) {
		echo  "<center><font color='red'>Current password is wrong! </font></center>";
	}
	else if (empty($_POST['newpassword'])) {
		$name = $validated_data['name'];
		$useremail = $validated_data['email'];
		$updatequery1 = "UPDATE users SET name = '$name' , email='$useremail' WHERE id = '$userid' " ;
		$result2 = mysqli_query($conn , $updatequery1) or die(mysqli_error($conn));
		if (mysqli_affected_rows($conn) > 0) {
			echo "<script>window.location.href='/viewprofile';</script>";
		}
		else {
			echo "<script>alert('An error occured, Try again!');</script>";
		}
	}
	else if (isset($_POST['newpassword']) &&  ($_POST['newpassword'] !== $_POST['confirmnewpassword'])) {
		echo  "<center><font color='red'>New password and Confirm New password do not match </font></center>";	
	}
	else {
		$username = $validated_data['username'];
		$name = $validated_data['name'];
		$useremail = $validated_data['email'];
		$pass = $validated_data['newpassword'];
		$userpassword = password_hash("$pass" , PASSWORD_DEFAULT);
		$updatequery = "UPDATE users SET username = '$username', password = '$userpassword', name='$name', email= '$useremail' WHERE id='$userid'";
		$result1 = mysqli_query($conn , $updatequery) or die(mysqli_error($conn));
		if (mysqli_affected_rows($conn) > 0) {
			echo "<script>alert('PROFILE UPDATED SUCCESSFULLY');
			window.location.href='<?php echo $uri?>/viewprofile';</script>";
		}
		else {
			echo "<script>alert('An error occured, Try again!');</script>";
		}
	}
}
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
							<div class="content-data_edit-profile_image">
								<form role="form" action="" method="POST" enctype="multipart/form-data">
									<label for="post_image"></label>
									<img class="img-responsive" width="100%" src="<?php echo $uri?>/src/profilepics/<?php echo $picture; ?>" alt="Photo">
									<input type="file" name="image"> 
									<br>
									<button type="submit" name="uploadphoto" class="btn btn-primary" value="upload photo">Envoyer la photo</button>
								</form>
							</div>
							<div class="content-data_edit-profile_data">
							<form role="form" action="" method="POST" enctype="multipart/form-data">
								<div class='section-form-group'>
									<div class="form-group">
										<label for="user_title">Nom d'utilisateur</label>
										<input type="username" name="username" class="form-control" value=" <?php echo $username; ?>">
									</div>
									<div class="form-group">
										<label for="user_author">Nom complet</label>
										<input type="text" name="name" class="form-control"  value="<?php echo $name; ?>" required>
									</div>
									<div class="form-group">
										<label for="user_tag">Email</label>
										<input type="email" name="email" class="form-control"  value="<?php echo $useremail; ?>" required>
									</div>
								</div>
								<div class='section-form-group'>
									<div class="form-group">
										<label for="usertag">Mot de passe actuel</label>
										<input type="password" name="currentpassword" class="form-control" placeholder="Saisissez votre mot de passe actuel" required>
									</div>
									<button class="btn btn-primary changingpassword" onclick="myFunction()">Modifier le mot de pass</button>
								</div>
								<div class='section-form-group' id="changingpassword" style="display:none;">
									<div class="form-group">
										<label for="usertag">Nouveau mot de passe</label>
										<input type="password" name="newpassword" class="form-control" placeholder="Entrez un nouveau mot de passe">
									</div>
									<div class="form-group">
										<label for="usertag">Confirmer le nouveau mot de passe</label>
										<input type="password" name="confirmnewpassword" class="form-control" placeholder="Ré-entrez le nouveau mot de passe" >
									</div>
								</div>
								<button type="submit" name="update" class="btn btn-primary" value="Update User">Mettre a jour</button>
							</div>
						</div>
                    </div>
                </div>
                <?php include $uri.'/components/infomessage.php'; ?>
            </div>
        </div>
		<script>
			function myFunction() {
				var x = document.getElementById("changingpassword");
				if (x.style.display === "none") {
					x.style.display = "flex";
				} else {
					x.style.display = "none";
				}
			}
		</script>
    </body>
</html>
