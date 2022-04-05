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
	<meta charset="utf-8">
	<title>Rate 9ja - News</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/typography.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="images/eth.png">
  <meta  name="viewport" content="width=device-width,initial-scale=1.0"> 
  <meta name="theme-color" content="">
</head>
<body class="noselect" onscroll="scroller()">
  <div class=""><?php include'nav.php'; ?></div>
  <div class=""><?php include'mobile.php'; ?></div>
  <div class="xs-10 xs-off-1 down-10 xs-down-20 md-down-20 col-10 off-1">
  	<div class="centered down-5 xs-down-20">
  		<span class="px20 white bold">News Articles</span>
  		<div class=""><span class="white px13">24 -7 news updates</span></div>
  	</div>
  	<div class="mother down-8 bottom-50 xs-10 xs-off-1 xs-down-5 md-10 md-off-1 md-down-5 centered">
  		<a href="cryptoNews" class="white">
  			 <div class="col-4 md-4 md-down-10 xs-12 xs-down-20 hover-eff scroller">
            <div class="col-10 off-1 md-10 md-off-1 down-5 md-down-5 bottom-20 xs-10 xs-off-1">
              <div class="mother"><span class="px40 gold"><i class="fab fa-bitcoin px80"></i></span></div>
              <div class="mother down-10 xs-down-10 md-down-10"><span class="white px20 bold">Cryptocurrency Articles</span></div>
             <!--  <div class="mother down-5 xs-down-10 md-down-10"><span class="white px13">Crypto rates including 24hr price change, coin market cap,  and market cap rank of over 100 tokens including bitcoin, etherium, solana and more..</span></div> -->
            </div>
          </div>
  		</a>
  		<a href="nairaNews" class="white">
  			 <div class="col-4 md-4 md-down-10 xs-12 xs-down-20 hover-eff scroller">
            <div class="col-10 off-1 md-10 md-off-1 down-5 bottom-20 xs-10 xs-off-1">
              <div class="mother"><span class="px40 color-code-1"><i class="fa fa-exchange-alt px80"></i></span></div>
              <div class="mother down-10 xs-down-10 md-down-10"><span class="white px20 bold">Naira Articles</span></div>
             <!--  <div class="mother down-5 xs-down-10 md-down-10"><span class="white px13">Naira currency exchange rates including current CBN rates, BDC rates, Money Gram, Bank rates and more...</span></div> -->
            </div>
          </div>
  		</a>
  		<a href="cryptoNews" class="white">
  			 <div class="col-4 md-4 md-down-10 xs-12 xs-down-20 hover-eff scroller">
            <div class="col-10 off-1 md-10 md-off-1 md-down-5 down-5 bottom-20 xs-10 xs-off-1">
              <div class="mother"><span class="px40 color-code-1"><i class="fas fa-boxes px80"></i></span></div>
              <div class="mother down-10 xs-down-10 md-down-10"><span class="white px20 bold">Gold Metal Articles</span></div>
             <!--  <div class="mother down-5 xs-down-10 md-down-10"><span class="white px13">Current Gold Metal Prices in Gram, kilogram and Ounce in numerious currencies to include USD, EUR, NGN, JPY and More..</span></div> -->
            </div>
          </div>
  		</a>	
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