<?php
	
setcookie ("firstname", "Maxime", time()+ 365*24*3600);
setcookie ("surname", "Mbiya", time() + 365*24*3600);
setcookie ("promo", "dev", time() + 365*24*3600);
?>
<?php
	if (empty($_POST["submit1"]) && empty($_POST["submit2"]) && empty($_POST["submit3"])) {
		
	
?>

<form method="POST" action="hideNSeekCookies.php">
	Prénom : <input type="text" name="firstname">
			<input type="submit" name="submit1" value="Terminer">
</form>
    
			<?php }
					if (isset($_POST["submit1"])) {
						$_COOKIE["firstname"] = $_POST["firstname"];
			?>
       <form method="POST" action="hideNSeekCookies.php">
			Nom : <input type="text" name="surname">
					<input type="submit" name="submit2" value="Terminer">
		</form>

			<?php }
					if (isset($_POST["submit2"])) {
						$_COOKIE["surname"] = $_POST["surname"];
			?>
		<form method="POST" action="hideNSeekCookies.php">
			Promo : <input type="text" name="promo">
					<input type="submit" name="submit3" value="Terminer">
		</form>	
				
			<?php }
					if (isset($_POST["submit3"])) {
						$_COOKIE["promo"] = $_POST["promo"];
					

					
?>
	<table border="1">
	<tr>
					<th>Prénom</th>
					<td><?php echo $_COOKIE["firstname"];?></td>
				</tr>

				<tr>
					<th>Nom</th>
					<td><?php echo $_COOKIE['surname'];?></td>
				</tr>

				<tr>
					<th>Promo</th>
					<td><?php echo $_COOKIE['promo'];?></td>
				</tr>
	
	</table>
	<a href="hideNSeekCookies.php">Recommencez</a>

<?php }
?>
		