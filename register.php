<?

	require 'steamauth/steamauth.php';
	require 'steamauth/userInfo.php';
		
	if(isset($_SESSION['steamid']))
	{
	$id = $_SESSION['steamid'];
	}
	else
	{
		#not logged in
	}
?>
<!DOCTYPE html>
<html>
<title>ECO QC</title>
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
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Accueil</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Candidature</a>
    <a href="temp/soon.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Connection</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">Accueil</a>
    <a href="temp/soon.html" class="w3-bar-item w3-button w3-padding-large">Connection</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Eco Qc</h1>
  <p class="w3-xlarge">Candidature</p>
  <a href="https://discordapp.com/invite/pvBFg2b" target="_blank" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Rejoindre le serveur Discord</a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Eco Qc</h1>
      <!--<h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5> -->

      <p class="w3-text-grey">Communauté québécoise de Eco, le jeu survival, le serveur sera en whitelist, quand le système sur le site sera fonctionnel.</p>
    </div>

    <div class="w3-third w3-center">
     <!-- <i class="fa fa-anchor w3-padding-64 w3-text-red"></i> -->
	  <img src="img/eco-logo.png" alt="Eco logo" height="250" width="250"> 
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <img src="img/StrangeLoopGamesLogo.jpg" alt="Eco logo" height="250" width="250">
    </div>

    <div class="w3-twothird">
      <h1>Strange Loop Games</h1>
      <!--<h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5> -->

      <p class="w3-text-grey">"Our goal at Strange Loop Games is to use the massive power of today’s hardware for gameplay, not just graphics. We use deep, interactive simulations to explore the boundaries of what can be done within a game."</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">eco.netadmins.net</h1>
</div>


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
