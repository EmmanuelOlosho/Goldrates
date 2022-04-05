var token_change = document.querySelectorAll('#token_change');
var cent = document.querySelectorAll('#cent');
var token_icon = document.querySelectorAll('#token_icon');
for(var i = 0; i < token_change.length; i++){
  console.log(token_change[i].innerHTML);
  if(token_change[i].innerHTML < 0) {
    token_change[i].className = "red";
    cent[i].className = "red";
    token_icon[i].className = "fas fa-angle-double-down red"
  }
  else {
    token_change[i].className = "color-code-1";
    cent[i].className = "color-code-1";
    token_icon[i].className = "fas fa-angle-double-up color-code-1"
    token_change[i].innerHTML = "+" + token_change[i].innerHTML;
  }
}

function intToString(num) {
    num = num.toString().replace(/[^0-9.]/g, '');
    if (num < 1000) {
        return num;
    }
    let si = [
      {v: 1E3, s: "K"},
      {v: 1E6, s: "M"},
      {v: 1E9, s: "B"},
      {v: 1E12, s: "T"},
      {v: 1E15, s: "P"},
      {v: 1E18, s: "E"}
      ];
    let index;
    for (index = si.length - 1; index > 0; index--) {
        if (num >= si[index].v) {
            break;
        }
    }
  return (num / si[index].v).toFixed(2).replace(/\.0+$|(\.[0-9]*[1-9])0+$/, "$1") + si[index].s;
}
var cap = document.querySelectorAll('#cap');
for(var i = 0; i < cap.length; i++){
   cap[i].innerHTML = intToString(cap[i].innerHTML);
}
async function goldPrice(){
 var currency = cur.value;
 var url = 'https://data-asg.goldprice.org/dbXRates/'+currency;
 // console.log(url)
  var response = await fetch(url);
  var data = await response.json();
  var price = data.items[0].xauPrice;
  var pcXau = data.items[0].pcXau;
  if (quantity.value == "Gold Per Oz") {
    document.getElementById('xau_price').innerHTML =  price.toFixed(2);
    if(pcXau > 0) {
      document.getElementById('pcxau').className = "xs-px15 color-code-1 promptoR bold";
      document.getElementById('arrow').className = "fas fa-angle-double-up color-code-1 xs-px30";
      document.getElementById('pcxau').innerHTML = "+" + " " + pcXau.toFixed(3)+ "%";;
    }
    else {
       document.getElementById('pcxau').className = "xs-px15 red bold promptoR";
       document.getElementById('arrow').className = "fas fa-angle-double-down  red xs-px30";
       document.getElementById('pcxau').innerHTML = pcXau.toFixed(3) + "%";
    }
  }
 if (quantity.value == "Gold Per Gm") {
   document.getElementById('xau_price').innerHTML = (price / 31.1034768).toFixed(2);
   if(pcXau > 0) {
     document.getElementById('pcxau').className = "xs-px15 color-code-1 promptoR bold";
     document.getElementById('arrow').className = "fas fa-angle-double-up color-code-1 xs-px30";
     document.getElementById('pcxau').innerHTML = "+" + " " + pcXau.toFixed(2)+ "%";
   }
   else {
      document.getElementById('pcxau').className = "xs-px15 red bold promptoR";
      document.getElementById('arrow').className = "fas fa-angle-double-down  red xs-px30";
      document.getElementById('pcxau').innerHTML = pcXau.toFixed(2) + "%";
   }
 }
 if (quantity.value == "Gold Per Kg") {
   document.getElementById('xau_price').innerHTML = (price * 32.1507466).toFixed(2);
   if(pcXau > 0) {
     document.getElementById('pcxau').className = "xs-px15 color-code-1 promptoR bold";
     document.getElementById('arrow').className = "fas fa-angle-double-up color-code-1 xs-px30";
     document.getElementById('pcxau').innerHTML = "+" + " " + pcXau.toFixed(2)+ "%";
   }
   else {
      document.getElementById('pcxau').className = "xs-px15 red bold promptoR";
      document.getElementById('arrow').className = "fas fa-angle-double-down  red xs-px30";
      document.getElementById('pcxau').innerHTML = pcXau.toFixed(2) + "%";
   }
 }
 async function calculate() {
 var value = document.getElementById('input_cal').value;
 var cal = (value * price).toFixed(2)
 var input = document.getElementById('result');
 if(qua_cal.value == "g"){
  result = (cal / 31.1034768).toFixed(2)
  document.getElementById('result').value = result
 }
 else if(qua_cal.value == "Oz"){
  result = cal
  document.getElementById('result').value = result
 }
 else if(qua_cal.value == "Kg"){
  result = (cal * 31.1034768).toFixed(2)
  document.getElementById('result').value = result
 }
}
calculate();
input.addEventListener('input', function(){
  calculate();
})
qua_cal.addEventListener("change", function(){
  calculate();
})
}
setInterval(goldPrice, 1000);
cur.addEventListener("change", function(){
  goldPrice();
})

var p = 0;
function displayAll(){
 if (p == 0) {
 document.getElementById('news').className = "mother "
 document.getElementById('new_btn').style.display = "none"
 p = 1;
 }
 else {
  document.getElementById('news').className = "mother ov-hidden"
  document.getElementById('new_btn').style.display = "block"
 }
}
var y = 0;
function displayAllToken(){
 if (y == 0) {
 document.getElementById('tokens').className = "mother "
 document.getElementById('cry_btn').style.display = "none"
 y = 1;
 }
 else {
  document.getElementById('tokens').className = "mother ov-hidden"
  document.getElementById('cry_btn').style.display = "block"
 }
}
var b = 0;
function displayAllBdc(){
 if (b == 0) {
 document.getElementById('more_bdc').className = "xs-10 xs-off-1 xs-down-5"
 document.getElementById('bdc_btn').style.display = "none"
 b = 1;
 }
 else {
  document.getElementById('tokens').className = "xs-10 xs-off-1 xs-down-5 ov-hidden"
  document.getElementById('bdc_btn').style.display = "block"
 }
}

function scroller(){
  var item = document.querySelectorAll('.scroller');
  for(var i = 0; i < item.length; i++){
    item[i].style.opacity = '0';
    var toTop = window.pageYOffset + item[i].getBoundingClientRect().top
    // console.log(toTop);
    if(window.pageYOffset + 480 > toTop) {
    item[i].style.animation = 'fade-in 1s forwards';
    }
    else{
      item[i].style.animation = 'fade-out  1s forwards';
    }
  }
}
scroller()

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




