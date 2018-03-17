﻿<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
<title>EcoQc</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
    body, h1, h2, h3, h4, h5 {
        font-family: "Poppins", sans-serif
    }

    body {
        font-size: 16px;
    }

    .w3-half img {
        margin-bottom: -6px;
        margin-top: 16px;
        opacity: 0.8;
        cursor: pointer
    }

        .w3-half img:hover {
            opacity: 1
        }
</style>
<body>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar">
        <br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container">
            <h3 class="w3-padding-64"><b><strong>EcoQc</strong></b></h3>
        </div>
        <div class="w3-bar-block">
            <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Accueil</a>
            <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Candidature</a>
			<a href="staff.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Staff</a>
            <a href="https://discord.gg/pvBFg2b" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Discord</a>
        </div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
        <span>EcoQc</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">

        <!-- Header -->
        <div class="w3-container" style="margin-top:80px" id="showcase">
            <h1 class="w3-jumbo"><b>Candidature soumise</b></h1>
            <hr style="width:50px;border:5px solid blue" class="w3-round">
        </div>

        <div class="w3-container">
			<p>Tu seras recontacter par Discord par le staff pour ton entretiens, si tu n'a pas de microphone, ils pourront te le faire passer par message privées.</p>
			<button type="" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom">Rejoindre le serveur Discord</button>
		</div>

        <!-- End page content -->
    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }
    </script>

</body>
</html>
