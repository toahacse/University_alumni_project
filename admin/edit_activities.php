<?php
include "header.php";
?>
<?php
$id=$_GET['id'];
$db=mysqli_connect("localhost","root","","alumni_association");
$mass=" ";
if(isset($_POST['ok'])) {
    $title_name=$_POST['title_name'];
    $description=$_POST['description'];
    $publication_status=$_POST['publication_status'];

    $query="UPDATE activities SET title_name='$title_name',description='$description',
            publication_status='$publication_status' WHERE id='$id'";
    if(mysqli_query($db,$query)){
        $mass="<h3 class='text-success text-center'>"."Activities Update Successfuly"."</h3>";
        }
    }
?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Update Activities</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <?php
                    try{
                        $id=$_GET['id'];
                        $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
                        $select=$con->prepare("SELECT * FROM activities WHERE id='$id'");
                        $select->setFetchMode(PDO::FETCH_ASSOC);
                        $select->execute();
                        $p = $select->fetch();
                        ?>
                        <div class="form-group">
                            <label for="categoryName">Title Name:</label>
                            <input type="text" class="form-control" name="title_name" value="<?php echo $p['title_name'];?>" id="formGroupExampleInput" placeholder="Title Name"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Description:</label>
                            <textarea  class="form-control" rows="5" cols="5" name="description" required>
                                <?php echo $p['description'];?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_status" <?php if($p['publication_status'] == 1){ echo 'checked';}?>  value="1">Published
                            <input type="radio" name="publication_status"  <?php if($p['publication_status'] == 0){ echo 'checked';}?>  value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Update Activities" />
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