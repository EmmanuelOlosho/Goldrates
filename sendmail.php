<?php 
include'db.php';
if (isset($_POST['sign_up'])) {
  $mail = $_POST['mail'];
  $fullname = $_POST['name'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $name = "Ayomide Babatunde";
  $subject = 'Verify Your Email';
  $status ="0";
  $null = 'null';
  $trn = date("D-M-Y h:i:s");
  $link = md5($trn.$trn.$mail.$trn.$trn.$mail.$trn.$trn.$mail);

  $chk_email = mysqli_query($con, "SELECT * from users where mail = '$mail' limit 1");
  if(mysqli_num_rows($chk_email) > 0){
  	header("Location:signUp?err=mail already exist");
  }
  else{

  $query = mysqli_query($con, "INSERT into users(mail, link, status, name, gender, phone, trn_date)values('$mail', '$link', '$status', '$fullname', '$gender', '$phone','$trn')") or die(mysqli_error($con));
  if ($query) {
  $html = "
 <div style='width: 90%; margin-left:5%; margin-top:10%; font-family:helvetica; text-align: cente;'>
    <div style='width: 100%; height: 100px; line-height: 100px; background-color:#008751; text-align:center;'>
      <span style='font-size: 30px; color:white;'>Rates9ja</span>
    </div>
    <div style='width: 100%; margin-top:5%;'><span style='font-weight: bold; color: black; font-family:20px;'>Hello There!</span></div>
    <div style='width: 100%; margin-top:5%;'><span style='font-size:13px; color:#555;'>Thanks for creating an account with rates9ja please click on the button below to verify your email</span></div>
    <div style='width: 100%; margin-top: 5%;'><a href='http://localhost/index?err=$link' style='display:inline-block;padding: 10px 20px; background-color:#008751; font-size:13px; color:white; text-decoration: none; border-radius: 3px;'>Verify Email Address</a></div>
    <div style='width: 100%; margin-top:5%'><span style='font-size:13px; color:#555;'>Best regards,</span></div>
     <div style='width: 100%; margin-top:0%'><span style='font-size:13px; color:#555;'>Rates9ja</span></div>
  </div>
";
 $headers = array(
      'Authorization: Bearer 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',
      'Content-Type: application/json'
  );
  $data = array(
      "personalizations" => array(
          array(
              "to" => array(
                  array(
                      "email" =>$mail,
                      "name" => $name
                  )
              )
          )
      ),
      "from" => array(
          "email" => "17-30gp054@students.unilorin.edu.ng"
      ),
      "subject" => $subject,
      "content" => array(
          array(
              "type" => "text/html",
              "value" => $html
          )
      )
  );
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($ch);
  curl_close($ch);
  if($ch){
    header("location:signUp?err=successful");
    }
   } 	
 }   
}

// mobile dign up

?>





