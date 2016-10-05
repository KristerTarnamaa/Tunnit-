<?php
	//ühendan sessiooniga
	require("functions.php");
	
	//kui ei ole sisse loginud, suunan login lehele.
	if(!isset($_SESSION["userId"])) {
		header("Location: KolmasPHP.php");
	}
	
	
	//kas aadressireal on logout
	if(isset($_GET["logout"])) {
		
		session_destroy();
		
		header("Location: KolmasPHP.php");
		
	}
			if(ISSET($_POST["age"]) &&
			isset($_POST["varv"])){
				 $vanus = $_POST["age"];
				 $varvus = $_POST["varv"];
				 saveEvent($vanus, $varvus);
			}
		
?>
<h1>Data</h1>



<p>

	Tere tulemast <?=$_SESSION["userEmail"];?>!<br><br>
	<a href="?logout=1">logi välja</a> 
</p>


	<p>
	<br><br>
		<form method="POST">
				<input name="age" type="text" value="Vanus"> 
				
				<br><br>
				
				<input name="varv" value="Värvus" type="color"> 
			
				<br><br>
				<input type="submit" value = "Sisesta andmed">
				
		</form>
		
	</p>