<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/MPO_Projects/elpasostrong/css/imageZoom.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/MPO_Projects/elpasostrong/css/sidenav.css" media="screen" />
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<div style="background:transparent !important" class="jumbotron text-center">
  <button class="w3-button w3-white w3-xxlarge" onclick="openNav()">&#9776;</button>
  <h1>Quick Bus</h1> 
</div>

<div class="container" hidden>
	  <div class="row">
		<div class="d-flex justify-content-center img-hover">
		<img hidden id = "myImg" class="img-responsive img-rounded" src="/MPO_Projects/elpasostrong/img/pass.jpg">
		</div>
	  </div>
</div>


<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<div class="d-flex justify-content-center navbar">
  <a href="#home" class="active">Home</a>
  <a href="#stats">Stats</a>
   <a id = "showpass" href="#payment">Payment</a>
</div>

<div class="main">

<!--
  <h1>Bottom Navigation Bar</h1>
  <p>Some text some text some text.</p>
  -->
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");
var pass = document.getElementById("showpass");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
pass.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
function openNav() {
  document.getElementById("mySidenav").style.width = "75%";

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";

  }
</script>
</body>
</html>
