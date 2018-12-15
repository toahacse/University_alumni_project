<?php
$id=$_GET['id'];
try{
    $con=new PDO("mysql::host=localehost;dbname=alumni_association","root","");
    $delete=$con->prepare("DELETE FROM journey_of_DUAA WHERE id='$id'");
    $delete->execute();
    header("location:manage_journey_of_duaa.php");
}
catch(PDOException $e){
    echo "Error". $e->getMessage();
}