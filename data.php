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

?>
<h1>Data</h1>



<p>

	Tere tulemast <?=$_SESSION["userEmail"];?>!
	<a href="?logout=1">logi välja</a>
</p>