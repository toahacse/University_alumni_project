<?php
include "header.php";
?>
<?php
$db=mysqli_connect("localhost","root","","alumni_association");
$mass=" ";
if(isset($_POST['ok'])) {
    $title_name=$_POST['title_name'];
    $short_description=$_POST['short_description'];
    $long_description=$_POST['long_description'];
    $publication_status=$_POST['publication_status'];

    $query = "INSERT INTO journey_of_DUAA(title_name,short_description,long_description,publication_status)
              VALUES ('$title_name','$short_description','$long_description','$publication_status')";
            if (mysqli_query($db, $query)) {
                $mass = "<h3 class='text-success text-center'>" . "Journey of DUAA Save Successfully" . "</h3>";
            }
        }
?>

    <div class="row">
        <div class="col-md-offset-1 col-md-8" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Add Journey of DUAA</h3>
                </div>
                <div class="panel-body">
                    <?php echo $mass;?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="categoryName">Title Name:</label>
                            <input type="text" class="form-control" name="title_name" required id="formGroupExampleInput" placeholder="Title Name"/>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">Short Description:</label>
                            <textarea maxlength="400" class="form-control" rows="3" cols="5" name="short_description" required>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoryName">long Description:</label>
                            <textarea class="form-control" rows="5" cols="5" name="long_description" required>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" required name="publication_status" value="1">Published
                            <input type="radio" required name="publication_status" value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Save Journey of DUAA" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>