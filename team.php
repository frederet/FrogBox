<!DOCTYPE html charset="utf8">
<html>

  <head>
    <title>FrogBox Team</title>
    <link rel="stylesheet" href="./css/web.css">
    <link rel="apple-touch-icon" sizes="57x57" href="./apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-icon-180x180.png">
    <link rel="manifest" href="/manifest.json">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="author" content="auw46">
    <meta name="Description" content="FrogBox Entertainment is a small independent company based out of Portland, Maine.">
    <meta name="Keywords" content="frog, box, frogbox, entertainment, gammasquared, scyfa, arena, arena of, the elders, the, elders, butthole">

    <!--
_____/\\\\\\\\\\\______________/\\\________/\\\__________________/\\\\\\\\\__________________/\\\\\\\\\_        
 ___/\\\/////////\\\___________\/\\\_______\/\\\_______________/\\\////////________________/\\\////////__       
  __\//\\\______\///____________\/\\\_______\/\\\_____________/\\\/_______________________/\\\/___________      
   ___\////\\\___________________\/\\\_______\/\\\____________/\\\________________________/\\\_____________     
    ______\////\\\________________\/\\\_______\/\\\___________\/\\\_______________________\/\\\_____________    
     _________\////\\\_____________\/\\\_______\/\\\___________\//\\\______________________\//\\\____________   
      __/\\\______\//\\\____________\//\\\______/\\\_____________\///\\\_____________________\///\\\__________  
       _\///\\\\\\\\\\\/______________\///\\\\\\\\\/________________\////\\\\\\\\\______________\////\\\\\\\\\_ 
        ___\///////////__________________\/////////_____________________\/////////__________________\/////////__
-->
  </head>

  <body>
    <div class="container">

      <!-- START NAVBAR -->

      <div class="navbar">
        <a href="https://frogboxentertainment.com"><img id="logo" src="./fbl.png" alt="FrogBox Logo" title="Frouje Bouckes"></a>
        <a id="logotext" href="https://frogboxentertainment.com">FROGBOX</a>
        <ul id="succ">

          <!-- COPY PASTE AN "<a href="home.html"><li class="divided">Home</li></a>" TO CREATE A NEW TAB IN THE NAVIGATION BAR ||| MAKE SURE TO CHANGE THE HREF TO THE PATH YOU WANT -->

          <a href="./index">
            <li class="divided">Home</li>
          </a>
          <a href="./games">
            <li class="divided">Games</li>
          </a>
          <a href="./team">
            <li class="divided" style="background: #b5d849; color: white;">Team</li>
          </a>
          <a href="./store">
            <li class="divided">Store</li>
          </a>
          <a href="./contact">
            <li class="divided">Contact</li>
          </a>
        </ul>
      </div>

      <!-- END NAVBAR -->

      <!-- START TEAM MEMBER DISPLAY SHEET - MORE DOCUMENTATION LISTED BELOW -->

      <div class="teamtitle">
        Our Team
      </div>

      <div class="teamwrapper">

<?php
$servername = "localhost";
$username = "frogbox";
$password = "noooooooooooooooooooope";
$dbname = "frogbox";

// connect af
$conn = new mysqli($servername, $username, $password, $dbname);
// for debugging(kinda)
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT image, name, description FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class=\"arrowhover teammember\"><img  class=\"teamimg\" src=\"" . $row['image'] . "\"><p class=\"nametext\">" . $row['name'] . "</p><div class=\"arrow_box regular\">" . $row['description'] . "</div></div>";
    }
} else {
    echo "wtf where r ur employees kiddo";
}
$conn->close();
?>
      </div>
    </div>
  </body>

</html>
