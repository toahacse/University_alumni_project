<?php
$id=$_GET['id'];
try{
    $con=new PDO("mysql::host=localehost;dbname=alumni_association","root","");
    $select=$con->prepare("SELECT * FROM committee WHERE id='$id'");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    while($p=$select->fetch()){
        $i=$p['img'];
        unlink($i);
    }
    $delete=$con->prepare("DELETE FROM committee WHERE id='$id'");
    $delete->execute();
    header("location:manage_committie.php");
}
catch(PDOException $e){
    echo "Error". $e->getMessage();
}
?>