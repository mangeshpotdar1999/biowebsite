<!DOCTYPE html>
<html lang="en">
<title>Assess your BMW</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="bmwRules.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">BMW Rules</a>
    <a href="assessBmw.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Assess BMW</a>
    <a href="doAndDont.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Do&#39s and Don&#39ts</a>
    <a href="aboutUs.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="bmwRules.html" class="w3-bar-item w3-button w3-padding-large">BMW Rules 2016</a>
    <a href="assessBmw.html" class="w3-bar-item w3-button w3-padding-large">Assess BMW</a>
    <a href="doAndDont.html" class="w3-bar-item w3-button w3-padding-large">Do&#39s and Dont&#39s</a>
    <a href="aboutUs.html" class="w3-bar-item w3-button w3-padding-large">About Us</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-yellow w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Assess Your Biomedical Waste Management</h1>
  <p class="w3-xlarge">A project by Team Agnipankh</p>
  <button href="doAndDont.html" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Do's and Dont's</button>
</header>

<h3>Biomedical Waste Management Assessment</h3>

<div>
  <form method="post">
        <label for="n1">Steps involved in process</label>
    <select id="n1" name="n1">
      <option value="6">6</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    
            <label for="n2">Segragation</label>
    <select id="n2" name="n2">
      <option value="6">6</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    
            <label for="n9">Record Keeping</label>
    <select id="n9" name="n9">
      <option value="3">3</option>
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
    
            <label for="n3">Collection</label>
    <select id="n3" name="n3">
        <option value="3">3</option>
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
    
            <label for="n4">Packaging</label>
    <select id="n4" name="n4">
          <option value="5">5</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
       <option value="4">4</option>
    </select>
    
            <label for="n5">Labelling</label>
    <select id="n5" name="n5">
          <option value="2">2</option>
      <option value="1">1</option>
    </select>
            <label for="n6">Interim Storage</label>
    <select id="n6" name="n6">
      <option value="1">1</option>
    </select>

            <label for="n7">In-house Transportation</label>
    <select id="n7" name="n7">
          <option value="2">2</option>
      <option value="1">1</option>
    </select>
    
                <label for="n8">Central waste collection room for biomedical waste</label>
    <select id="n8" name="n8">
           <option value="4">4</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    
        <label for="n9">Record Keeping</label>
    <select id="n9" name="n9">
          <option value="3">3</option>
      <option value="1">1</option>
      <option value="2">2</option>

    </select>
    <input type="submit" value="Calculate Percentage" name="result" >
  </form>
<?php
if(isset($_post['result']))
{
	$n1=$_post['n1'];
	$n2=$_post['n2'];
	$n3=$_post['n3'];
	$n4=$_post['n4'];
	$n5=$_post['n5'];
	$n6=$_post['n6'];
	$n7=$_post['n7'];
	$n8=$_post['n8'];
	$n9=$_post['n9'];
	$per=((($n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9)*100)/26);
	echo "Percentage for Biomedical waste assessment: ".$per;
}
?>
</div>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
  <button href="assessBmw.html" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Assess your BMW</button>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>A project by <a href="www.google.co.in" target="_blank">Team Agnipankh</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
