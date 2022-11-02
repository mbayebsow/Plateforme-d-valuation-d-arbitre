<?php
  include 'includes/connection.php';
  require_once 'includes/Mobile_Detect.php';
  $detect = new Mobile_Detect;
  include 'includes/links.php';
  if (isset($_POST['recover'])) {
  $email = mysqli_real_escape_string($conn , $_POST['email']);
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $query = "SELECT email FROM users WHERE email = '$email'";
  $run = mysqli_query($conn , $query) or die (mysqli_error($conn) );
  if (mysqli_num_rows($run) > 0) {
    function generateRandomString($length = 5) {
      return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
  }
  
  $token_tmp = generateRandomString();
  $token = md5($token_tmp);
  $url = $_SERVER['REQUEST_URI'];
  $parts = explode('/',$url);
  $dir = $_SERVER['SERVER_NAME'];
  for ($i = 0; $i < count($parts) - 1; $i++) {
  $dir .= $parts[$i] . "/";
  }
  require 'PHPMailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;

  $mail->isSMTP();                            // Set mailer to use SMTP
  $mail->Host = 'mail.dawa-tech.com';             // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                     // Enable SMTP authentication
  $mail->Username = 'support@dawa-tech.com';          // SMTP username
  $mail->Password = 'Mti190@mbaye'; // SMTP password
  $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                          // TCP port to connect to

  $mail->setFrom('support@dawa-tech.com', 'Admin');
  $mail->addReplyTo('support@dawa-tech.com', 'Admin');
  $mail->addAddress($email);

  $mail->isHTML(true);  // Set email format to HTML

  $bodyContent = '<h1>Recover Password Link: </h1>';
  $bodyContent .= 'http://' . $dir . 'verifytoken.php?token='.$token;

  $mail->Subject = 'Email from collegenotesgallery ';
  $mail->Body    = $bodyContent;


  $query2 = "UPDATE users set token = '$token' WHERE email = '$email'";
  $run = mysqli_query($conn , $query2) or die(mysqli_error($conn));
  $count = mysqli_affected_rows($conn);
  if($mail->send() && ($count > 0)) {
    echo "<center> <font color = 'green' >Email with recover password link has been sent </font><center> " ;
  } else {

      echo  "<center> <font color = 'red' >'Message could not be sent.'</font><center> ";
      echo  "<center> <font color = 'red' >'Mailer Error: ' . $mail->ErrorInfo </font><center> ";
  }
  }
  else {
    echo "<center> <font color = 'red' > Entered email does not match to any record </font><center> ";
  }
  }
  else {
    echo "<center> <font color = 'red' > Invalid email type </font><center> ";
  }
}

?>


<div class="login-page">
<div class="login-page_color"></div>
  <div class="login-page_right">
    <div class="login-page_right_form">
      <p class='login-page_title-logo'>SOUS COMMISSION REGIONALE DES ARBITRES DE RUFISQUE</p>
      <form method="POST">
        <input type="text" name="email" placeholder="Enter your Email" required="">
        <input type="submit" name="recover" class="login login-submit" value="send">
      </form>
      <div class="login-page_right_help">
        <a href="./login">Se connecter</a>
      </div>
    </div>
  </div>
</div>
</body>
<style>
</style>
</html>
 
