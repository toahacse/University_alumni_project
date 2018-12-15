<?php
include "header.php";
?>
<?php
$id=$_GET['id'];
$db=mysqli_connect("localhost","root","","alumni_association");
$mass=" ";
if(isset($_POST['ok'])) {
    $description=$_POST['description'];
    $publication_status=$_POST['publication_status'];
    $fileName=$_FILES['img']['name'];
    $directory='gallary/';
    $imageUrl=$directory.$fileName;
    if($fileName){
        $query1="SELECT * FROM gallery WHERE id='$id'";
        $out= mysqli_query($db,$query1);
        $res=mysqli_fetch_array($out);
        unlink($res['img']);
        move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
        $query="UPDATE gallery SET description='$description',img='$imageUrl',publication_status='$publication_status' WHERE id='$id'";
        if(mysqli_query($db,$query)){
            $mass="<h3 class='text-success text-center'>"."Images Update Successfuly"."</h3>";
        }
    }else{
        $query="UPDATE gallery SET description='$description',publication_status='$publication_status' WHERE id='$id'";
        if(mysqli_query($db,$query)){
            $mass="<h3 class='text-success text-center'>"."Images Update Successfuly"."</h3>";
        }
    }
}
?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Update Images</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>

                <?php
                try{

                    $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
                    $select=$con->prepare("SELECT * FROM gallery WHERE id='$id'");
                    $select->setFetchMode(PDO::FETCH_ASSOC);
                    $select->execute();
                    $p = $select->fetch();
                    ?>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="categoryName">Description:</label>
                            <textarea maxlength="200" class="form-control" rows="3" cols="5" name="description" required>
                                <?php echo $p['description'];?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Image:</label>
                            <input type="file" class="form-control" name="img" id="formGroupExampleInput"/><br/>
                            <img src="<?php echo $p['img'];?> " height="50px" width="100px;" />
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_status" <?php if($p['publication_status'] == 1){ echo 'checked';}?>  value="1">Published
                            <input type="radio" name="publication_status"  <?php if($p['publication_status'] == 0){ echo 'checked';}?>  value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Update Images Info" />
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