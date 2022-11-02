<?php 
$evaluer_par = $_SESSION['id'];

$query = "SELECT count(1) FROM fiches WHERE evaluer_par = '$evaluer_par' " ; 
$result= mysqli_query($conn , $query) or die (mysqli_error($conn));
$row = mysqli_fetch_array($result);
$total = $row[0];
?>
<div class="userstat_section_row">
    <div class="userstat_section_total_eval_title">Total évaluations effectuez</div>
    <div class="userstat_section_total_eval_data"><?php echo "$total" ?></div>
</div>
