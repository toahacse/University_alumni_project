<?php
include "header.php";
?>
<?php
$db=mysqli_connect("localhost","root","","alumni_association");
$mass=" ";
if(isset($_POST['ok'])) {
    $name               = $_POST['name'];
    $position           = $_POST['position'];
    $type_of_committe   = $_POST['type_of_committe'];
    $publication_status = $_POST['publication_status'];
    $fileName           = $_FILES['img']['name'];
    $directory='gallary/';
    $imageUrl=$directory.$fileName;
    $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
    $check=getimagesize($_FILES['img']['tmp_name']);
    if($check) {
        if (file_exists($imageUrl)) {
            $mass="<h3 class='text-danger text-center'>"."This image alredy Exist"."</h3>";
        } else {
            move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
            $query = "INSERT INTO committee(name,position,type_of_committe,img,publication_status)
                          VALUES ('$name','$position','$type_of_committe','$imageUrl','$publication_status')";
            if (mysqli_query($db, $query)) {
                $mass = "<h3 class='text-success text-center'>" . "Committe Save Successfully" . "</h3>";
            }
        }
    }
    else{
        $mass="<h3 class='text-danger text-center'>"."Please chose a image file"."</h3>";
    }
}
?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Add Committe</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="categoryName">Name:</label>
                            <input type="text" class="form-control" name="name" required id="formGroupExampleInput" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Position:</label>
                            <input type="text" class="form-control" name="position" required id="formGroupExampleInput" placeholder="Example:President"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Type of Committe:</label>
                            <select class="form-control" name="type_of_committe" required>
                                <option>Select One</option>
                                <option>Executive Committe</option>
                                <option>Sub-Committe</option>
                                <option>Past Leaders</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Image:</label>
                            <input type="file" class="form-control" name="img" required id="formGroupExampleInput"/>
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" required name="publication_status" value="1">Published
                            <input type="radio" required name="publication_status" value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Save Committe" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>