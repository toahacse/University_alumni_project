<?php
include "header.php";
?>
<?php
$id=$_GET['id'];
$db=mysqli_connect("localhost","root","","alumni_association");
$mass=" ";
if(isset($_POST['ok'])) {
    $name               = $_POST['name'];
    $position           = $_POST['position'];
    $type_of_committe   = $_POST['type_of_committe'];
    $publication_status = $_POST['publication_status'];
    $fileName=$_FILES['img']['name'];
    $directory='gallary/';
    $imageUrl=$directory.$fileName;
    $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
        if($fileName){
            $query1="SELECT * FROM committee WHERE id='$id'";
            $out= mysqli_query($db,$query1);
            $res=mysqli_fetch_array($out);
            unlink($res['img']);
            move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
            $query="UPDATE committee SET name='$name',position='$position',type_of_committe='$type_of_committe',
                    img='$imageUrl',publication_status='$publication_status' WHERE id='$id'";
            if(mysqli_query($db,$query)){
                $mass="<h3 class='text-success text-center'>"."Committee Update Successfuly"."</h3>";
            }
        }else{
            $query="UPDATE committee SET name='$name',position='$position',type_of_committe='$type_of_committe',
                    publication_status='$publication_status' WHERE id='$id'";
                if(mysqli_query($db,$query)){
                    $mass="<h3 class='text-success text-center'>"."Committee Update Successfuly"."</h3>";
                }
        }
}
?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Update Committee</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php
                        try{
                            $id=$_GET['id'];
                            $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
                            $select=$con->prepare("SELECT * FROM committee WHERE id='$id'");
                            $select->setFetchMode(PDO::FETCH_ASSOC);
                            $select->execute();
                            $p = $select->fetch();
                            ?>
                        <div class="form-group">
                            <label for="categoryName">Name:</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $p['name'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Position:</label>
                            <input type="text" class="form-control" name="position" value="<?php echo $p['position'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Type of Committe:</label>
                            <select class="form-control" name="type_of_committe" required>
                                <option><?php echo $p['type_of_committe'];?></option>
                                <option>Executive Committe</option>
                                <option>Sub-Committe</option>
                                <option>Past Leaders</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Image:</label>
                            <input type="file" class="form-control" name="img" value="<?php echo $p['img'];?>"/><br/>
                            <img src="<?php echo $p['img'];?> " height="50px" width="100px;" />
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_status" <?php if($p['publication_status'] == 1){ echo 'checked';}?>  value="1">Published
                            <input type="radio" name="publication_status"  <?php if($p['publication_status'] == 0){ echo 'checked';}?>  value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Update Committee" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                            <?php
                        }
                        catch(PDOException $e)
                        {echo "error" . $e->getMessage();
                        }
?>

<?php
include "footer.php"
?>