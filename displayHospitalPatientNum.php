<?php
@include 'config.php';

$select_count= mysqli_query($conn, "SELECT COUNT(*) FROM patient_details");
$number_row = mysqli_fetch_array($select_count);
$total_count= $number_row[0];

echo $total_count;


?>