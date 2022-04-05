<?php
include'db.php';
  if (isset($_POST['NGN'])){
    $p_oz = $_POST['NGN'];
    $d_oz = $_POST['USD'];
    $e_oz = $_POST['EUR'];
    $d = $_POST['USD'] / 31.1034768;
    $p = $_POST['NGN'] / 31.1034768;
    $e = $_POST['EUR'] / 31.1034768;
    $d_kg = $_POST['USD'] *  32.1507466;
    $p_kg = $_POST['NGN'] *  32.1507466;
    $e_kg = $_POST['EUR'] *  32.1507466;
    $ngn_kg = number_format($p_kg, 2, '.', ',');
    $usd_kg = number_format($d_kg, 2, '.', ',');
    $eur_kg = number_format($e_kg, 2, '.', ',');
    $ngn_g = number_format($p, 2, '.', ',');
    $usd_g = number_format($d, 2, '.', ',');
    $eur_g = number_format($e, 2, '.', ',');
    $ngn_oz = number_format($p_oz, 2, '.', ',');
    $usd_oz = number_format($d_oz, 2, '.', ',');
    $eur_oz = number_format($e_oz, 2, '.', ',');
    date_default_timezone_set("Africa/Lagos");
    $dat = date("M d");
    $tim = date("h:i a");
    $query = mysqli_query($con, "UPDATE xau SET ngn_g = '$ngn_g', ngn_kg = '$ngn_kg', ngn_oz = '$ngn_oz', usd_g = '$usd_g',  usd_kg = '$usd_kg', usd_oz = '$usd_oz', eur_g = '$eur_g', eur_kg = '$eur_kg', eur_oz = '$eur_oz', dat = '$dat', tim ='$tim' where id = 1 ") or die(mysqli_error($con));
  }
  if (isset($_POST['PRICE_btc'])){
    $btc = $_POST['PRICE_btc'];
    $eth = $_POST['PRICE_eth'];
    $trn = $_POST['PRICE_trn'];
    $dog = $_POST['PRICE_dog'];
    $car = $_POST['PRICE_car'];
    $tet = $_POST['PRICE_tet'];
    $bnb = $_POST['PRICE_bnb'];
    $sol = $_POST['PRICE_sol'];
    $btc_price = number_format($btc, 2, '.', ',');
    $eth_price = number_format($eth, 2, '.', ',');
    $trn_price = number_format($trn, 2, '.', ',');
    $dog_price = number_format($dog, 2, '.', ',');
    $car_price = number_format($car, 2, '.', ',');
    $tet_price = number_format($tet, 2, '.', ',');
    $bnb_price = number_format($bnb, 2, '.', ',');
    $sol_price = number_format($sol, 2, '.', ',');
    $btc_rank = $_POST['RANK_btc'];
    $eth_rank = $_POST['RANK_eth'];
    $trn_rank = $_POST['RANK_trn'];
    $dog_rank = $_POST['RANK_dog'];
    $car_rank = $_POST['RANK_car'];
    $tet_rank = $_POST['RANK_tet'];
    $bnb_rank = $_POST['RANK_bnb'];
    $sol_rank = $_POST['RANK_sol'];
    $btc_image = $_POST['IMAGE_btc'];
    $eth_image = $_POST['IMAGE_eth'];
    $trn_image = $_POST['IMAGE_trn'];
    $dog_image = $_POST['IMAGE_dog'];
    $car_image = $_POST['IMAGE_car'];
    $tet_image = $_POST['IMAGE_tet'];
    $bnb_image = $_POST['IMAGE_bnb'];
    $sol_image = $_POST['IMAGE_sol'];
    $btc_name = $_POST['NAME_btc'];
    $eth_name = $_POST['NAME_eth'];
    $trn_name = $_POST['NAME_trn'];
    $dog_name = $_POST['NAME_dog'];
    $car_name = $_POST['NAME_car'];
    $tet_name = $_POST['NAME_tet'];
    $bnb_name = $_POST['NAME_bnb'];
    $sol_name = $_POST['NAME_sol'];
   echo"98765";
    $query = mysqli_query($con, "UPDATE crypto SET btc_price = '$btc_price', btc_name ='$btc_name', btc_image = '$btc_image', btc_rank ='$btc_rank', eth_price = '$eth_price', eth_name ='$eth_name', eth_image = '$eth_image', eth_rank = '$eth_rank', trn_price = '$trn_price', trn_name ='$trn_name', trn_image = '$trn_image', trn_rank = '$trn_rank', car_price = '$car_price', car_name ='$car_name', car_image = '$car_image', car_rank = '$car_rank', tet_price = '$tet_price', tet_name ='$tet_name', tet_image = '$tet_image', tet_rank = '$tet_rank', bnb_price = '$bnb_price', bnb_name = '$bnb_name', bnb_image = '$bnb_image', bnb_rank = '$bnb_rank',  sol_price = '$sol_price', sol_name = '$sol_name', sol_image = '$sol_image', sol_rank = '$sol_rank',  trn_price = '$trn_price', trn_name = '$trn_name', trn_image = '$trn_image', trn_rank = '$trn_rank' where id = 1") or die(mysqli_error($con));
  }
   // eth_price = '$eth_price', trn_price = '$trn_price', bnb_price = '$tet_price', bnb_price = '$bnb_price', sol_price = '$sol_price', car_price = '$car_price', dog_price = '$dog_price', btc_name = '$btc_name', eth_name = '$eth_name', trn_name = '$trn_name', tet_name = '$tet_name', bnb_name = '$bnb_name', sol_name = '$sol_name', car_name = '$car_name', dog_name = '$dog_name', btc_image = '$btc_image', eth_image = '$eth_image', trn_image = '$trn_image', tet_image = '$tet_image', bnb_image = '$bnb_image', sol_image = '$sol_image', car_image = '$car_image', dog_image = '$dog_image', btc_rank = '$btc_rank', eth_rank = '$eth_rank', trn_rank = '$trn_rank', tet_rank = '$tet_rank', bnb_rank = '$bnb_rank', sol_rank = '$sol_rank', car_rank = '$car_rank', dog_rank = '$dog_rank'

 if (isset($_POST['set_account'])) {
   $mail = $_POST['mail'];
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $password = md5($_POST['password']);
   $trn = date('D-M-Y H:i:s');
   $gender = $_POST['Gender'];
   $query = mysqli_query($con, "UPDATE users SET first_name = '$first_name', last_name = '$last_name', password = '$password', gender = '$gender', status = '1', trn_date = '$trn' where mail = '$mail'");
   if ($query) {
     header('Location:login');
   }
 }
 if(isset($_POST['user_login'])) {
  $mail = $_POST['user_email'];
  $password = md5($_POST['password']);
  $chk = mysqli_query($con, "SELECT * from users where mail = '$mail' AND password = '$password' AND status = '1' limit 1");
  if(mysqli_num_rows($chk) > 0){
     session_name('user');
     session_start();
     $_SESSION['client_mail'] = $mail;
     header("location:clientarea");
  }
  else{
    header('location:login?err=invalid login');
  }
 }
if (isset($_POST['admin_login'])){
  $password = md5($_POST['password']);
  $chk = mysqli_query($con, "SELECT * from admin where password = '$password'");
  if (mysqli_num_rows($chk) > 0){
    session_name('admin');
    session_start();
    $_SESSION['admin'] = $password;
    header('location:admin'); 
  }
  else {
    header('location:cpannel?err=invalid login'); 
  }
}
if (isset($_POST['update_user'])) {
  $first = $_POST['first_name'];
  $last = $_POST['last_name'];
  $id = $_POST['id'];
  $status = $_POST['status'];
  $mail = $_POST['mail'];
  $query = mysqli_query($con, "UPDATE users set first_name = '$first', last_name = '$last', mail = '$mail', login_status = '$status' where id = '$id'") or die();
  if ($query) {
   header('location:ublock');
  }
}
if (isset($_POST['update_details'])) {
  $first = $_POST['first_name'];
  $last = $_POST['last_name'];
  $id = $_POST['id'];
  $query = mysqli_query($con, "UPDATE users set first_name = '$first', last_name = '$last' where id = '$id' ");
  if ($query) {
   header('location:settings');
  }
}
if (isset($_POST['update-admin'])) {
  $first = $_POST['first_name'];
  $last = $_POST['last_name'];
  $id = $_POST['id'];
  $mail = $_POST['email'];
  $query = mysqli_query($con, "UPDATE admin set first_name = '$first', last_name = '$last',  mail = '$mail' where id = 1");
  if ($query) {
   header('location:admin');
  }
}
if (isset($_POST['reset_password'])) {
    $id = $_POST['id'];
    $old = md5($_POST['old']);
    $new = md5($_POST['new']);
    $re_new = md5($_POST['re-new']);
    $chk = mysqli_query($con, "SELECT * from users where id = 1");
    $row = mysqli_fetch_assoc($chk);
    $p = $row['password'];  
    if ($old == $p) {
       if ($new == $re_new) {
        $query = mysqli_query($con, "UPDATE users set password = '$new' where id = '$id' ");
        if ($query) {
          header('location:admin?err=password set');
        }
       }
       else{
        header('location:admin?err=password does not match');

       }
    }
    else{
      header('location:admin?err=invalid old password');
    }
}
if (isset($_POST['reset_password_admin'])) {
    $id = $_POST['id'];
    $old = md5($_POST['old']);
    $new = md5($_POST['new']);
    $re_new =  md5($_POST['re-new']);
    $chk = mysqli_query($con, "SELECT * from admin where id = 1");
    $row = mysqli_fetch_assoc($chk);
    $p = $row['password'];  
    if ($old == $p) {
       if ($new == $re_new) {
        $query = mysqli_query($con, "UPDATE admin set password = '$new' where id = 1 ");
        if ($query) {
          header('location:admin?err=password set');
        }
       }
       else{
        header('location:admin?err=password does not match');

       }
    }
    else{
      header('location:admin?err=invalid old password');
    }
}
if(isset($_POST['delete_user'])){
  $id = $_POST['id'];
  $query = mysqli_query($con, "DELETE FROM users WHERE id = '$id'");
  if($query){
    header('location:users?current=users');
  }
}
if(isset($_POST['send_mail'])){
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $content = mysqli_real_escape_string($con, $_POST['content']);
  $mail =  $_POST['mail'];
  $email =  "ayomidebabatundeolosho@gmail.com";
  $status = 'New message from:';
  $subject = "new message from rates9ja";
  $trn = date('D-M-Y H:i:s');
  $query = mysqli_query($con, "INSERT into mails(name, email, content, status, trn)VALUES('$name', '$mail', '$content', '$status', '$trn')" ) or die(mysqli_error($con));
 if($query){
   $headers = array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
    );
    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" =>$email,
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
                "value" => $content
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
    header('Location:start');
      }
 }
}
if(isset($_POST['back_mail'])){
  $id = $_POST['id'];
  $status = "Old";
  $query = mysqli_query($con, "UPDATE mails set status = '$status' where id = '$id' ");
  if($query){
    header('Location:inbox');
  }
}
if(isset($_POST['add_row'])){
  $name = $_POST['bank_name'];
  $usd = $_POST['usd'];
  $jpy = $_POST['jpy'];
  $eur = $_POST['eur'];
  $query = mysqli_query($con, "INSERT into bank(name, eur, jpy, usd)VALUES('$name', '$eur', '$jpy', '$usd')") or die(mysqli_error($con));
  if($query){
    header('Location:updatenaira');
  }
}
if(isset($_POST['update_bank'])){
  $id = $_POST['id'];
  $name = $_POST['bank_name'];
  $usd = $_POST['usd'];
  $jpy = $_POST['jpy'];
  $eur = $_POST['eur'];
  $query = mysqli_query($con, "UPDATE bank set name = '$name', eur = '$eur', jpy = '$jpy', usd = '$usd' where id = '$id' ") or die(mysqli_error($con));
  if($query){
    header('Location:updatenaira');
  }
}
if(isset($_POST['delete_bank'])){
  $id = $_POST['id'];
  $name = $_POST['bank_name'];
  $usd = $_POST['usd'];
  $jpy = $_POST['jpy'];
  $eur = $_POST['eur'];
  $query = mysqli_query($con, "DELETE from bank where id = '$id' ") or die(mysqli_error($con));
  if($query){
    header('Location:updatenaira');
  }
}
if(isset($_POST['del_mail'])){
  $id = $_POST['id'];
   $query = mysqli_query($con, "DELETE from mails where id = '$id'and status = 'Old'") or die(mysqli_error($con));
  if($query){
    header('Location:inbox');
  }
}
?>