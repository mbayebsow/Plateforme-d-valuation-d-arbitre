<?php 

$query = "SELECT * FROM fiches WHERE evaluer_par = '$evaluer_par' ORDER BY evaluer_le DESC LIMIT 1 OFFSET 0 " ; 
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
while ($row_arbitre = mysqli_fetch_array($result)) {
    $fiche_id = $row_arbitre['id'];
    $a_id = $row_arbitre['a_id'];
    $a1_id = $row_arbitre['a1_id'];
    $a2_id = $row_arbitre['a2_id'];
    $a4_id = $row_arbitre['a4_id'];

    $query_arbitre = "SELECT * FROM arbitres WHERE id = '$a_id'";
    $run_query_arbitre = $conn->query($query_arbitre);
    while ($row_arbitre = mysqli_fetch_array($run_query_arbitre)) {
        $a_profile = $row_arbitre['image'];
    }
    $query_arbitre = "SELECT * FROM arbitres WHERE id = '$a1_id'";
    $run_query_arbitre = $conn->query($query_arbitre);
    while ($row_arbitre = mysqli_fetch_array($run_query_arbitre)) {
        $a1_profile = $row_arbitre['image'];
    }
    $query_arbitre = "SELECT * FROM arbitres WHERE id = '$a2_id'";
    $run_query_arbitre = $conn->query($query_arbitre);
    while ($row_arbitre = mysqli_fetch_array($run_query_arbitre)) {
        $a2_profile = $row_arbitre['image'];
    }
    $query_arbitre = "SELECT * FROM arbitres WHERE id = '$a4_id'";
    $run_query_arbitre = $conn->query($query_arbitre);
    while ($row_arbitre = mysqli_fetch_array($run_query_arbitre)) {
        $a4_profile = $row_arbitre['image'];
    }

    $query_note_arbitre = "SELECT * FROM notes_arbitres WHERE id = '$fiche_id'";
    $run_query_note_arbitre = $conn->query($query_note_arbitre);
    while ($row_note_arbitre = mysqli_fetch_array($run_query_note_arbitre)) {
        $note_a = $row_note_arbitre['a'];
        $note_a1 = $row_note_arbitre['a_1'];
        $note_a2 = $row_note_arbitre['a_2'];
        $note_a4 = $row_note_arbitre['a_4'];
    }
}
?>
<div class="userstat_section_row">
    <div class="userstat_section_total_eval_title">Derniers arbitres evaluer.</div>
    <div class="row">    

        <div class="userstat_section_last_arb left ap" style="background-image:url(<?php echo $uri?>/src/profilepics/<?php echo "$a_profile";?>);">
        <?php if ($note_a < 5){?>
                <p class="userstat_section_last_arb_value" style="background:#ff0044"><?php echo "$note_a";?></p>
                <style>
                    .userstat_section_last_arb.ap {
                        border: 2px solid #ff0044;
                    }
                </style>
                <?php
            }
            elseif ($note_a == 5){?>
                <p class="userstat_section_last_arb_value" style="background:#eda805"><?php echo "$note_a";?></p>
                <style>
                    .userstat_section_last_arb.ap {
                        border: 2px solid #eda805;
                    }
                </style>
                <?php
            }
            else{?>
                <p class="userstat_section_last_arb_value" style="background:#069f7d"><?php echo "$note_a";?></p>
                <style>
                    .userstat_section_last_arb.ap {
                        border: 2px solid #069f7d;
                    }
                </style>
                <?php
            }
        ?>           
        </div>

        <div class="userstat_section_last_arb a1" style="background-image:url(<?php echo $uri?>/src/profilepics/<?php echo "$a1_profile";?>);">
        <?php if ($note_a1 < 5){?>
                <p class="userstat_section_last_arb_value" style="background:#ff0044"><?php echo "$note_a1";?>
                <style>
                    .userstat_section_last_arb.a1 {
                        border: 2px solid #ff0044;
                    }
                </style>
                </p>
                <?php
            }
            elseif ($note_a1 == 5){?>
                <p class="userstat_section_last_arb_value" style="background:#eda805"><?php echo "$note_a1";?>
                <style>
                    .userstat_section_last_arb.a1 {
                        border: 2px solid #eda805;
                    }
                </style></p>
                <?php
            }
            else{?>
                <p class="userstat_section_last_arb_value" style="background:#069f7d"><?php echo "$note_a1";?>
                <style>
                    .userstat_section_last_arb.a1 {
                        border: 2px solid #069f7d;
                    }
                </style></p>
                <?php
            }
        ?> 
        </div>

    </div>
    <div class="row">    

        <div class="userstat_section_last_arb left a2" style="background-image:url(<?php echo $uri?>/src/profilepics/<?php echo "$a2_profile";?>);">
        <?php if ($note_a2 < 5){?>
                <p class="userstat_section_last_arb_value" style="background:#ff0044"><?php echo "$note_a2";?>
                <style>
                    .userstat_section_last_arb.a2 {
                        border: 2px solid #ff0044;
                    }
                </style>
                </p>
                <?php
            }
            elseif ($note_a2 == 5){?>
                <p class="userstat_section_last_arb_value" style="background:#eda805"><?php echo "$note_a2";?>
                <style>
                    .userstat_section_last_arb.a2 {
                        border: 2px solid #eda805;
                    }
                </style>
                </p>
                <?php
            }
            else{?>
                <p class="userstat_section_last_arb_value" style="background:#069f7d"><?php echo "$note_a2";?>
                <style>
                    .userstat_section_last_arb.a2 {
                        border: 2px solid #069f7d;
                    }
                </style>
                </p>
                <?php
            }
        ?> 
        </div>

        <div class="userstat_section_last_arb a4" style="background-image:url(<?php echo $uri?>/src/profilepics/<?php echo "$a4_profile";?>);">
        <?php if ($note_a4 < 5){?>
                <p class="userstat_section_last_arb_value" style="background:#ff0044"><?php echo "$note_a4";?>
                <style>
                    .userstat_section_last_arb.a4 {
                        border: 2px solid #ff0044;
                    }
                </style>
                </p>
                <?php
            }
            elseif ($note_a4 == 5){?>
                <p class="userstat_section_last_arb_value" style="background:#eda805"><?php echo "$note_a4";?>
                <style>
                    .userstat_section_last_arb.a4 {
                        border: 2px solid #eda805;
                    }
                </style>
                </p>
                <?php
            }
            else{?>
                <p class="userstat_section_last_arb_value" style="background:#069f7d"><?php echo "$note_a4";?>
                <style>
                    .userstat_section_last_arb.a4 {
                        border: 2px solid #069f7d;
                    }
                </style>
                </p>
                <?php
            }
        ?> 
        </div>

    </div>
</div>