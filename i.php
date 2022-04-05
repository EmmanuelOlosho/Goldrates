<?php 
  include 'db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Rates9ja - your daily rates observer</title>
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/typography.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="images/eth.png">
  <meta  name="viewport" content="width=device-width,initial-scale=1.0"> 
</head>
<body class="noselect" onscroll="scroller()">
  <?php  include'nav.php'; ?>
  <?php  include'mobile.php'; ?>
 <div class="mother bottom-50 bg-black xs-down-10 down-8" id="top">
   <div class="col-10 off-1 xs-container md-10 md-down-1 xs-down-15 md-off-1 down-5">
     <div class="container xs-down-10 shadow col-3 off-3">
       <div class="mother bottom-20 centered bg-color-code-1">
         <div class="mother xs-down-5 down-5"><span class="white px13 xs-px15">GOLD METAL PRICES</span></div>
       </div>
       <div class="mother xs-down-10 down-5">
        <select id="cur" class="bg-black btn-sm-curved white ralewayR">
           <option value="USD" selected="selected">US dolar</option>
              <option value="EUR">EUR</option>
              <option value="JPY">JPY</option>
              <option value="GBP">GBP</option>
              <option value="AED">AED</option>
              <option value="AFN">AFN</option>
              <option value="ALL">ALL</option>
              <option value="AMD">AMD</option>
              <option value="ANG">ANG</option>
              <option value="AOA">AOA</option>
              <option value="ARS">ARS</option>
              <option value="AUD">AUD</option>
              <option value="AWG">AWG</option>
              <option value="AZN">AZN</option>
              <option value="BAM">BAM</option>
              <option value="BBD">BBD</option>
              <option value="BDT">BDT</option>
              <option value="BGN">BGN</option>
              <option value="BHD">BHD</option>
              <option value="BIF">BIF</option>
              <option value="BMD">BMD</option>
              <option value="BND">BND</option>
              <option value="BOB">BOB</option>
              <option value="BRL">BRL</option>
              <option value="BSD">BSD</option>
              <option value="BTN">BTN</option>
              <option value="BWP">BWP</option>
              <option value="BYN">BYN</option>
              <option value="BZD">BZD</option>
              <option value="CAD">CAD</option>
              <option value="CDF">CDF</option>
              <option value="CHF" >CHF</option>
              <option value="CLP">CLP</option>
              <option value="CNY">CNY</option>
              <option value="COP">COP</option>
              <option value="CRC">CRC</option>
              <option value="CUC">CUC</option>
              <option value="CUP">CUP</option>
              <option value="CVE">CVE</option>
              <option value="CZK">CZK</option>
              <option value="DJF">DJF</option>
              <option value="DKK">DKK</option>
              <option value="DOP">DOP</option>
              <option value="DZD">DZD</option>
              <option value="EGP">EGP</option>
              <option value="ERN">ERN</option>
              <option value="ETB">ETB</option>
              <option value="FJD">FJD</option>
              <option value="FKP">FKP</option>
              <option value="GBP">GBP</option>
              <option value="GEL">GEL</option>
              <option value="GGP">GGP</option>
              <option value="GHS">GHS</option>
              <option value="GIP">GIP</option>
              <option value="GMD">GMD</option>
              <option value="GNF">GNF</option>
              <option value="GTQ">GTQ</option>
              <option value="GYD">GYD</option>
              <option value="HKD">HKD</option>
              <option value="HNL">HNL</option>
              <option value="HKD">HKD</option>
              <option value="HRK">HRK</option>
              <option value="HTG">HTG</option>
              <option value="HUF">HUF</option>
              <option value="IDR">IDR</option>
              <option value="ILS">ILS</option>
              <option value="IMP">IMP</option>
              <option value="INR">INR</option>
              <option value="IQD">IQD</option>
              <option value="IRR">IRR</option>
              <option value="ISK">ISK</option>
              <option value="JEP">JEP</option>
              <option value="JMD" >JMD</option>
              <option value="JOD">JOD</option>
              <option value="JPY">JPY</option>
              <option value="KES">KES</option>
              <option value="KGS">KGS</option>
              <option value="KHR">KHR</option>
              <option value="KID">KID</option>
              <option value="KMF">KMF</option>
              <option value="KPW">KPW</option>
              <option value="KRW">KRW</option>
              <option value="KWD">KWD</option>
              <option value="KYD">KYD</option>
              <option value="KZT">KZT</option>
              <option value="LAK">LAK</option>
              <option value="LBP">LBP</option>
              <option value="LKR">LKR</option>
              <option value="LRD">LRD</option>
              <option value="LSL">LSL</option>
              <option value="LYD">LYD</option>
              <option value="MAD">MAD</option>
              <option value="MDL">MDL</option>
              <option value="MGA">MGA</option>
              <option value="MKD">MKD</option>
              <option value="MMK">MMK</option>
              <option value="MNT">MNT</option>
              <option value="MOP">MOP</option>
              <option value="MRU">MRU</option>
              <option value="MUR">MUR</option>
              <option value="MVR">MVR</option>
              <option value="MWK">MWK</option>
              <option value="MXN">MXN</option>
              <option value="MYR">MYR</option>
              <option value="MZN">MZN</option>
              <option value="NAD">NAD</option>
              <option value="NGN">NGN</option>
              <option value="NIO">NIO</option>
              <option value="NOK">NOK</option>
              <option value="NPR">NPR</option>
              <option value="NZD">NZD</option>
              <option value="OMR">OMR</option>
              <option value="PAB">PAB</option>
              <option value="PEN">PEN</option>
              <option value="PGK">PGK</option>
              <option value="PHP">PHP</option>
              <option value="PKR">PKR</option>
              <option value="PLN">PLN</option>
              <option value="PRB">PRB</option>
              <option value="PYG">PYG</option>
              <option value="QAR">QAR</option>
              <option value="RON">RON</option>
              <option value="RSD">RSD</option>
              <option value="RUB">RUB</option>
              <option value="RWF">RWF</option>
              <option value="SAR">SAR</option>
              <option value="SEK">SEK</option>
              <option value="SGD">SGD</option>
              <option value="SHP">SHP</option>
              <option value="SLL">SLL</option>
              <option value="SLS">SLS</option>
              <option value="SOS">SOS</option>
              <option value="SRD">SRD</option>
              <option value="SSP">SSP</option>
              <option value="STN">STN</option>
              <option value="SYP">SYP</option>
              <option value="SZL">SZL</option>
              <option value="THB">THB</option>
              <option value="TJS">TJS</option>
              <option value="TMT">TMT</option>
              <option value="TND">TND</option>
              <option value="TOP">TOP</option>
              <option value="TRY">TRY</option>
              <option value="TTD">TTD</option>
              <option value="TVD">TVD</option>
              <option value="TWD">TWD</option>
              <option value="TZS">TZS</option>
              <option value="UAH">UAH</option>
              <option value="UGX">UGX</option>
              <option value="USD">USD</option>
              <option value="UYU">UYU</option>
              <option value="UZS">UZS</option>
              <option value="VES">VES</option>
              <option value="VND">VND</option>
              <option value="VUV">VUV</option>
              <option value="WST">WST</option>
              <option value="XAF">XAF</option>
              <option value="XCD">XCD</option>
              <option value="XOF">XOF</option>
              <option value="XPF">XPF</option>
              <option value="ZAR">ZAR</option>
              <option value="ZMW">ZMW</option>
              <option value="ZWB">ZWB</option>
        </select>
       </div>
        <div class="xs-10 xs-off-1 xs-top-10 p-none col-10 off-1">
         <div class="mother xs-down-15 centere"> 
          <span class="white fl-right promptoR" id=""><i class="fas fa-angle-double-up color-code-1 xs-px30 px20" id="arrow"></i> <span id="xau_price" class="xs-px30 px20">0.00</span> <sup id="pcxau" class="xs-px15 color-code-1">+0.01%</sup></span>
         </div>
        </div>
         <div class="xs-10 xs-off-1 xs-down-10 bottom-50 col-10 off-1 down-8">
           <select class="select" id="quantity">
             <option>Gold Per Gm</option>
             <option>Gold Per Oz</option>
             <option>Gold Per Kg</option>
           </select>
         </div>
     </div>
     <div class="container xs-down-10 border-color-co xs-down-10 shadow col-3">
       <div class="mother bottom-20 centered bg-color-code-1">
        <div class="mother xs-down-5 down-5"><span class="white px13 xs-px15">GOLD PRICE CAlCULATOR</span></div>
       </div>
        <div class="xs-10 xs-off-1 xs-down-10 col-10 off-1 down-5">
          <div class="xs-2">
            <select class="fl-left bg-black white bold ralewayR" id="qua_cal">
            <option class="">g</option>
            <option class="">Oz</option>
            <option class="">Kg</option>
          </select>
          </div>
          <div class="xs-10 xs-down-10"><input type="text"  value="0.000" class="bg-color-code-1 xs-px30 promptoR cal-input right white bg-black px20" id="result"></div>
         <div class="mother xs-down-15 bottom-50">
          <input type="number" name="" value="1.00" min="0" class="select-int focus" id="input_cal">
         </div>
        </div>
     </div>
     <div class="mother xs-down-10 down-8 col-10 off-1">
      <div class="xs-container xs-down-10 xs-off- col-10 off-1 ">
        <iframe class="bg-white" src="https://goldbroker.com/widget/live/XAU?currency=NGN&height=320" scrolling="no" frameborder="0" width="100%" height="320" style="border: 0; overflow: hidden;"></iframe><br>
      </div>
     </div>
     <div class="mother centered bottom-50 col-10 off-1 down-5">
       <div class="xs-container xs-down-10">
         <div class="mother xs-down-10">
          <i class="fas fa-balance-scale color-code-1 px30"></i> 
          <div class=" mother xs-down-5 down-2" ><span class="white px13">Gold Conversions</span></div>
        </div>
        <div class="mother xs-down-10 promptoR down-2">
          <div class="mother xs-down-1"><span class=" white">1 Ounce =  31.1034768 grams</span></div>
          <div class="mother xs-down-1"><span class=" white">1 killogram =  31.1034768 grams</span></div>
          <div class="mother xs-down-1"><span class=" white">1 Ounce =  31.1034768 grams</span></div>
        </div>
       </div>
     </div>
     <div class="mother bottom-50">
       <div class="xs-container col-10 off-1 down-5">
         <div class="mother bottom-10 bg-color-code-1">
           <div class="centered xs-down-3 down-1"><span class="white px13 xs-px15">GOLD DEALERS</span></div>
          </div>
           <div class="xs-10 xs-off-1 xs-down-10 down-8 centered"><span class="white px15">No information in this section Yet</span></div>  
       </div>
     </div>
   </div>
 </div>
 <div class="mother bottom-50 bg-black">
  <div class="col-10 off-1 bottom-10 border-bottom-code-1 xs-10 xs-off-1"><span class="faded px20">Naira Exchange <i class="fas fa-exchange-alt"></i></span></div>
  <div class="xs-10 xs-off-1 shadow col-4 off-1 down-5 xs-down-10">
   <div class="mother bottom-10 bg-color-code-1">
     <div class="centered xs-down-3 down-2"><span class="white px13 xs-px15">NAIRA RATES</span></div>
    </div>
     <div class="mother xs-down-5">
       <iframe  width="100%" height="100%" style="min-height:164px" scrolling="no" frameborder="0" allowtransparency="1" src="https://www.ngnrates.com/currency-converter/widget/CBN/USD/NGN?title=Naira Rates&bg=000000&text=fff&border=none"></iframe><br/>
       <div class="mother xs-down-10"><a href="https://www.ngnrates.com" target="_blank" style="font-size:13px;color:#fff;float:left;" title="Daily Naira Exchange Rates on NgnRates.com"></a></div>
     </div>
  </div>
 </div>
 <div class="mother bottom-50 bg-black">
  <div class="xs-10 xs-off-1 xs-down-5 col-10 off-1 down-2" id="more_bdc">
    <div class="mother bottom-10 bg-color-code-1">
     <div class="centered xs-down-3 down-1 col-10 off-1"><span class="white px13 xs-px15">REGISTERED BDC DEALERS </span></div>
    </div>
     <div class="xs-container xs-down-10 down-5 col-10 off-1"><span class=" white">Dealer's Information</span></div>
     <div class="mother xs-down-15 down-3">
      <table class="color-code-1 col-10 off-1">
        <tr class="xs-down-1 xs-12 col-10 off-1">
          <div class="mother">
              <span class="px13 xs-off-1 off-2"><i class="fas fa-user white"></i></span>
               <span class="px13 xs-off-4 off-4"><i class="fas fa-map-marker-alt white"></i></span>
               <span class="px13 xs-off-4 off-3"><i class="fas fa-phone-alt white"></i></span>
          </div>
        </tr>
     <?php 
       $i = 0;
       $name = mysqli_query($con, "SELECT * from test where phone != '' limit 40");
       $adds = mysqli_query($con, "SELECT * from sheet2 order by id");
       while ($row = mysqli_fetch_assoc($name) AND $add = mysqli_fetch_assoc($adds)) {
        $i++
      ?>
        <tr class="xs-down-1 xs-12 px13 promptoR">
          <td><?php echo$row['name']; ?></td>
          <td><?php echo$add['address']; ?></td>
          <td><?php echo$row['phone']; ?></td>
        </tr>
   <?php   } ?>
      </table>
     </div>
  </div>
 </div>
 <div class="mother bottom-50">
  <div class="col-10 off-1 bottom-10 border-bottom-code-1 xs-10 xs-off-1 down-2"><span class="faded px20">Cryptocurrencies <i class="fas fa-coins"></i></span></div>
  <div class="mother bottom-10 bg-color-code-1 xs-10 xs-off-1 xs-down-10 col-10 off-1 down-5">
    <div class="centered xs-down-3 down-1"><span class="white px13 xs-px15">CRYPTO CURRENCIES</span></div>
   </div>
      <div class="col-8 off-2 down-1 xs-10 xs-off-1 ov-hidden-cry" id="tokens">
         <?php 
            $trn = date('Y-m-d'); 
            $json = file_get_contents("https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false");
            $news = json_decode($json, true);
            $count = 10;
            for($i = 0; $i < count($news); $i++ ) {
          ?>
        <div class="mother xs-down-15 bottom-10 col-4 down-5">
          <div class="xs-4 xs-down-1 col-3">
            <div class="img-container"><img src="<?php echo $news[$i]['image']?>"></div>
          </div>
          <div class="xs-8 xs-down-5 col-8">
            <div class="xs-10 xs-off-1 col-10 off-1">
             <span class="white bold upper px13 xs-px15"><?php echo $news[$i]['id'] ?>  - <?php echo $news[$i]['symbol'] ?> </span>
             <div class="mother xs-down-10 prosperR down-3"><span class="white">$ <?php echo number_format($news[$i]['current_price'], 4, '.', ','); ?></span></div>
          <td><?php echo$i; ?></td>
             <div class="mother xs-down-8 down-3 px13 xs-px15"><i class="fas fa-angle-double-up green" id="token_icon"></i>  <span class="white" id="token_change"><?php echo  number_format($news[$i]['price_change_percentage_24h'], 2, '.', ',')?></span><span class="white" id="cent">%</span></div>
        <div class="xs-12 xs-down-10 centere down-5 mother">
          <div class="xs-4 col-4">
            <div class="mother"><span class="white px13 xs-px15">Rank</span></div>
            <div class="mother xs-down-10 promptoR" ><span class="white px13 xs-px15"><?php echo $news[$i]['market_cap_rank'] ?> </span></div>
          </div>
          <div class="xs-8 col-8">
            <div class="mother"><span class="white px13 xs-px15">Market Cap</span></div>
            <div class="mother xs-down- promptoR" ><span class="white px13 xs-px15" id="cap"><?php echo $news[$i]['market_cap'] ?> </span></div>
          </div>
        </div>
            </div>
          </div>
        </div>
      <?php    } ?>
      </div>
      <div class="mother centered xs-down-10 centered down-5" id="cry_btn"><a href="javascript:void(0)" class="btn-sm-curved bg-color-code-1 white px13 xs-px15" onclick="displayAllToken()">View All Tokens</a></div>
    </div>
    <div class="mother bottom-50">
      <div class="col-10 off-1 bottom-10 border-bottom-code-1 xs-10 xs-off-1 down-2"><span class="faded px20">News Articles <i class="fas fa-newspaper"></i></span></div>
     <div class="xs-down-10 xs-10 xs-off-1 col-10 off-1 down-5">
      <div class="mother bottom-10 bg-color-code-1">
        <div class="centered xs-down-3 down-1"><span class="white px13 xs-px15">NEWS ARTICLES</span></div>
       </div>
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
       <div class="mother xs-down-5 down-2 centered" id="new_btn"><a href="news" class="btn-sm-curved bg-color-code-1 white px13 xs-px15" onclick="displayAll()">View All Articles</a></div>
     </div>
    </div>
  <?php   include'footer.php' ?>
</body>
<script src="js/script.js"></script>
</html>
  