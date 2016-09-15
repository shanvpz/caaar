<!DOCTYPE html>
<html>
<head>
	<title>The Car Chooser</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  .thumb{
    width: 300px;
    height: 250px;
  }
</style>
<script>
function initvalues () {
  loaded = sessionStorage.getItem("loaded");
  if (loaded==1) {
  showUser();
}

else{
   sessionStorage.setItem("budget", "1600000");
  sessionStorage.setItem("seats", "15");
  sessionStorage.setItem("usage", "family");
  sessionStorage.setItem("speed", "30");
  sessionStorage.setItem("fuel", "Petrol");
  sessionStorage.setItem("loaded",1);
  showAll();
}
}
function setbudget(newbud){
  sessionStorage.setItem("budget",newbud);
  showUser();
}
function setseat(newseat){
  sessionStorage.setItem("seats",newseat);
  showUser();
}
function setusage(newusage){
  sessionStorage.setItem("usage",newusage);
  showUser();
}
function setspeed(newspeed){
  sessionStorage.setItem("speed",newspeed);
  showUser();
}
function setfuel(newfuel){
  sessionStorage.setItem("fuel",newfuel);
  showUser();
}
</script>
</head>
<body onload="initvalues()">
<div class="container">
  <form action="#" >
	<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Budget</a></li>
    <li><a data-toggle="tab" href="#menu1">Seats</a></li>
    <li><a data-toggle="tab" href="#menu2">Usage</a></li>
    <li><a data-toggle="tab" href="#menu3">Speed</a></li>
    <li><a data-toggle="tab" href="#menu4">Fuel</a></li>
  </ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Budget</h3><div id="msg"></div><hr>
      <p>
      	<label class="radio-inline"><input type="radio" name="budget" value="200000" onchange="setbudget(this.value)">1-2 Lakhs</label>
<label class="radio-inline"><input type="radio" name="budget" value="500000" onchange="setbudget(this.value)">2-5 Lakhs</label>
<label class="radio-inline"><input type="radio" name="budget" value="1000000" onchange="setbudget(this.value)">Upto 10 Lakhs</label>
      </p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Seats</h3><div id="msg"></div><hr>
      <p><label class="radio-inline"><input type="radio" name="seat" value="2" onchange="setseat(this.value)">2 Seater</label>
<label class="radio-inline"><input type="radio" name="seat" value="4" onchange="setseat(this.value)">4 Seater</label>
<label class="radio-inline"><input type="radio" name="seat" value="7" onchange="setseat(this.value)">upto 7 Seat</label></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Usage</h3><div id="msg"></div><hr>
      <p><label class="checkbox-inline"><input type="radio" name="usage" value="family" onchange="setusage(this.value)">Family Drive</label>
<label class="checkbox-inline"><input type="radio" name="usage" value="sport" onchange="setusage(this.value)">Sport</label>
<label class="checkbox-inline"><input type="radio" name="usage" value="offroad" onchange="setusage(this.value)">Off Road</label>
<label class="checkbox-inline"><input type="radio" name="usage" value="fundrive" onchange="setusage(this.value)">Fun Drive</label>
<label class="checkbox-inline"><input type="radio" name="usage" value="topdown" onchange="setusage(this.value)">Top Down</label>
<label class="checkbox-inline"><input type="radio" name="usage" value="aroundtown" onchange="setusage(this.value)">Around Town</label></p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Speed</h3><div id="msg"></div><hr>
      <p>
        <label class="radio-inline"><input type="radio" name="speed" value="30" onchange="setspeed(this.value)">30kmph - 40kmph</label>
<label class="radio-inline"><input type="radio" name="speed" value="40" onchange="setspeed(this.value)">40kmph - 50kmph</label>
<label class="radio-inline"><input type="radio" name="speed" value="50" onchange="setspeed(this.value)">50kmph - 60kmph</label>
      </p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Fuel</h3><div id="msg"></div><hr>
      <p>
      <label class="radio-inline"><input type="radio" name="fuel" value="Petrol" onchange="setfuel(this.value)">Petrol</label>
<label class="radio-inline"><input type="radio" name="fuel" value="Diesel" onchange="setfuel(this.value)">Diesel</label>
      </p>
    </div>
    </form>
<div id="txtHint">

  <script>
function showUser() {
  var str="hi";

var elements = document.querySelectorAll('[id="msg"]');

for(var i = 0; i < elements.length; i++) {
    elements[i].innerHTML = "Current Options- Budget:"+sessionStorage.getItem("budget")+" | Seats :"+sessionStorage.getItem("seats")+" | Usage :"+sessionStorage.getItem("usage")+" | Speed :"+sessionStorage.getItem("speed")+" | Fuel :"+sessionStorage.getItem("fuel");
}


  
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        console.log(sessionStorage.getItem("budget"));
        xmlhttp.open("GET","getdata.php?fuel="+sessionStorage.getItem("fuel")+"&budget="+sessionStorage.getItem("budget")+"&seats="+sessionStorage.getItem("seats")+"&utility="+sessionStorage.getItem("usage")+"&speed="+sessionStorage.getItem("speed")+"&fuel="+sessionStorage.getItem("fuel"),true);
        xmlhttp.send();
    }
}

function showAll() {
  var str="hi";
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        console.log(sessionStorage.getItem("budget"));
        xmlhttp.open("GET","showall.php",true);
        xmlhttp.send();
    }
}
</script>

</div>
</div>
</body>
</html>