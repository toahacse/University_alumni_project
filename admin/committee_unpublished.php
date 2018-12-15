<?php
//session_start();
try{
    $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
    $id=$_GET['id'];
    $classroom=1;
    $insert=$con->prepare("UPDATE committee SET publication_status= :classroom WHERE id='$id'");
    $insert->bindparam(':classroom',$classroom);
    $insert->execute();
    header("location:manage_committie.php");
}
catch(PDOException $e)
{echo "error" . $e->getMessage();
}
?>