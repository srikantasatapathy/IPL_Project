<!DOCTYPE html>
<html>

<head>
  <title>IPL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="menu">
      <a href="index.php"><img src="images/ipl-Banner.jpg" class="logo" /></a>
      <div class="search"><input type="text" placeholder="search team" id="searchbox"></div>             
      <ul>
        <li><a href="newplayers.php">NewPlayers</a></li>  
        <li><a href="addplayers.php">AddPlayers</a></li>
        <li><a href="team.php">Team</a></li>
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>
    
    <form action="registerplayer.php" method="POST">
      <div class="form-area">
        <img src="images/ipl-Banner.jpg" class="imgUser">
        <h3>Player Registration </h3>
        <?php
          session_start();
          if(isset($_SESSION['message']))
          {
             
              //echo '<h4 stlye="color:green">$message</h4>';
              echo $_SESSION['message'];
              unset($$_SESSION['message']);
              
           }
        ?>
        <p>Player Name</p><br>
        <input type="text" placeholder="Enter Your Player name" name="playername">
        <p>Price</p><br>
        <input type="text" placeholder="Enter Your Price" name="price">
        <p>From</p>
        <select name="from">
          <option>Select Team</option>
          <option value="KKR">KKR</option>
          <option value="CSK">CSK</option>
          <option value="MI">MI</option>
          <option value="RCB">RCB</option>
          <option value="DC">DC</option>
          <option value="PK">PK</option>
          <option value="RR">RR</option>
          <option value="SRH">SRH</option>
        </select>
        <p>Description</p>
        <select name="description">
          <option>Select Position</option>
          <option value="Batsman">Batsman</option>
          <option value="All-rounder">All-rounder</option>
          <option value="Bowler">Bowler</option>
        </select>
        <p>Is playing</p>
        <select name="isplaying">
          <option>Select</option>
          <option value="True">True</option>
          <option value="False">False</option>
        </select>
        <input type="submit" name="Register" value="Register" class="submit_btn">
      </div>
    </form>    
    <footer class="footer">
      &copy;2022 &#64;srikantsatapathy | All Rights Rerserved
    </footer>
  </div>
</body>

</html>