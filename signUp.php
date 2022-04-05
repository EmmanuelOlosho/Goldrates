<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Create Account</title>
 <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/typography.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="images/eth.png">
  <meta  name="viewport" content="width=device-width,initial-scale=1.0"> 
</head>
<body>
  <?php include'nav.php'; ?>
  <div class="xs-12 col-10 off-1 down-12">
   <?php include'mobile.php'; ?>
   <div class="mother xs-down-10 bottom-50 md-down-20">
     <div class="xs-container md-10 md-off-1 md-down-10 xs-down-20 bottom-20 centere">
      <div class="container xs-down-15 md-down-10">
        <form method="POST" action="sendmail" class="">
          <div class="mother"><span class="px30 white">Sign Up <i class="fas fa-user color-code-1"></i></span></div>
          <div><span class="white px13">enjoy 24-7 fx rates and more.. </span></div>
          <div class="mother xs-down-1 md-down-5 down-1">
            <div class="mother xs-down-5">
              <div class="xs-12 xs-down-3 col-5">
              <div class="mother down-5 xs-down-5 md-down-5">
                <label class="px13 white xs-px15">Full Name</label>
                <input type="text" name="name" placeholder="e.g john doe" required="" class="login-input bg-faded md-12 md-down-1 white">
              </div>
              <div class="mother down-5 xs-down-5 md-down-2">
                <div class="mother"><label class="px13 white xs-px15">Gender</label></div>
                <div class="col-2 md-2 xs-3  down-3 xs-down-3">
                  <label class="px13 white xs-px15" > <input type="radio" name="Gender"  value="Male">Male</label>
                </div>
                  <div class="col-2 md-2  xs-3 down-3 xs-down-3">
                    <label class="px13 white xs-px15"><input type="radio" name="Gender" value="Female"> Female </label>
                </div>
              </div>
              <div class="mother down-4 xs-down-5"><label class="px13 white xs-px15">Email</label></div>
              <div class="xs-2 md-2 hidden-md col-2"><span class="btn-sm-5 color-code-1 px13 bg-faded"><i class="fas fa-envelope white"></i></span></div>
              <div class="xs-10 md-10 col-10"><input type="email" name="mail" class="login-input bg-faded white px13" placeholder="enter valid email" required=""></div>
              <div class="mother down-5 xs-down-8 md-down-5">
                <label class="px13 white xs-px15">Mobile Number</label>
                <input type="number" name="phone" placeholder="+234 90...." required="" class="login-input bg-faded md-12 md-down-1 white">
              </div>
              </div>
           </div>
          </div>          
          <div class="mother xs-down-10 md-down-5 down-3"><span class="faded px13 xs-px20"><a href="" class="color-code-1">Why must i sign up ?</a></span></div>
          <div class="mother xs-down-10 md-down-5 down-3"><input type="submit" class="btn-sm-curved bg-color-code-1 white px13 xs-px20 ralewayR" value="Sign Up" name="sign_up"></div>
          <?php  
             if (@$_GET['err'] == 'successful') {
           ?>
          <div class="mother xs-down-5 md-down-3 down-3"><span class="px13 faded bold">We have sent a verification link to the email address provided, please click on the link provided to verify your email</span></div>
          <?php  } ?>
          <?php  
             if (@$_GET['err'] == 'mail already exist') {
           ?>
          <div class="mother xs-down-10 md-down-5 down-3"><span class="px13 red bold">Someone already created an account with the email you provided. Try Using your personal email.</span></div>
          <?php  } ?>
        </form>
      </div>
    </div>
   </div>
 </div>
</body>
</html>
<script>
  var bar = document.getElementById('bars');
var to_close = document.getElementById('to_close');
var full_nav = document.getElementById('full_nav');
var n = 0;
  function navify() {
    if(n == 0){
      full_nav.className = "mobile-nav-full open-nav";
      to_close.style.display = 'block';
      bar.className = "fas fa-times";
      n = 1;
    }
  else {
    full_nav.className = "mobile-nav-full";
    to_close.style.display = 'none';
    bar.className = "fas fa-bars";
    n = 0
  }
}
</script>
