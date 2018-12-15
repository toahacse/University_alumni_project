<?php

?>

<!--Navbar-->
<?php include 'header.php' ?>

<!--    Contant-->

<div class="row mt-3">

    <!--    Main Contant-->
    <?php
    try {
    $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
    $select = $con->prepare("SELECT * FROM activities WHERE publication_status=1 ORDER BY id DESC LIMIT 1");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $p = $select->fetch();
    ?>
    <div class="col-md-9">
        <!--   Main Contant-->
            <div class="row ml-1 mr-1">
                <div class="card mt-5">
                    <div class="card-header bg-info">
                        <h3 class="text-light font-weight-bold"><?php echo $p['title_name'];?></h3>
                    </div>
                    <div class="card-body bg-light">
                        <h4 class="ml-5 mr-5"><?php echo $p['description'];?></h4>
                    </div>
                </div>
            </div>
            <?php
        }
        catch(PDOException $e)
        {echo "error" . $e->getMessage();
        }
        ?>


        </div>

    <!--    Site-Bar-->
    <?php include 'site_bar.php' ?>

</div>
<!--    Big Footer-->
<?php include 'footer.php' ?>

