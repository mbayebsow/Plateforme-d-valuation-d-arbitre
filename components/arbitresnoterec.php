<?php
    $query = "SELECT * FROM fiches WHERE section = '$currentusercourse' ORDER BY evaluer_le DESC LIMIT 3 OFFSET 0";
    $run_query = $conn->query($query);
    while($row = $run_query->fetch_assoc()) {

        $fiche_id = $row['id'];
        $arbitre = $row['a_id'];
        $arbitre_a1 = $row['a1_id'];
        $arbitre_a2 = $row['a2_id'];
        $arbitre_4 = $row['a4_id'];


        $query_arbitre = "SELECT * FROM arbitres WHERE id = '$arbitre'";
        $run_query_arbitre = $conn->query($query_arbitre);
        while ($row_arbitre = mysqli_fetch_array($run_query_arbitre)) {
            $arbitre_name = $row_arbitre['nom'];
            $arbitre_profile = $row_arbitre['image'];
        }

        $query_arbitre_a1 = "SELECT * FROM arbitres WHERE id = '$arbitre_a1'";
        $run_query_arbitre_a1 = $conn->query($query_arbitre_a1);
        while ($row_arbitre_a1 = mysqli_fetch_array($run_query_arbitre_a1)) {
            $arbitre_name_a1 = $row_arbitre_a1['nom'];
            $arbitre_profile_a1 = $row_arbitre_a1['image'];
        }

        $query_arbitre_a2 = "SELECT * FROM arbitres WHERE id = '$arbitre_a2'";
        $run_query_arbitre_a2 = $conn->query($query_arbitre_a2);
        while ($row_arbitre_a2 = mysqli_fetch_array($run_query_arbitre_a2)) {
            $arbitre_name_a2 = $row_arbitre_a2['nom'];
            $arbitre_profile_a2 = $row_arbitre_a2['image'];
        }

        $query_arbitre_4 = "SELECT * FROM arbitres WHERE id = '$arbitre_4'";
        $run_query_arbitre_4 = $conn->query($query_arbitre_4);
        while ($row_arbitre_4 = mysqli_fetch_array($run_query_arbitre_4)) {
            $arbitre_name_4 = $row_arbitre_4['nom'];
            $arbitre_profile_4 = $row_arbitre_4['image'];
        }

        $query_arbitre_notes = "SELECT * FROM notes_arbitres WHERE id = '$fiche_id'";
        $run_query_arbitre_notes = $conn->query($query_arbitre_notes);
        while ($row_arbitre_notes = mysqli_fetch_array($run_query_arbitre_notes)) {
            $nota_a = $row_arbitre_notes['a'];
            $nota_a1 = $row_arbitre_notes['a_1'];
            $nota_a2 = $row_arbitre_notes['a_2'];
            $nota_a4 = $row_arbitre_notes['a_4'];
        }
    ?>
    <div class="arbitre_note_rec">
        <div class="arbitre_note_rec_profile">
            <img src="<?php echo $uri?>/src/profilepics/<?php echo "$arbitre_profile";?>" class="arbitre_note_rec_profile img" />
        </div>
        <div class="arbitre_note_rec_info">
            <div class="arbitre_note_rec_name">
                <?php echo "$arbitre_name";?>
            </div>
            <?php if ($nota_a < 5){?>
                <div class="arbitre_note_rec_note" style="color:#FF0000">
                    <?php echo "$nota_a";?> • <div class="role_note_rec_note"> Arbitre Principale </div>
                </div>
                <?php
            }
            elseif ($nota_a == 5){?>
                <div class="arbitre_note_rec_note" style="color:#f39404">
                    <?php echo "$nota_a";?> • <div class="role_note_rec_note"> Arbitre Principale </div>
                </div>
                <?php
            }
            else{?>
                <div class="arbitre_note_rec_note" style="color:#039896">
                    <?php echo "$nota_a";?> • <div class="role_note_rec_note"> Arbitre Principale </div>
                </div>
                <?php
            }
            ?>
        </div>
        <a class="arbitre_note_rec_plus" 
            data-content="ajax" 
            href="javascript:;" 
            id="ancher" 
            data-href="<?php echo $uri?>/components/infomessage.php">
            <img src = "<?php echo $uri?>/src/img/plus_button.svg"/>
        </a>
    </div>

    <div class="arbitre_note_rec">
        <div class="arbitre_note_rec_profile">
            <img src="<?php echo $uri?>/src/profilepics/<?php echo "$arbitre_profile";?>" class="arbitre_note_rec_profile img" />
        </div>
        <div class="arbitre_note_rec_info">
            <div class="arbitre_note_rec_name">
                <?php echo "$arbitre_name_a1";?>
            </div>
            <?php if ($nota_a1 < 5){?>
                <div class="arbitre_note_rec_note" style="color:#FF0000">
                    <?php echo "$nota_a1";?> • <div class="role_note_rec_note"> Arbitre Assistant 1 </div>
                </div>
                <?php
            }
            elseif ($nota_a1 == 5){?>
                <div class="arbitre_note_rec_note" style="color:#f39404">
                    <?php echo "$nota_a1";?> • <div class="role_note_rec_note"> Arbitre Assistant 1 </div>
                </div>
                <?php
            }
            else{?>
                <div class="arbitre_note_rec_note" style="color:#039896">
                    <?php echo "$nota_a1";?> • <div class="role_note_rec_note"> Arbitre Assistant 1 </div>
                </div>
                <?php
            }
            ?>
        </div>
        <a class="arbitre_note_rec_plus" 
            data-content="ajax" 
            href="javascript:;" 
            id="ancher" 
            data-href="<?php echo $uri?>/components/infomessage.php">
            <img src = "<?php echo $uri?>/src/img/plus_button.svg"/>
        </a>
    </div>

    <div class="arbitre_note_rec">
        <div class="arbitre_note_rec_profile">
            <img src="<?php echo $uri?>/src/profilepics/<?php echo "$arbitre_profile";?>" class="arbitre_note_rec_profile img" />
        </div>
        <div class="arbitre_note_rec_info">
            <div class="arbitre_note_rec_name">
                <?php echo "$arbitre_name_a2";?>
            </div>
            <?php if ($nota_a2 < 5){?>
                <div class="arbitre_note_rec_note" style="color:#FF0000">
                    <?php echo "$nota_a2";?> • <div class="role_note_rec_note"> Arbitre Assistant 2</div>
                </div>
                <?php
            }
            elseif ($nota_a2 == 5){?>
                <div class="arbitre_note_rec_note" style="color:#f39404">
                    <?php echo "$nota_a2";?> • <div class="role_note_rec_note"> Arbitre Assistant 2</div>
                </div>
                <?php
            }
            else{?>
                <div class="arbitre_note_rec_note" style="color:#039896">
                    <?php echo "$nota_a2";?> • <div class="role_note_rec_note"> Arbitre Assistant 2</div>
                </div>
                <?php
            }
            ?>
        </div>
        <a class="arbitre_note_rec_plus" 
            data-content="ajax" 
            href="javascript:;" 
            id="ancher" 
            data-href="<?php echo $uri?>/components/infomessage.php">
            <img src = "<?php echo $uri?>/src/img/plus_button.svg"/>
        </a>
    </div>

    <div class="arbitre_note_rec">
        <div class="arbitre_note_rec_profile">
            <img src="<?php echo $uri?>/src/profilepics/<?php echo "$arbitre_profile";?>" class="arbitre_note_rec_profile img" />
        </div>
        <div class="arbitre_note_rec_info">
            <div class="arbitre_note_rec_name">
                <?php echo "$arbitre_name_4";?>
            </div>
            <?php if ($nota_a4 < 5){?>
                <div class="arbitre_note_rec_note" style="color:#FF0000">
                    <?php echo "$nota_a4";?> • <div class="role_note_rec_note"> Quatrieme Arbitre </div>
                </div>
                <?php
            }
            elseif ($nota_a4 == 5){?>
                <div class="arbitre_note_rec_note" style="color:#f39404">
                    <?php echo "$nota_a4";?> • <div class="role_note_rec_note"> Quatrieme Arbitre </div>
                </div>
                <?php
            }
            else{?>
                <div class="arbitre_note_rec_note" style="color:#039896">
                    <?php echo "$nota_a4";?> • <div class="role_note_rec_note"> Quatrieme Arbitre </div>
                </div>
                <?php
            }
            ?>
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
