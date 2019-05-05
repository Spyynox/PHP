<?php
	session_start();
?>
<?php
	if (empty($_POST["submit1"]) && empty($_POST["submit2"]) && empty($_POST["submit3"])) {
		session_destroy();
	
?>

<form method="POST" action="hideNSeekGet.php?firstname=Maxime&surname=Mbiya&promo=dev">
	Prénom : <input type="text" name="firstname">
			<input type="submit" name="submit1" value="Terminer">
</form>
    
			<?php }
				if (isset($_POST["submit1"])) {
					$_GET["firstname"] = $_POST["firstname"];
				?>
       <form method="POST" action="hideNSeekGet.php?firstname=Maxime&surname=Mbiya&promo=dev">
			Nom : <input type="text" name="surname">
					<input type="submit" name="submit2" value="Terminer">
		</form>

			<?php }
					if (isset($_POST["submit2"])) {
						$_GET["surname"] = $_POST["surname"];
			?>
		<form method="POST" action="hideNSeekGet.php?firstname=Maxime&surname=Mbiya&promo=dev">
			Promo : <input type="text" name="promo">
					<input type="submit" name="submit3" value="Terminer">
		</form>	
				
			<?php }
					if (isset($_POST["submit3"])) {
						$_GET["promo"] = $_POST["promo"];
					

					
?>
	<table border="1">
	<tr>
					<th>Prénom</th>
					<td><?php echo $_GET['firstname'];?></td>
				</tr>

				<tr>
					<th>Nom</th>
					<td><?php echo $_GET['surname'];?></td>
				</tr>

				<tr>
					<th>Promo</th>
					<td><?php echo $_GET['promo'];?></td>
				</tr>
	
	</table>
	<a href="hideNSeekGet.php?firstname=Maxime&surname=Mbiya&promo=dev">Recommencez</a>

<?php }
?>