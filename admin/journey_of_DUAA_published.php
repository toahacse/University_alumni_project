<?php
//session_start();
try{
    $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
    $id=$_GET['id'];
    $classroom=0;
    $insert=$con->prepare("UPDATE journey_of_DUAA SET publication_status= :classroom WHERE id='$id'");
    $insert->bindparam(':classroom',$classroom);
    $insert->execute();
    header("location:manage_journey_of_duaa.php");
}
catch(PDOException $e)
{echo "error" . $e->getMessage();
}
?>