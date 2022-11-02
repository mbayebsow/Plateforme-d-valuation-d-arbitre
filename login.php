<?php
  include 'includes/connection.php';
  require_once 'includes/Mobile_Detect.php';
  $detect = new Mobile_Detect;
  include 'includes/links.php';
  session_start([
    'cookie_lifetime' => 86400*365,
  ]);
  if (isset($_POST['login'])) {
    $username  = $_POST['user'];
    $password = $_POST['pass'];
    mysqli_real_escape_string($conn, $username);
    mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn , $query) or die (mysqli_error($conn));
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $user = $row['username'];
        $pass = $row['password'];
        $name = $row['name'];
        $email = $row['email'];
        $role= $row['role'];
        $course = $row['course'];
        $code_pin = $row['code_pin'];
        if (password_verify($password, $pass )) {
          $_SESSION['id'] = $id;
          $_SESSION['username'] = $username;
          $_SESSION['name'] = $name;
          $_SESSION['email']  = $email;
          $_SESSION['role'] = $role;
          $_SESSION['course'] = $course;
          $_SESSION['code_pin'] = $code_pin;
          if ($detect->isMobile()) {
              header("location: /mobile");
          }
          else{
              header("location: /web");
          }
        }
        else {
          echo "<script>alert('invalid username/password');
          window.location.href= './login';</script>";

        }
      }
    }
    else {
      echo "<script>alert('invalid username/password');
      window.location.href= './login';</script>";

    }
  }
?>
<div class="login-page">
<div class="login-page_color"></div>
  <div class="login-page_right">
    <div class="login-page_right_form">
      <p class='login-page_title-logo'>SOUS COMMISSION REGIONALE DES ARBITRES DE RUFISQUE</p>
      <form method="POST">
        <input type="text" name="user" placeholder="Username" required="">
        <input type="password" name="pass" placeholder="Password" required="">
        <input type="submit" name="login" class="login login-submit" value="login">
      </form>
      <div class="login-page_right_help">
        <a href="./recoverpassword">Mot de pass oublier</a>
      </div>
      <p class="passindi">
        Non d'utilisateur : saady • Mot de passe : userpass
      </p>
    </div>
  </div>
</div>
</body>
<style>
</style>
</html>
