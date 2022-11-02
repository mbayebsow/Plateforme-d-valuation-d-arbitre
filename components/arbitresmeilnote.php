<?php 
$query_meil_arbitre = "SELECT * FROM arbitres ORDER BY note_total DESC LIMIT 5 OFFSET 0";
$run_query_meil_arbitre = $conn->query($query_meil_arbitre);

while($row_meil_arbitre = $run_query_meil_arbitre->fetch_assoc()) {
    $profile_meil_arbitre = $row_meil_arbitre['image'];
    $nom_meil_arbitre = $row_meil_arbitre['nom'];
    $note_meil_arbitre = $row_meil_arbitre['note_total'];
    ?>
    <div class="arbitre_note_rec">
        <div class="arbitre_note_rec_profile">
            <img src="<?php echo $uri?>/src/profilepics/<?php echo "$profile_meil_arbitre";?>" class="arbitre_note_rec_profile img" />
        </div>
        <div class="arbitre_note_rec_info">
            <div class="arbitre_note_rec_name">
                <?php echo "$nom_meil_arbitre";?>
            </div>
            <div class="arbitre_note_rec_note" style="color:#039896">
                <?php echo "$note_meil_arbitre";?>
            </div>
        </div>
        <a class="arbitre_note_rec_plus" 
            data-content="ajax" 
            href="javascript:;" 
            id="ancher" 
            data-href="<?php echo $uri?>/components/infomessage.php">
            <img src = "<?php echo $uri?>/src/img/plus_button.svg"/>
        </a>
    </div>
    <?php
}?>