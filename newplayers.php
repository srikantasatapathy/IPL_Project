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
        <br><h4 style="font-size: larger; margin-left: 20px;"><b>New Players List</b> </h4><br>
        <table class="table1" border="1" cellspacing="10" cellpadding="10" style="width: 100%; border-style:dashed;">
            <tr style="border: none;">
                <th >ID</th>
                <th >Player Name</th>
                <th >Team Name</th>
                <th >Price</th>
                <th >Playing Status</th>
                <th >Description</th>
            </tr>
            <?php   
              $servername = "localhost";
              $username ="root";
              $password ="";
              $databasename ="ipl_project";
              $conn = mysqli_connect($servername,$username,$password,$databasename);
              $query1 ="select * from ipl";
              $result = mysqli_query($conn,$query1) or die(mysqli_error($conn));	
              while($row=mysqli_fetch_assoc($result))
              {
            
            ?>
              <tr style="text-align: center;">
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['playerName']; ?></td>
                  <td><?php echo $row['from']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['isPlaying']; ?></td>
                  <td><?php echo $row['description']; ?></td>
              </tr>
              <?php  } ?>
        </table><br>
    <footer class="footer">
      &copy;2022 &#64;srikantsatapathy | All Rights Rerserved
    </footer>
  </div>
</body>
</html>