<?php
	session_start();
?>
<?php
	if (empty($_POST["submit1"]) && empty($_POST["submit2"]) && empty($_POST["submit3"])) {
		session_destroy();
	
?>

<form method="POST" action="hideNSeekSession.php">
	Prénom : <input type="text" name="firstname">
			<input type="submit" name="submit1" value="Terminer">
</form>
    
			<?php }
				if (isset($_POST["submit1"])) {
					$_SESSION["firstname"] = $_POST["firstname"];
				?>
       <form method="POST" action="hideNSeekSession.php">
			Nom : <input type="text" name="surname">
					<input type="submit" name="submit2" value="Terminer">
		</form>

			<?php }
					if (isset($_POST["submit2"])) {
						$_SESSION["surname"] = $_POST["surname"];
			?>
		<form method="POST" action="hideNSeekSession.php">
			Promo : <input type="text" name="promo">
					<input type="submit" name="submit3" value="Terminer">
		</form>	
				
			<?php }
					if (isset($_POST["submit3"])) {
						$_SESSION["promo"] = $_POST["promo"];
					

					
?>
	<table border="1">
	<tr>
					<th>Prénom</th>
					<td><?php echo $_SESSION['firstname'];?></td>
				</tr>

				<tr>
					<th>Nom</th>
					<td><?php echo $_SESSION['surname'];?></td>
				</tr>

				<tr>
					<th>Promo</th>
					<td><?php echo $_SESSION['promo'];?></td>
				</tr>
	
	</table>
	<a href="hideNSeekSession.php">Recommencez</a>

<?php }
?>
		