<!DOCTYPE html>
<html>
<head>
    <link href="ommetje.css?<?=time();?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="ommetje.js"></script>

    <meta charset="UTF-8">
    <title>Ommetje</title>
</head>
<body>

<h1 class="lefttop">&nbsp &nbsp &nbsp M@chiel1</h1>
<h1 class="xp">XP &nbsp &nbsp &nbsp &nbsp</h1>
<h1 class="righttop"><strong>5</strong> </h1>
<img class="imgb" src="heide.jpg" alt="Paarse Heide" width="100%">
<img class="hersen" src="hersen1.png">
<div class="inverted"></div>
<h1 class="o">0</h1>
<h1 class="tijd">/20</h1>
<h1 class="min">min</h1>
<div class="button">
    <h1>&nbsp &nbsp &nbsp &nbsp Start Ommetje &nbsp &nbsp &nbsp &nbsp</h1>
</div>

<div id="ranglijst">
    <h1 class="teams1">Teams</h1>
    <h1 class="XP">XP Uitleg</h1>
    <h1 class="T">T4I1AA C20</h1>
    <h1 class="bekijk">Bekijk de ranglijst</h1>
    <h1 class="team">Team beheer</h1>
</div>

<div id="medailles">
<h1 class="m1">Medailles</h1>
<div class="m1r">
<div onclick="openPopup('popup')"><img src="m1.png" class="img"> </div>
</div>
<img src="m2.png" class="img1">
<img src="m3.png" class="img2">
<img src="m4.png" class="img3">
<img src="m5.png" class="img4">
<img src="m6.png" class="img5">


</div>

<div id="stats">
    <h1 class="texts">Stats</h1>
    <div class="buttons">
        <h1>&nbsp &nbsp &nbsp &nbsp Bekijk Statistieken &nbsp &nbsp &nbsp &nbsp</h1>
    </div>
    <div class="buttono">
        <h1>&nbsp &nbsp &nbsp &nbsp Bekijk je Ommetjes &nbsp &nbsp &nbsp &nbsp</h1>
    </div>
</div>
<button id="myBtn">Open Modal</button>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p></p>
  </div>

</div>

<div id="popup"><h2>The Hiker medal</h2>Walk a minimum of 20 minutes daily. This will reward you with 5 XP per day.
  <div class='pics'>  
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    <div class="grid"><div class="img-div"><img class="pic1" src="m7.png" height="150"/></div> </div>
    
    
  </div>
  <hr>
  <button class="close-button" onclick="closePopup('popup')">close</button>
</div>

<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>


</body>
</html>