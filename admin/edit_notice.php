<?php
include "header.php";
?>
<?php
$id=$_GET['id'];
$db=mysqli_connect("localhost","root","","alumni_association");
$mass=" ";
if(isset($_POST['ok'])) {
    $title_name           = $_POST['title_name'];
    $short_description    = $_POST['short_description'];
    $long_description     = $_POST['long_description'];
    $content              = $_POST['content'];
    $publication_status   = $_POST['publication_status'];
    $fileName=$_FILES['img']['name'];
    $directory='gallary/';
    $imageUrl=$directory.$fileName;
    $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
        if($fileName){
            $query1="SELECT * FROM notice WHERE id='$id'";
            $out= mysqli_query($db,$query1);
            $res=mysqli_fetch_array($out);
            unlink($res['img']);
            move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
            $query="UPDATE notice SET title_name='$title_name',short_description='$short_description',long_description='$long_description',content='$content',
                    img='$imageUrl',publication_status='$publication_status' WHERE id='$id'";
            if(mysqli_query($db,$query)){
                $mass="<h3 class='text-success text-center'>"."Notice Update Successfuly"."</h3>";
            }
        }else{
            $query="UPDATE notice SET title_name='$title_name',short_description='$short_description',long_description='$long_description',content='$content',
                    publication_status='$publication_status' WHERE id='$id'";
                if(mysqli_query($db,$query)){
                    $mass="<h3 class='text-success text-center'>"."Notice Update Successfuly"."</h3>";
                }
        }
}
?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Update Notice</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php
                        try{
                            $id=$_GET['id'];
                            $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
                            $select=$con->prepare("SELECT * FROM notice WHERE id='$id'");
                            $select->setFetchMode(PDO::FETCH_ASSOC);
                            $select->execute();
                            $p = $select->fetch();
                            ?>
                        <div class="form-group">
                            <label for="categoryName">Title Name:</label>
                            <input type="text" class="form-control" name="title_name" value="<?php echo $p['title_name'];?>" id="formGroupExampleInput"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Short Description:</label>
                            <textarea maxlength="200" class="form-control" rows="3" cols="5" name="short_description" required>
                                <?php echo $p['short_description'];?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Long Description:</label>
                            <textarea class="form-control" rows="5" cols="5" name="long_description" required>
                                <?php echo $p['long_description'];?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Image:</label>
                            <input type="file" value="<?php echo $p['img'];?>" name="img"/><br/>
                            <img src="<?php echo $p['img'];?> " height="50px" width="100px;" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="content" id="formGroupExampleInput">
                                <option><?php echo $p['content'];?></option>
                                <option>Main content</option>
                                <option>Sub content</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_status" <?php if($p['publication_status'] == 1){ echo 'checked';}?>  value="1">Published
                            <input type="radio" name="publication_status"  <?php if($p['publication_status'] == 0){ echo 'checked';}?>  value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Update Notice" />
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