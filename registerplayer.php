<?php 
    $servername = "localhost";
    $username ="root";
    $password ="";
    $databasename ="ipl_project";
	$conn = mysqli_connect($servername,$username,$password,$databasename);
	
		if(isset($_POST['Register']))
		{
			if(!empty($_POST['playername'])&& !empty($_POST['price'])&&!empty($_POST['from'])&&!empty($_POST['description'])&&!empty($_POST['isplaying']))
			{
				$playername = $_POST['playername'];
				$price = $_POST['price'];
				$from = $_POST['from'];	
                $description = $_POST['description'];	
                $isplaying = $_POST['isplaying'];	
				echo"$playername";
				echo"$price";
				echo"$from";
				echo"$description";
				echo"$isplaying";
                
				$query="insert into ipl values ('','$playername','$from','$price','$isplaying','$description')";
				$execute=mysqli_query($conn,$query) or die(mysqli_error($conn));	
				if($execute)
				{
					$_SESSION['message'] ="Player Register Successfully";
					header("location:newplayers.php");
				}
				else
				{
					echo '<script> alert(“ Error in registration”);</script>';
				}
			}
			else
				{
					echo"field should noy be blank";
				}
		}
?>

