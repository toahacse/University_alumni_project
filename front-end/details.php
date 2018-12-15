<?php

    $id=$_GET['id'];
    $name=$_GET['name'];
?>

<!--Navbar-->
<?php include 'header.php' ?>

<!--    Contant-->

<div class="row mt-3">

    <!--    Main Contant-->

    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 m-0 p-0">
                    <h3 class="p-2 text-light" style="background-color: #0c5460;font-size: 30px;text-align: center; text-transform: capitalize;">
                        <?php echo $name;?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #0c5460; margin-top: -5px; height: 2px"></div>
            </div>
        </div>

        <!--   Main Contant-->

        <?php
        try {
            $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
            $select = $con->prepare("SELECT * FROM $name WHERE id='$id'");
            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            $p = $select->fetch();
            ?>
            <div class="row ml-1 mr-1">
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="col-md-12">
                            <img src="../admin/<?php echo $p['img'];?>" class="col-md-10 col-md-offset-1 mb-5" height="350px;"/>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-bold col-md-offset-1 mb-3 text-info"><b><?php echo $p['title_name'];?></b></h2>
                            <h4 class="col-md-offset-1"><?php echo $p['long_description'];?></h4>
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

    </div>

    <!--    Site-Bar-->
    <?php include 'site_bar.php' ?>

</div>
<!--    Big Footer-->
<?php include 'footer.php' ?>

