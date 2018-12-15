<?php
$id=$_GET['id'];
try{
    $con=new PDO("mysql::host=localehost;dbname=alumni_association","root","");
    $select=$con->prepare("SELECT * FROM gallery WHERE id='$id'");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    while($p=$select->fetch()){
        $i=$p['img'];
        unlink($i);
    }
    $delete=$con->prepare("DELETE FROM gallery WHERE id='$id'");
    $delete->execute();
    header("location:manage_gallery.php");
}
catch(PDOException $e){
    echo "Error". $e->getMessage();
}
?>