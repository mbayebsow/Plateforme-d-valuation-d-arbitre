
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $competition = $_POST['competition'];
        $zone = $_POST['zone'];
        $joue_le = $_POST['joue_le'];
        $lieu = $_POST['lieu'];
        $heure = $_POST['heure'];
        ?>
        <div class='form_eval_confirm'>
            <h3 class="eval_post_title_header">Confirmation des champs entrer</h3>
            <div class='evalution-form_eval'>
                <div class="form_eval_section">
                    <div class="form_eval_control"><p class="form_eval_control_s">Compétion :</p><?php echo $competition ?></div>
                </div>
                <div class="form_eval_section">
                    <div class="form_eval_control"><p class="form_eval_control_s">Zone :</p><?php echo $zone ?></div>
                </div>
                <div class="form_eval_section">
                    <div class="form_eval_control"><p class="form_eval_control_s">Joue le :</p><?php echo $joue_le ?></div>
                </div>
                <div class="form_eval_section">
                    <div class="form_eval_control"><p class="form_eval_control_s">Lieu :</p><?php echo $lieu ?></div>
                </div>
                <div class="form_eval_section">
                    <div class="form_eval_control"><p class="form_eval_control_s">Heure :</p><?php echo $heure ?></div>
                </div>
            </div>
            <button 
                type="button" 
                id="iframe" 
                data-href="" 
                class="btn btn_eval"
                data-content="iframe">
                je confirme
            </button>
        </div>
        <script>
            $(document).ready(function (e) {
                $("#iframe").lightWeightPopup({
                    href: "../uploadnote?source=post&competition=<?php echo $competition ?>&zone=<?php echo $zone ?>&joue_le=<?php echo $joue_le ?>&lieu=<?php echo $lieu ?>&heure=<?php echo $heure ?>&id=<?php echo $_SESSION['id'] ?>&section=<?php echo $_SESSION['course'] ?>", 
                    top : '0',
                    width: '70%', 
                    height: '100%', 
                    title: "" 
                });
            });
        </script>
        <style>
            .form_eval{
                display: none !important;
            }
        </style>
        <?php
    }
?>
<form id="online_form" role="form" class='form_eval' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class='evalution-form_eval'>
        <div class="form_eval_section">
            <label class="eval_post_title">Compétion</label>
            <select class="form_eval_control" name="competition">
                <option value="Championat local">Championat local</option>
                <option value="Match amical">Match amical</option>
            </select>
        </div>
        <div class="form_row">
            <div class="form_eval_section r">
                <label class="eval_post_title">Zone</label>
                <select class="form_eval_control" name="zone">
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="form_eval_section r">
                <label class="eval_post_title">Joue le</label>
                <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form_eval_control" name="joue_le" > </input>
            </div>
        </div>
        <div class="form_row">
            <div class="form_eval_section r">
                <label class="eval_post_title">Lieu</label>
                <input type="adress" class="form_eval_control" name="lieu" > </input>
            </div>
            <div class="form_eval_section r">
                <label class="eval_post_title">Heure</label>
                <input type="time" value="" class="form_eval_control" name="heure" > </input>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn_eval" value="Upload Note">Commencez l'évalution</button>
</form>