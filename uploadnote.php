        <?php
                session_start();
            if(isset($_GET['source'])){
                include 'includes/links.php';
                include ('includes/connection.php');
                $competition_h = $_GET['competition'];
                $zone_h = $_GET['zone'];
                $joue_le_h = $_GET['joue_le'];
                $lieu_h = $_GET['lieu'];
                $heure_h = $_GET['heure'];
                $evaluer_par = $_GET['id'];
                $section = $_GET['section'];
                $evaluer_par = $_GET['id'];
                $section = $_GET['section'];
            }else {
                include ('includes/connection.php');
                include 'includes/links.php';
                $evaluer_par = $_SESSION['id'];
                $section = $_SESSION['course'];
            }
            $equipes = "SELECT equipe_id, nom_equipe FROM equipes";
            $fetch_equipe_a = mysqli_query($conn, $equipes) or die(mysqli_error($conn));
            $fetch_equipe_b = mysqli_query($conn, $equipes) or die(mysqli_error($conn));

            $arbitres = "SELECT id, nom FROM arbitres";
            $fetch_arbitre = mysqli_query($conn, $arbitres) or die(mysqli_error($conn));
            $fetch_arbitre_a1 = mysqli_query($conn, $arbitres) or die(mysqli_error($conn));
            $fetch_arbitre_a2 = mysqli_query($conn, $arbitres) or die(mysqli_error($conn));
            $fetch_arbitre_4 = mysqli_query($conn, $arbitres) or die(mysqli_error($conn));

            if (isset($_POST['upload'])) {

                $fiche_ref = rand();

                // - DONNES MATCHS - //
                $competition = $_POST['competition'];
                $zone = $_POST['zone'];
                $joue_le = $_POST['joue_le'];
                $lieu = $_POST['lieu'];
                $heure = $_POST['heure'];
                $equipe_a = $_POST['equipe_a'];
                $equipe_b = $_POST['equipe_b'];
                $score_mitemps_a = $_POST['score_mitemps_a'];
                $score_mitemps_b = $_POST['score_mitemps_b'];
                $score_final_a = $_POST['score_final_a'];
                $score_final_b = $_POST['score_final_b'];
                $dif_match = $_POST['dif_match'];

                // - DONNES EVALUTION ARBITRE - //
                $a_positifs_1 = $_POST['a_positifs_1'];
                $a_negatifs_1 = $_POST['a_negatifs_1'];
                $a_positifs_2 = $_POST['a_positifs_2'];
                $a_negatifs_2 = $_POST['a_negatifs_2'];
                $a_positifs_3 = $_POST['a_positifs_3'];
                $a_negatifs_3 = $_POST['a_negatifs_3'];
                $a1_positifs_1 = $_POST['a1_positifs_1'];
                $a1_negatifs_1 = $_POST['a1_negatifs_1'];
                $a2_positifs_1 = $_POST['a2_positifs_1'];
                $a2_negatifs_1 = $_POST['a2_negatifs_1'];
                $a4_positifs_1 = $_POST['a4_positifs_1'];
                $a4_negatifs_1 = $_POST['a4_negatifs_1'];

                // - DONNES NOTES ARBITRE - //
                $note_a = $_POST['note_a'];
                $note_a_1 = $_POST['note_a_1'];
                $note_a_2 = $_POST['note_a_2'];
                $note_a_4 = $_POST['note_a_4'];

                // - DONNES FICHE - //
                $a_id = $_POST['arbitre'];
                $a1_id = $_POST['arbitre_a1'];
                $a2_id = $_POST['arbitre_a2'];
                $a4_id = $_POST['arbitre_4'];

                

                // - INSERTION DONNES MATCHS - //
                $query_matchs = "INSERT INTO matchs(id, competition, zone, joue_le, lieu, heure, equipe_a, equipe_b, score_mitemps_a, score_mitemps_b, score_final_a, score_final_b, difficulte, saison_id) VALUES ('$fiche_ref','$competition','$zone','$joue_le','$lieu','$heure','$equipe_a','$equipe_b','$score_mitemps_a','$score_mitemps_b','$score_final_a','$score_final_b','$dif_match','1')";
                $result_matchs = mysqli_query($conn , $query_matchs) or die(mysqli_error($conn));

                // - INSERTION DONNES NOTES ARBIRES - //
                $query_matchs = "INSERT INTO eval_arbitres(id, a_positifs_1, a_negatifs_1,a_positifs_2, a_negatifs_2,a_positifs_3, a_negatifs_3, a1_positifs_1, a1_negatifs_1, a2_positifs_1, a2_negatifs_1, a4_positifs_1, a4_negatifs_1) VALUES ('$fiche_ref','$a_positifs_1','$a_negatifs_1','$a_positifs_2','$a_negatifs_2','$a_positifs_3','$a_negatifs_3','$a1_positifs_1','$a1_negatifs_1','$a2_positifs_1','$a2_negatifs_1','$a4_positifs_1','$a4_negatifs_1')";
                $result_matchs = mysqli_query($conn , $query_matchs) or die(mysqli_error($conn));

                // - INSERTION DONNES EVALUATION ARBIRES - //
                $query_matchs = "INSERT INTO notes_arbitres(id, a, a_1, a_2, a_4) VALUES ('$fiche_ref','$note_a','$note_a_1','$note_a_2','$note_a_4')";
                $result_matchs = mysqli_query($conn , $query_matchs) or die(mysqli_error($conn));
                
                // - INSERTION DONNES FICHE -- //
                $query_fiches = "INSERT INTO fiches(id, a_id, a1_id, a2_id, a4_id, evaluer_par, section, match_id, eval_arbitres_id, note_id, status, saison_id) VALUES ('$fiche_ref','$a_id','$a1_id','$a2_id','$a4_id','$evaluer_par','$section','$fiche_ref','$fiche_ref','$fiche_ref','apprové','1')";
                $result_fiches = mysqli_query($conn , $query_fiches) or die(mysqli_error($conn));

                // - DONNES STATISTIQUES -- //
                $query_equipe_a = "SELECT * FROM statistiques WHERE equipe_id = '$equipe_a' ";
                $run_equipe_a = mysqli_query($conn, $query_equipe_a) or die(mysqli_error($conn));
                while ($row_equipe_a = mysqli_fetch_array($run_equipe_a)) {
                    $total_match_a_old = $row_equipe_a['total_match'];
                    $but_marque_a_old = $row_equipe_a['but_marque'];
                    $but_encaisse_a_old = $row_equipe_a['but_encaisse'];
                    $victoire_a_old = $row_equipe_a['victoire'];
                    $defaite_a_old = $row_equipe_a['defaite'];
                    $nul_a_old = $row_equipe_a['nul'];
                    $points_a_old = $row_equipe_a['points'];
                }
                $query_equipe_b = "SELECT * FROM statistiques WHERE equipe_id = '$equipe_b' ";
                $run_equipe_b = mysqli_query($conn, $query_equipe_b) or die(mysqli_error($conn));
                while ($row_equipe_b = mysqli_fetch_array($run_equipe_b)) {
                    $total_match_b_old = $row_equipe_b['total_match'];
                    $but_marque_b_old = $row_equipe_b['but_marque'];
                    $but_encaisse_b_old = $row_equipe_b['but_encaisse'];
                    $victoire_b_old = $row_equipe_b['victoire'];
                    $defaite_b_old = $row_equipe_b['defaite'];
                    $nul_b_old = $row_equipe_b['nul'];
                    $points_b_old = $row_equipe_b['points'];
                }
                // - //
                $total_match_a = $total_match_a_old + 1;
                $update_match_a = "UPDATE statistiques SET total_match = '$total_match_a' WHERE equipe_id = '$equipe_a' " ;
                $query_update_match_a = mysqli_query($conn , $update_match_a) or die(mysqli_error($conn));
                $total_match_b = $total_match_b_old + 1;
                $update_match_b = "UPDATE statistiques SET total_match = '$total_match_b' WHERE equipe_id = '$equipe_b' " ;
                $query_update_match_b = mysqli_query($conn , $update_match_b) or die(mysqli_error($conn));
                // -- + ---//
                $but_marque_a = $but_marque_a_old + $score_final_a;
                $but_encaisse_a = $but_encaisse_a_old + $score_final_b;
                $but_marque_b = $but_marque_b_old + $score_final_b;
                $but_encaisse_b = $but_encaisse_b_old + $score_final_a;
                if ($score_final_a > 0) {
                    $update_but_marque_a = "UPDATE statistiques SET but_marque = '$but_marque_a' WHERE equipe_id = '$equipe_a' " ;
                    $query_but_marque_a = mysqli_query($conn , $update_but_marque_a) or die(mysqli_error($conn));
                    $update_but_encaisse_b = "UPDATE statistiques SET but_encaisse = '$but_encaisse_a' WHERE equipe_id = '$equipe_a' " ;
                    $query_but_encaisse_b = mysqli_query($conn , $update_but_encaisse_b) or die(mysqli_error($conn));
                }
                if ($score_final_b > 0) {
                    $update_but_marque_b = "UPDATE statistiques SET but_marque = '$but_marque_b' WHERE equipe_id = '$equipe_b' " ;
                    $query_but_marque_b = mysqli_query($conn , $update_but_marque_b) or die(mysqli_error($conn));
                    $update_but_encaisse_a = "UPDATE statistiques SET but_encaisse = '$but_encaisse_b' WHERE equipe_id = '$equipe_b' " ;
                    $query_but_encaisse_a = mysqli_query($conn , $update_but_encaisse_a) or die(mysqli_error($conn));
                }
                // ---- + ----- //
                if ($score_final_a > $score_final_b) {
                    $victoire_a = $victoire_a_old + 1;
                    $defaite_b = $defaite_b_old + 1;
                    $points_a = $points_a_old + 3;
                    $update_victoire_a = "UPDATE statistiques SET victoire = '$victoire_a' WHERE equipe_id = '$equipe_a' " ;
                    $query_victoire_a = mysqli_query($conn , $update_victoire_a) or die(mysqli_error($conn));
                    $update_defaite_b = "UPDATE statistiques SET defaite = '$defaite_b' WHERE equipe_id = '$equipe_b' " ;
                    $query_defaite_b = mysqli_query($conn , $update_defaite_b) or die(mysqli_error($conn));
                    $update_points_a = "UPDATE statistiques SET points = '$points_a' WHERE equipe_id = '$equipe_a' " ;
                    $query_points_a = mysqli_query($conn , $update_points_a) or die(mysqli_error($conn));
                }
                if ($score_final_a < $score_final_b) {
                    $victoire_b = $victoire_b_old + 1;
                    $defaite_a = $defaite_a_old + 1;
                    $points_b = $points_b_old + 3;
                    $update_victoire_b = "UPDATE statistiques SET victoire = '$victoire_b' WHERE equipe_id = '$equipe_b' " ;
                    $query_victoire_b = mysqli_query($conn , $update_victoire_b) or die(mysqli_error($conn));
                    $update_defaite_a = "UPDATE statistiques SET defaite = '$defaite_a' WHERE equipe_id = '$equipe_a' " ;
                    $query_defaite_a = mysqli_query($conn , $update_defaite_a) or die(mysqli_error($conn));
                    $update_points_b = "UPDATE statistiques SET points = '$points_b' WHERE equipe_id = '$equipe_b' " ;
                    $query_points_b = mysqli_query($conn , $update_points_b) or die(mysqli_error($conn));
                }
                // ------ //
                if ($score_final_a == $score_final_b) {
                    $nul_a = $nul_a_old + 1;
                    $nul_b = $nul_b_old + 1;
                    $points_a = $points_a_old + 1;
                    $points_b = $points_b_old + 1;
                    $update_nul_a = "UPDATE statistiques SET nul = '$nul_a' WHERE equipe_id = '$equipe_a' " ;
                    $query_nul_a = mysqli_query($conn , $update_nul_a) or die(mysqli_error($conn));
                    $update_nul_b = "UPDATE statistiques SET nul = '$nul_b' WHERE equipe_id = '$equipe_b' " ;
                    $query_nul_b = mysqli_query($conn , $update_nul_b) or die(mysqli_error($conn));
                    $update_points_a = "UPDATE statistiques SET points = '$points_a' WHERE equipe_id = '$equipe_a' " ;
                    $query_points_a = mysqli_query($conn , $update_points_a) or die(mysqli_error($conn));
                    $update_points_b = "UPDATE statistiques SET points = '$points_b' WHERE equipe_id = '$equipe_b' " ;
                    $query_points_b = mysqli_query($conn , $update_points_b) or die(mysqli_error($conn));
                }

                // - MISE A JOUR NOTE TOTLA ARBITRE -- //
                $query_a_id = "SELECT * FROM arbitres WHERE id = '$a_id' ";
                $run_query_a_id = mysqli_query($conn, $query_a_id) or die(mysqli_error($conn));
                while ($row_query_a_id = mysqli_fetch_array($run_query_a_id)) {
                    $note_act = $row_query_a_id['note_total'];
                }
                $note_total_a = $note_a + $note_act;
                $query_note_total_a = "UPDATE arbitres SET note_total = '$note_total_a' WHERE id = '$a_id' " ;
                $result_note_total_a = mysqli_query($conn , $query_note_total_a) or die(mysqli_error($conn));
                

                $query_a1_id = "SELECT * FROM arbitres WHERE id = '$a1_id' ";
                $run_query_a1_id = mysqli_query($conn, $query_a1_id) or die(mysqli_error($conn));
                while ($row_query_a1_id = mysqli_fetch_array($run_query_a1_id)) {
                    $note_act = $row_query_a1_id['note_total'];
                }
                $note_total_a1 = $note_a_1 + $note_act;
                $query_note_total_a1 = "UPDATE arbitres SET note_total = '$note_total_a1' WHERE id = '$a1_id' " ;
                $result_note_total_a1 = mysqli_query($conn , $query_note_total_a1) or die(mysqli_error($conn));
                

                $query_a2_id = "SELECT * FROM arbitres WHERE id = '$a2_id' ";
                $run_query_a2_id = mysqli_query($conn, $query_a2_id) or die(mysqli_error($conn));
                while ($row_query_a2_id = mysqli_fetch_array($run_query_a2_id)) {
                    $note_act = $row_query_a2_id['note_total'];
                }
                $note_total_a2 = $note_a_2 + $note_act;
                $query_note_total_a2 = "UPDATE arbitres SET note_total = '$note_total_a2' WHERE id = '$a2_id' " ;
                $result_note_total_a2 = mysqli_query($conn , $query_note_total_a2) or die(mysqli_error($conn));


                $query_a4_id = "SELECT * FROM arbitres WHERE id = '$a4_id' ";
                $run_query_a4_id = mysqli_query($conn, $query_a4_id) or die(mysqli_error($conn));
                while ($row_query_a4_id = mysqli_fetch_array($run_query_a4_id)) {
                    $note_act = $row_query_a4_id['note_total'];
                }
                $note_total_a4 = $note_a_4 + $note_act;
                $query_note_total_a4 = "UPDATE arbitres SET note_total = '$note_total_a4' WHERE id = '$a4_id' " ;
                $result_note_total_a4 = mysqli_query($conn , $query_note_total_a4) or die(mysqli_error($conn));

                if (mysqli_affected_rows($conn) > 0) {?>
                    <style>
                        .message_form_note{display:block!important;}
                        .form-note{display:none!important;}
                        .b_form{display:none!important;}
                    </style>
                    <?php
                }
                else {
                    "<script> alert('Erreur lors du téléchargement.. réessayez');</script>";
                }
            }
        ?>
        <div id="message_form_note" class="message_form_note" style="display:none;">
            <p class="message_form_note_dta">Les données d'evalution on été envoyer avec succés !</p>
            <a href="./" class="btn btn-primary b_form" data-bjax="">Accueil</a>
        </div>
        <form id="form_note" role="form" class='form-note' action="" method="POST" enctype="multipart/form-data">
            <div class='section-form-group' >
                <div class="form-group" <?php if (!empty($competition_h)){?> style="display: none" <?php }?>>
                    <label for="post_title">Compétion</label>
                    <select id="competition" class="form-control" name="competition" >
                        <?php if (!empty($competition_h)){?> 
                            <option value="<?php echo $competition_h ?>"><?php echo $competition_h ?></option> 
                        <?php }else{?>
                        <option value="Championat local">Championat local</option>
                        <option value="Match amical">Match amical</option>
                        <?php } ?>
                    </select>
                    <span id="competition_error" class="text-danger"></span>
                </div>
                <div class="form-group" <?php if (!empty($zone_h)){?> style="display: none" <?php }?>>
                    <label for="post_tags">Zone</label>
                    <select id="zone" class="form-control" name="zone">
                        <?php if (!empty($zone_h)){?> 
                            <option value="<?php echo $zone_h ?>"><?php echo $zone_h ?></option> 
                        <?php }else{?>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <?php } ?>
                    </select>
                    <span id="zone_error" class="text-danger"></span>
                </div>
                <div class="form-group" <?php if (!empty($joue_le_h)){?> style="display: none" <?php }?>>
                    <label for="post_tags">Joue le</label>
                    <input id="joue_le" type="date" <?php if (!empty($joue_le_h)){?> value="<?php echo $joue_le_h; ?>" <?php }else{?> value="<?php echo date("Y-m-d"); ?>" <?php } ?> class="form-control" name="joue_le" <?php if (!empty($joue_le_h)){?> readonly <?php } ?> ></input>
                    <span id="joue_le_error" class="text-danger"></span>
                </div>
                <div class="form-group" <?php if (!empty($lieu_h)){?> style="display: none" <?php }?>>
                    <label for="post_tags">Lieu</label>
                    <input id="lieu" type="adress" <?php if (!empty($lieu_h)){?> value="<?php echo $lieu_h; ?>" <?php } ?> class="form-control" name="lieu" <?php if (!empty($lieu_h)){?> readonly <?php } ?> ></input>
                    <span id="lieu_error" class="text-danger"></span>
                </div>
                <div class="form-group" <?php if (!empty($heure_h)){?> style="display: none" <?php }?>>
                    <label for="post_tags">Heure</label>
                    <input id="heure" type="time" <?php if (!empty($heure_h)){?> value="<?php echo $heure_h; ?>" <?php } ?> class="form-control" name="heure" <?php if (!empty($heure_h)){?> readonly <?php } ?> ></input>
                    <span id="heure_error" class="text-danger"></span>
                </div>
            </div>
            
            <div class='section-form-group'>
                <div class="form-group equipe">
                    <label for="post_title">Equipe A</label>
                    <select id="equipe_a" class="form-control" name="equipe_a">
                        <?php while ($equipe_a = mysqli_fetch_array($fetch_equipe_a)) { ?>
                                <option value="<?php echo $equipe_a['equipe_id']; ?> "> <?php echo $equipe_a['nom_equipe']; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <span id="equipe_a_error" class="text-danger"></span>
                </div>
                <div class="form-group equipe">
                    <label for="post_tags">Equipe B</label>
                    <select id="equipe_b" class="form-control" name="equipe_b">
                        <?php while ($equipe_a = mysqli_fetch_array($fetch_equipe_b)) { ?>
                            <option value="<?php echo $equipe_a['equipe_id']; ?> "> <?php echo $equipe_a['nom_equipe']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <span id="equipe_b_error" class="text-danger"></span>
                </div>
                <div class="form-group scores">
                    <div class="score-form-section">
                        <input id="score_mitemps_a" type="number" value="" class="form-control scores" name="score_mitemps_a" > </input>
                        <span id="score_mitemps_a_error" class="text-danger"></span>

                        <label class="post_title scores">Scr Mi-temps</label>

                        <input id="score_mitemps_b" type="number" value="" class="form-control scores" name="score_mitemps_b" > </input>
                        <span id="score_mitemps_b_error" class="text-danger"></span>
                    </div>
                    <div class="score-form-section">
                        <input id="score_final_a" type="number" value="" class="form-control scores" name="score_final_a" > </input>
                        <span id="score_final_a_error" class="text-danger"></span>

                        <label class="post_title scores">Scr Final</label>

                        <input id="score_final_b" type="number" value="" class="form-control scores" name="score_final_b" > </input>
                        <span id="score_final_b_error" class="text-danger"></span>
                    </div>
                    <div class="score-form-section">
                        <select id="dif_match" class="form-control dif_match" name="dif_match">
                            <option value="">-- Difficulté du match --</option>
                            <option value="Bas">BAS</option>
                            <option value="Moyen">MOYEN</option>
                            <option value="Élevé">ELEVE</option>
                        </select>
                        <span id="dif_match_error" class="text-danger"></span>
                    </div>
                </div>
            </div>

            <div class='section-form-group'>
                <div class="form-group">
                    <label for="post_title">Arbitre</label>
                    <select id="arbitre" class="form-control" name="arbitre">
                        <?php while ($arbitre = mysqli_fetch_array($fetch_arbitre)) { ?>
                                <option value="<?php echo $arbitre['id']; ?> "> <?php echo $arbitre['nom']; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <span id="arbitre_error" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="post_tags">Arbitre A1</label>
                    <select id="arbitre_a1" class="form-control" name="arbitre_a1">
                        <?php while ($arbitre_a1 = mysqli_fetch_array($fetch_arbitre_a1)) { ?>
                                <option value="<?php echo $arbitre_a1['id']; ?> "> <?php echo $arbitre_a1['nom']; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <span id="arbitre_a1_error" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="post_tags">Arbitre A2</label>
                    <select id="arbitre_a2" class="form-control" name="arbitre_a2">
                        <?php while ($arbitre_a2 = mysqli_fetch_array($fetch_arbitre_a2)) { ?>
                                <option value="<?php echo $arbitre_a2['id']; ?> "> <?php echo $arbitre_a2['nom']; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <span id="arbitre_a2_error" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="post_tags">4éme Arbitre</label>
                    <select id="arbitre_4" class="form-control" name="arbitre_4">
                        <?php while ($arbitre_4 = mysqli_fetch_array($fetch_arbitre_4)) { ?>
                                <option value="<?php echo $arbitre_4['id']; ?> "> <?php echo $arbitre_4['nom']; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <span id="arbitre_4_error" class="text-danger"></span>
                </div>
            </div>
            <div class='section-form-group eval_arbitre'>
                <div class='eval_arbitre colone'>
                    <div class='evalution_arbitre'>
                        <h3 class="title_section-form-group">EVALUATION DE L'ARBITRE</h3>
                        <p class="desc_section-form-group">1 - CONTROLE DU MATCH interpretation, application correcte et judicieuse des lois du jeu. Sanctions diciplinaires appropriées, approche tactique intelligente et gestion sage du jeu et des acteurs.</p>
                        <div class="form-group eval_arbitre">
                            <textarea id="a_positifs_1" placeholder="Aspects positifs" name="a_positifs_1" class="form-control eval_arbitre"></textarea>
                            <span id="a_positifs_1_error" class="text-danger"></span>
                        </div>
                        <div class="form-group eval_arbitre">
                            <textarea id="a_negatifs_1" placeholder="Aspects négatifs" name="a_negatifs_1" class="form-control eval_arbitre"></textarea>
                            <span id="a_negatifs_1_error" class="text-danger"></span>
                        </div>
                        
                        <p class="desc_section-form-group">2 - CONDITION PHYSIQUE ET PLACEMENT DE L'ARBITRE La résistance, l'endurance, la vitesse, anticipation, placement, déplacement et replacement de l'arbitre.</p>
                        <div class="form-group eval_arbitre">
                            <textarea id="a_positifs_2" placeholder="Aspects positifs" name="a_positifs_2" class="form-control eval_arbitre"></textarea>
                            <span id="a_positifs_2_error" class="text-danger"></span>
                        </div>
                        <div class="form-group eval_arbitre">
                            <textarea id="a_negatifs_2" placeholder="Aspects négatifs" name="a_negatifs_2" class="form-control eval_arbitre"></textarea>
                            <span id="a_negatifs_2_error" class="text-danger"></span>
                        </div>
                        
                        <p class="desc_section-form-group">3 - TRAVAIL D'EQUIPE Coopération arbitres assitants et quatrieme arbitre.</p>
                        <div class="form-group eval_arbitre">
                            <textarea id="a_positifs_3" placeholder="Aspects positifs" name="a_positifs_3" class="form-control eval_arbitre"></textarea>
                            <span id="a_positifs_3_error" class="text-danger"></span>
                        </div>
                        <div class="form-group eval_arbitre">
                            <textarea id="a_negatifs_3" placeholder="Aspects négatifs" name="a_negatifs_3" class="form-control eval_arbitre"></textarea>
                            <span id="a_negatifs_3_error" class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <div class='eval_arbitre colone'>
                    <div class='evalution_arbitre A1'>
                        <h3 class="title_section-form-group">EVALUATION DE L'ARBITRE ASSISTANT 1</h3>
                        <p class="desc_section-form-group">Exactitude des signaux : hors-jeu, fautes rentrée de touche, coups de pieds de but. Technique du drapeau. Placement déplacement et replacement.</p>
                        <div class="form-group eval_arbitre">
                            <textarea id="a1_positifs_1" placeholder="Aspects positifs" name="a1_positifs_1" class="form-control eval_arbitre"></textarea>
                            <span id="a1_positifs_1_error" class="text-danger"></span>
                        </div>
                        <div class="form-group eval_arbitre">
                            <textarea id="a1_negatifs_1" placeholder="Aspects négatifs" name="a1_negatifs_1" class="form-control eval_arbitre"></textarea>
                            <span id="a1_negatifs_1_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class='evalution_arbitre A2'>
                        <h3 class="title_section-form-group">EVALUATION DE L'ARBITRE ASSISTANT 2</h3>
                        <p class="desc_section-form-group">Exactitude des signaux : hors-jeu, fautes rentrée de touche, coups de pieds de but. Technique du drapeau. Placement déplacement et replacement.</p>
                        <div class="form-group eval_arbitre">
                            <textarea id="a2_positifs_1" placeholder="Aspects positifs" name="a2_positifs_1" class="form-control eval_arbitre"></textarea>
                            <span id="a2_positifs_1_error" class="text-danger"></span>
                        </div>
                        <div class="form-group eval_arbitre">
                            <textarea id="a2_negatifs_1" placeholder="Aspects négatifs" name="a2_negatifs_1" class="form-control eval_arbitre"></textarea>
                            <span id="a2_negatifs_1_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class='evalution_arbitre A4'>
                        <h3 class="title_section-form-group">EVALUATION DU QUATRIEME ARBITRE</h3>
                        <p class="desc_section-form-group">Cooperation avec l'arbitre et assistants.</p>
                        <div class="form-group eval_arbitre">
                            <textarea id="a4_positifs_1" placeholder="Aspects positifs" name="a4_positifs_1" class="form-control eval_arbitre"></textarea>
                            <span id="a4_positifs_1_error" class="text-danger"></span>
                        </div>
                        <div class="form-group eval_arbitre">
                            <textarea id="a4_negatifs_1" placeholder="Aspects négatifs" name="a4_negatifs_1" class="form-control eval_arbitre"></textarea>
                            <span id="a4_negatifs_1_error" class="text-danger"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='section-form-group note_arbitre'>
                <h3 class="title_section-form-group ote_arbitre">NOTE /10 DES ARBITRE</h3>
                <div class="note_arbitre">
                    <div class="form-group note_arbitre">
                        <label for="post_tags">Arbitre</label>
                        <input id="note_a" type="number" class="form-control" name="note_a" > </input>
                        <span id="note_a_error" class="text-danger"></span>
                    </div>
                    <div class="form-group note_arbitre">
                        <label for="post_tags">Arbitre A1</label>
                        <input id="note_a_1" type="number" class="form-control" name="note_a_1" > </input>
                        <span id="note_a_1_error" class="text-danger"></span>
                    </div>
                    <div class="form-group note_arbitre">
                        <label for="post_tags">Arbitre A2</label>
                        <input id="note_a_2" type="number" class="form-control" name="note_a_2" > </input>
                        <span id="note_a_2_error" class="text-danger"></span>
                    </div>
                    <div class="form-group note_arbitre">
                        <label for="post_tags">4éme Arbitre</label>
                        <input id="note_a_4" type="number" class="form-control" name="note_a_4" > </input>
                        <span id="note_a_2_error" class="text-danger"></span>
                    </div>
                </div>
            </div>
            <button id="upload" type="submit" name="upload" class="btn btn-primary" value="Upload Note">Ajouter</button>
        </form>
    </body>
</html>



