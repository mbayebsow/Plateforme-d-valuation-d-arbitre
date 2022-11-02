<?php 
$query_dernier_match = "SELECT * FROM matchs ORDER BY joue_le DESC LIMIT 3 OFFSET 0";
$run_query_dernier_match = $conn->query($query_dernier_match);

while($row_dernier_match = $run_query_dernier_match->fetch_assoc()) {

    $competition = $row_dernier_match['competition'];
    $zone = $row_dernier_match['zone'];
    $joue_le = $row_dernier_match['joue_le'];
    $lieu = $row_dernier_match['lieu'];
    $heure = $row_dernier_match['heure'];
    $equipe_a_id = $row_dernier_match['equipe_a'];
    $equipe_b_id = $row_dernier_match['equipe_b'];
    $score_final_a = $row_dernier_match['score_final_a'];
    $score_final_b = $row_dernier_match['score_final_b'];
    $difficulte = $row_dernier_match['difficulte'];

    $query_equipes_a = "SELECT * FROM equipes WHERE equipe_id = '$equipe_a_id' ";
    $run_equipes_a = $conn->query($query_equipes_a);
    while($row_equipes_a = $run_equipes_a->fetch_assoc()) {
        $equipe_a_logo = $row_equipes_a['logo_equipe'];
        $equipe_a_name = $row_equipes_a['nom_equipe'];
    }
    $query_equipes_b = "SELECT * FROM equipes WHERE equipe_id = '$equipe_b_id' ";
    $run_equipes_b = $conn->query($query_equipes_b);
    while($row_equipes_b = $run_equipes_b->fetch_assoc()) {
        $equipe_b_logo = $row_equipes_b['logo_equipe'];
        $equipe_b_name = $row_equipes_b['nom_equipe'];
    }

    ?>
    <div class="dernier_match">
            <img class="button_details" src ="<?php echo $uri?>/src/img/plus_button.svg"/>
        <div class="dernier_match_compet">
            <p class="date_heure"><?php echo "$joue_le";?> à <?php echo "$heure";?></p>
            <p class="match_type"><?php echo "$competition";?></p>
        </div>
        <div class="dernier_match_equipes">
            <div class="dernier_match-equipe a">
                <div class="equipe_data">
                    <img class="equipe_logo" src="<?php echo $uri?>/src/logo_equipes/<?php echo $equipe_a_logo;?>" />
                    <p class="equipe_name"><?php echo "$equipe_a_name";?></p>
                </div>
                <p class="equipe_score"> <?php echo "$score_final_a";?></p>
            </div>
            <div class="dernier_match-level">
                <?php echo "$difficulte";?>
                <?php if ($difficulte == "Bas"){?>
                    <div class="match_level" style="background:#039896;"><div class="loaderBar"></div></div>
                <?php } elseif ($difficulte == "Moyen"){?>
                    <div class="match_level" style="background:#ffbc57;"><div class="loaderBar"></div></div>
                <?php }else {?>
                    <div class="match_level" style="background:red;"><div class="loaderBar"></div></div>
                <?php }
                ?>
            </div>
            <div class="dernier_match-equipe">
                <p class="equipe_score"> <?php echo "$score_final_b";?></p>
                <div class="equipe_data">
                    <img class="equipe_logo" src="<?php echo $uri?>/src/logo_equipes/<?php echo $equipe_b_logo;?>" />
                    <p class="equipe_name"><?php echo "$equipe_b_name";?></p>
                </div>
            </div>
        </div>
        <div class="dernier_match_info">
            <p class="match_info match_lieu"> Lieu : <?php echo "$lieu";?> </p>
            <p class="match_info match_zone"> zone : <?php echo "$zone";?> </p>
        </div>
    </div>
    <?php
}?>