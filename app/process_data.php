<?php 
        include ('includes/connection.php');
        $fiche_ref = rand();

        $evaluer_par = $_POST['evaluer_par'];
        $section = $_POST['section'];
        
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

        // - DONNES FICHE - //
        $a_id = $_POST['arbitre'];
        $a1_id = $_POST['arbitre_a1'];
        $a2_id = $_POST['arbitre_a2'];
        $a4_id = $_POST['arbitre_4'];

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

        // - INSERTION DONNES FICHE -- //
        $query_fiches = "INSERT INTO fiches(id, a_id, a1_id, a2_id, a4_id, evaluer_par, section, match_id, eval_arbitres_id, note_id, status) VALUES ('$fiche_ref','$a_id','$a1_id','$a2_id','$a4_id','$evaluer_par','$section','$fiche_ref','$fiche_ref','$fiche_ref','apprové')";
        $result_fiches = mysqli_query($conn , $query_fiches) or die(mysqli_error($conn));

        // - INSERTION DONNES MATCHS - //
        $query_matchs = "INSERT INTO matchs(id, competition, zone, joue_le, lieu, heure, equipe_a, equipe_b, score_mitemps_a, score_mitemps_b, score_final_a, score_final_b, difficulte) VALUES ('$fiche_ref','$competition','$zone','$joue_le','$lieu','$heure','$equipe_a','$equipe_b','$score_mitemps_a','$score_mitemps_b','$score_final_a','$score_final_b','$dif_match')";
        $result_matchs = mysqli_query($conn , $query_matchs) or die(mysqli_error($conn));

        // - INSERTION DONNES NOTES ARBIRES - //
        $query_matchs = "INSERT INTO eval_arbitres(id, a_positifs_1, a_negatifs_1,a_positifs_2, a_negatifs_2,a_positifs_3, a_negatifs_3, a1_positifs_1, a1_negatifs_1, a2_positifs_1, a2_negatifs_1, a4_positifs_1, a4_negatifs_1) VALUES ('$fiche_ref','$a_positifs_1','$a_negatifs_1','$a_positifs_2','$a_negatifs_2','$a_positifs_3','$a_negatifs_3','$a1_positifs_1','$a1_negatifs_1','$a2_positifs_1','$a2_negatifs_1','$a4_positifs_1','$a4_negatifs_1')";
        $result_matchs = mysqli_query($conn , $query_matchs) or die(mysqli_error($conn));

        // - INSERTION DONNES EVALUATION ARBIRES - //
        $query_matchs = "INSERT INTO notes_arbitres(id, a, a_1, a_2, a_4) VALUES ('$fiche_ref','$note_a','$note_a_1','$note_a_2','$note_a_4')";
        $result_matchs = mysqli_query($conn , $query_matchs) or die(mysqli_error($conn));

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

?>