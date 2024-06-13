<?php
include("app.php");
$am = $bd->prepare("SELECT * FROM `ara` ");
$am->execute();
foreach($am AS $result){
    echo "<table><tr>";
    echo "<td>".$result['a']."</td> ";
    echo "<td>".$result['b']."</td>";
}echo "<br>";
?>
