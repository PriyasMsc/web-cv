<?php
	session_start();
	if(!ISSET($_SESSION['mem_id'])){
		header("location:index.php");
	}
    require_once("inc/header.php");
    require_once("inc/db_connect.php");

?>

     <br>
			<div class = "col-md-3"></div>
			<div class = "col-md-6 well">
				<h3 class  = "text-primary">Welcome</h3>
				<hr style = "border-top:1px dotted #000;"/>
				<br /><br />
				<?php
					$query = $conn->query("SELECT * FROM `member` WHERE `mem_id` = '$_SESSION[mem_id]'") or die(mysqli_error($conn)); 
					$fetch = $query->fetch_array();
				?>
				<center><h3 class = "text-info">Hi, </h3><h3><?php echo $fetch['firstname']." ".$fetch['lastname'] ?></h3></center>
				<br />
                <a class = "btn btn-danger" href = "welcome.php"><span class = "glyphicon glyphicon-log-out"></span> Members</a>
				<a class = "btn btn-danger" href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a>
			</div>
	</div>	
	</body>
</html>