<?php
$id=$_GET['id'];
try{
    $con=new PDO("mysql::host=localehost;dbname=alumni_association","root","");
    $delete=$con->prepare("DELETE FROM documents WHERE id='$id'");
    $delete->execute();

    $db=mysqli_connect("localhost","root","","alumni_association");
    $query1="SELECT * FROM documents WHERE id='$id'";
    $out= mysqli_query($db,$query1);
    $res=mysqli_fetch_array($out);
    unlink($res['img']);

    header("location:manage_documents.php");
}
catch(PDOException $e){
    echo "Error". $e->getMessage();
}