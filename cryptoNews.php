<?php  
 include'db.php';
 $news = json_decode($json, true);
 $btc = mysqli_query($con, "SELECT * from crypto where id = 1");
 $xau = mysqli_query($con, "SELECT * from xau where id = 1");
 $row = mysqli_fetch_assoc($btc);
 $b = mysqli_fetch_assoc($xau);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Rate 9ja -  News</title>
 <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/typography.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="images/eth.png">
  <meta  name="viewport" content="width=device-width,initial-scale=1.0"> 
  <meta name="theme-color" content="">
</head>
<body>
<div class=""><?php include'nav.php'; ?></div>
<div class=""><?php include'mobile.php'; ?></div>
<div class="col-10 off-1 down-15 bottom-50 md-10 md-off-1 xs-container xs-down-20 md-down-20">
 <div class="mother xs-down-10"><span class="px20 white bold">Crypto Articles</span></div>
 <!-- <div class="mother"><span class="px15 faded">24 - 7 news on rates9ja</span></div> -->
 <div class="mother xs-down-8 down-2 md-down-5">
   <a href="nairaNews" class="btn-sm-3 bg-color-code-1 white px13">Naira News</a>
   <a href="goldNews" class="btn-sm-3 bg-color-code-1 white px13">Gold News</a>
 </div>
 <div class="mother down-3">
 <div class="mother" id="news">
   <?php 
      $trn = date('Y-m-d'); 
      $json = file_get_contents("https://newsapi.org/v2/everything?q=crypto%20market&from=$trn&sortBy=publishedAt&apiKey=f77c16ff80fc455e8d737129df35f5dc");
      $news = json_decode($json, true);
      foreach ($news["articles"] as $i => $article) {
      ?>
     <a href="<?php echo$article['url'] ?>">
      <div class="xs-12 xs-down-10 col-4 down-4">
       <div class="xs-3 col-3">
         <div class="img-container-news"><img src="<?php echo$article['urlToImage'] ?>"></div>
       </div>
       <div class="xs-8 col-8">
        <div class="xs-10 xs-off-1 col-10 off-1">
         <div><span class="white px13 xs-px15"><?php echo$article['title'] ?></span></div>
        </div>
       </div>
      </div>
     </a>
    <?php } ?>
 </div>
 </div>
</div>  
<?php   include'footer.php' ?>
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