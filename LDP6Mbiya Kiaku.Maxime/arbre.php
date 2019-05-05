<meta charset="utf-8">
<?php
	try {
	    $db = new PDO('mysql:host=localhost;dbname=cinema', "root", "");
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
	$distributeur = $db->query("SELECT nom FROM distributeurs;")->fetchAll(PDO::FETCH_ASSOC);
	$detective = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'detective';")->fetchAll(PDO::FETCH_ASSOC);
	$dramatic_comedy = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'dramatic comedy';")->fetchAll(PDO::FETCH_ASSOC);
	$science_fiction = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'science fiction';")->fetchAll(PDO::FETCH_ASSOC);
	$drama = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'drama';")->fetchAll(PDO::FETCH_ASSOC);
	$documentary = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'documentary';")->fetchAll(PDO::FETCH_ASSOC);
	$animation = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'animation';")->fetchAll(PDO::FETCH_ASSOC);
	$comedy = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'comedy';")->fetchAll(PDO::FETCH_ASSOC);
	$fantasy = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'fantasy';")->fetchAll(PDO::FETCH_ASSOC);
	$action = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'action';")->fetchAll(PDO::FETCH_ASSOC);
	$thriller = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'thriller';")->fetchAll(PDO::FETCH_ASSOC);
	$adventure = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'adventure';")->fetchAll(PDO::FETCH_ASSOC);
	$various = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'various';")->fetchAll(PDO::FETCH_ASSOC);
	$historical = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'historical';")->fetchAll(PDO::FETCH_ASSOC);
	$western = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'western';")->fetchAll(PDO::FETCH_ASSOC);
	$romance = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'romance';")->fetchAll(PDO::FETCH_ASSOC);
	$music = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'music';")->fetchAll(PDO::FETCH_ASSOC);
	$musical = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'musical';")->fetchAll(PDO::FETCH_ASSOC);
	$horror = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'horror';")->fetchAll(PDO::FETCH_ASSOC);
	$war = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'war';")->fetchAll(PDO::FETCH_ASSOC);
	$unknow = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'unknow';")->fetchAll(PDO::FETCH_ASSOC);
	$spying = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'spying';")->fetchAll(PDO::FETCH_ASSOC);
	$historical_epic = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'historical epic';")->fetchAll(PDO::FETCH_ASSOC);
	$biography = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'biography';")->fetchAll(PDO::FETCH_ASSOC);
	$experimental = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'experimental';")->fetchAll(PDO::FETCH_ASSOC);
	$short_film = $db->query("SELECT date_debut_affiche, date_fin_affiche, titre FROM films f INNER JOIN genres g ON f.id_genre = g.id_genre WHERE g.nom LIKE 'short film';")->fetchAll(PDO::FETCH_ASSOC);
	$film = $db->query("SELECT titre, resum, id_genre, id_distributeur, annee_production, date_debut_affiche FROM films;")->fetchAll(PDO::FETCH_ASSOC);

	?>
		<table border="1" id="table">
			<tr>
				<?php
					//($distributeur [0]["titre"]);
					foreach ($distributeur[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($distributeur as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td id="distributeur"><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>
			<?php }	?>		
		</table><br><br>

		<table border="1">
			<tr>
				<th>Genre detective</th>
				</tr>
			<tr>
				<?php
					foreach ($detective[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($detective as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre dramatic comedy</th>
				</tr>
			<tr>
				<?php
					foreach ($dramatic_comedy[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($dramatic_comedy as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>	
		</table><br><br>


		<table border="1">
			<tr>
				<th>Genre science fiction</th>
				</tr>
			<tr>
				<?php
					foreach ($science_fiction[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($science_fiction as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre drama</th>
				</tr>
			<tr>
				<?php
					foreach ($drama[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($drama as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre documentary</th>
				</tr>
			<tr>
				<?php
					foreach ($documentary[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($documentary as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre animation</th>
				</tr>
			<tr>
				<?php
					foreach ($animation[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($animation as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre comedy</th>
				</tr>
			<tr>
				<?php
					foreach ($comedy[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($comedy as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre fantasy</th>
				</tr>
			<tr>
				<?php
					foreach ($fantasy[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($fantasy as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre action</th>
				</tr>
			<tr>
				<?php
					foreach ($action[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($action as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre thriller</th>
				</tr>
			<tr>
				<?php
					foreach ($thriller[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($thriller as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre adventure</th>
				</tr>
			<tr>
				<?php
					foreach ($adventure[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($adventure as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre various</th>
				</tr>
			<tr>
				<?php
					foreach ($various[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($various as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre historical</th>
				</tr>
			<tr>
				<?php
					foreach ($historical[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($historical as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre western</th>
				</tr>
			<tr>
				<?php
					foreach ($western[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($western as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre romance</th>
				</tr>
			<tr>
				<?php
					foreach ($romance[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($romance as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre music</th>
				</tr>
			<tr>
				<?php
					foreach ($music[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($music as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre musical</th>
				</tr>
			<tr>
				<?php
					foreach ($musical[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($musical as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre horror</th>
				</tr>
			<tr>
				<?php
					foreach ($horror[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($horror as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre war</th>
				</tr>
			<tr>
				<?php
					foreach ($war[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($war as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre unknow</th>
				</tr>
			<tr>
				<?php
					foreach ($unknow[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($unknow as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre spying</th>
				</tr>
			<tr>
				<?php
					foreach ($spying[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($spying as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre historical epic</th>
				</tr>
			<tr>
				<?php
					foreach ($historical_epic[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($historical_epic as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre biography</th>
				</tr>
			<tr>
				<?php
					foreach ($biography[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($biography as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre experimental</th>
				</tr>
			<tr>
				<?php
					foreach ($experimental[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($experimental as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>
			
			
			<table border="1">
			<tr>
				<th>Genre short film</th>
				</tr>
			<tr>
				<?php
					foreach ($short_film[0] as $key => $value) { ?>
						<th><?php echo $key ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($short_film as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>

					
			<?php }	?>
			</table><br><br>


			<table border="1">
			<tr>
				<?php
					foreach ($film[0] as $key => $value) { ?>
						<th><?php echo $key . ", " ?></th>
						<?php
						
					}	
				?>
			</tr>	

			<?php
				foreach ($film as $key => $value) { ?>
					<tr>
			<?php
				foreach ($value as $key1 => $value1) { ?>
					<td><?php echo '<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=films&pos=' . $value1 . '">' . $value1 . '</a>'; ?></td>	
			<?php  } ?>	
				
					</tr>
			<?php }	?>		
		</table><br><br>
		<a href="http://localhost/phpmyadmin/sql.php?server=1&db=cinema&table=distributeurs&pos=">Revenir à la page de la liste distributeur</a>			