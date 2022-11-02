
<?php
	if(isset($_POST['search'])) {
		include ('includes/connection.php');
		$search_val = $_POST['search_term'];

		$query_arbitre = "SELECT * FROM arbitres WHERE nom LIKE '%".$search_val."%'";
		$result_arbitre = $conn->query($query_arbitre);

		$query_equipe = "SELECT * FROM equipes WHERE nom_equipe LIKE '%".$search_val."%'";
		$result_equipe = $conn->query($query_equipe);
		?> <div class="results arbitres"> <?php
		while($row = mysqli_fetch_array($result_arbitre)){
			echo "
				<a class='results_colums arbitres' href='http://talkerscode.com/webtricks/'>
					<div class='results_data'>
						<div class='results_profile'>
							<img class='results_profile' src='../src/profilepics/".$row['image']."'/>
						</div>
						<div class='results_info'>
							<div class='results_name'>
								".$row['nom']."
							</div>
							<div class='results_note'>
								".$row['note_total']."
							</div>
						</div>
					</div>
				</a>
			";
		}
		?> </div> 
		<div class="results equipes"><?php
		while($row = mysqli_fetch_array($result_equipe)){
			echo "
				<a class='results_colums equipes' href='http://talkerscode.com/webtricks/'>
					<div class='results_data'>
						<div class='results_profile'>
							<img class='results_profile' src='../src/logo_equipes/".$row['logo_equipe']."'/>
						</div>
						<div class='results_info'>
							<div class='results_name'>
								".$row['nom_equipe']."
							</div>
							<div class='results_note'>
							
							</div>
						</div>
					</div>
				</a>
			";
		}
		?> </div>
		<?php
	}
?>
