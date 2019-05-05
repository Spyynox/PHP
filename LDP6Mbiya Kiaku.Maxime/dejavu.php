<meta charset="utf-8">

<?php
	try {
	    $db = new PDO('mysql:host=localhost;dbname=cinema', "root", "");
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
	$first = $db->query("SELECT * from films;")->fetchAll(PDO::FETCH_ASSOC);
	$second = $db->query('SELECT id_film, titre, resum FROM films;')->fetchAll(PDO::FETCH_ASSOC);
	$third = $db->query('SELECT titre, resum, date_debut_affiche FROM films ORDER BY titre LIMIT 10')->fetchAll(PDO::FETCH_ASSOC);
	$fourth = $db->query('SELECT id_film, titre, resum FROM films LIMIT 10')->fetchAll(PDO::FETCH_ASSOC);
	$fifth = $db->query("SELECT titre, resum FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'adventure';")->fetchAll(PDO::FETCH_ASSOC);
	$sixth = $db->query("SELECT titre AS titre_film, resum AS resum_film FROM films WHERE titre LIKE '%28%';")->fetchAll(PDO::FETCH_ASSOC);
	$seventh = $db->query('SELECT titre, resum FROM films WHERE id_film IN (4,8,15,16,23,42);')->fetchAll(PDO::FETCH_ASSOC);
	$eight = $db->query("SELECT sum(places) AS 'places' FROM salles;")->fetchAll(PDO::FETCH_ASSOC);
	$ninth = $db->query("SELECT date_debut_affiche, CONCAT('nouveauté ', titre) AS 'titre film' FROM films WHERE date_debut_affiche >= '2011-11-16' ORDER BY id_film desc;
")->fetchAll(PDO::FETCH_ASSOC);
	$tenth = $db->query("SELECT * FROM films WHERE date_debut_affiche < '1995-03-25' ORDER BY date_debut_affiche LIMIT 10,10;
")->fetchAll(PDO::FETCH_ASSOC);
	$eleventh = $db->query("SELECT etage_salle AS 'num etage', places AS 'nbr place' FROM salles WHERE places > 100 AND (etage_salle BETWEEN 1 AND 3) ORDER BY etage_salle desc;
")->fetchAll(PDO::FETCH_ASSOC);
	
?>
<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($first[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($first as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($second[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($second as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($third[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($third as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($fourth[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($fourth as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($fifth[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($fifth as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($sixth[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($sixth as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($seventh[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($seventh as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($eight as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($eight as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($ninth[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($ninth as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($tenth[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($tenth as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

<table border="1">
	<tr>
		<?php
			//($first [0]["titre"]);
			foreach ($eleventh[1] as $key => $value) { ?>
				<th><?php echo $key ?></th>
				<?php
				
			}	
		?>
	</tr>	

	<?php
		foreach ($eleventh as $key => $value) { ?>
			<tr>
	<?php
		foreach ($value as $key1 => $value1) { ?>
			<td><?php echo $value1; ?></td>	
	<?php } ?>	
		
			</tr>
	<?php }	?>		
</table><br><br>

