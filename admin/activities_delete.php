<?php
$id=$_GET['id'];
try{
    $con=new PDO("mysql::host=localehost;dbname=alumni_association","root","");
    $delete=$con->prepare("DELETE FROM activities WHERE id='$id'");
    $delete->execute();
    header("location:manage_activities.php");
}
catch(PDOException $e){
    echo "Error". $e->getMessage();
}