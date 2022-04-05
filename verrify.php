<?php 
// session_start();
// include 'db.php';
// $link = @$_GET['err'];
// $_SESSION['link'] = $link;
// if(isset($_SESSION['link'])){
//   $chk_link = mysqli_query($con, "SELECT * from users where link = '$link' AND status = '0' ");
//   if(mysqli_num_rows($chk_link) > 0){
//       $fecth_user_details = mysqli_query($con, "SELECT * from users where link = '$link'");
//       $row = mysqli_fetch_assoc($fecth_user_details);
//       $mail = $row['mail'];
//   	// $query = mysqli_query($con, "UPDATE users set status = '1', login_status = 'offline' where link = '$link'");
//   }
//   else {
//     header('Location:login');
//   }
// }
// else{
// 	header('Location:signUp');
// }
// $btc = mysqli_query($con, "SELECT * from crypto where id = 1");
// $xau = mysqli_query($con, "SELECT * from xau where id = 1");
// $row = mysqli_fetch_assoc($btc);
// $b = mysqli_fetch_assoc($xau);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Account Set Up</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/typography.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="images/eth.png">
    <meta  name="viewport" content="width=device-width,initial-scale=1.0"> 
</head>
<body>
   <div class="mother bottom-50">
      <div class="hidden-xs hidden-md"><?php include'nav.php'; ?></div>
      <div class="mother hidden-ls"><?php include'mobile.php'; ?></div>
     <div class="col-10 xs-10 md-10 off-1 xs-off-1 md-off-1 xs-down-30 down- md-down-15">
       <div class="col-8 xs-12 down-2 xs-12 xs-down-10 centere">
        <div class="mother down-15 xs-down-5 md-down-5"><span class="faded px13">Please provide the following information to complete your account.</span></div>
        <form method="POST" action="helper" class="down-3 col-8 xs-down-5 xs-12">
          <div class="mother down-1 xs-down-5 md-down-5" hidden="">
            <label class="px13 red">Your Email</label>
            <input type="text" name="mail" value="<?php echo$mail?>" required="" class="login-input bg-faded md-12 md-down-1">
          </div>
          <div class="mother down-5 xs-down-5 md-down-5">
            <label class="px13 red">First Name</label>
            <input type="text" name="first_name" placeholder="answer here" required="" class="login-input bg-faded md-12 md-down-1">
          </div>
          <div class="mother down-5 xs-down-5 md-down-5">
            <label class="px13 red">Last Name</label>
            <input type="text" name="last_name" placeholder="answer here" required="" class="login-input bg-faded md-12 md-down-1">
          </div>
          <div class="mother down-5 xs-down-5 md-down-5">
            <label class="px13 red">Gender</label>
            <div class="mother down-1 xs-down-1 md-down-2">
              <div class="col-3 md-2">
                <label class="px13"> <input type="radio" name="Gender"  value="M">Male</label>
              </div>
                <div class="col-3 md-2">
                    <label class="px13"><input type="radio" name="Gender" value="F"> Female </label>
              </div>
            </div>
          </div>
          <div class="mother down-5 xs-down-5 md-down-5"><span class="px13 red">Set Password</span></div>
           <div class="mother">
            <input type="password" name="password" class="login-input bg-faded" placeholder="password" required="" id="lp1">
            <span class="see-password" onclick="showOnclick('lp1', 'le1')"><i class="fas fa-eye" id="le1"></i></span>
          </div>
          <div class="mother down-5 xs-down-10 md-down-5">
            <input type="submit" name="set_account" value="Create Account" class="btn-sm-3 bg-color-code-1 white px13">
          </div>
        </form>
       </div>
     </div>
   </div>
   <div class="mother bottom-50"></div>
</body>
<script src="js/script.js"></script>
</html>