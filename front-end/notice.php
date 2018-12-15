<?php

?>

<!--Navbar-->
<?php include 'header.php' ?>

<!--    Contant-->

<div class="row mt-3">

    <!--    Main Contant-->

    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #a329c3;font-size: 30px;text-align: center;">Notice</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #a329c3; margin-top: -5px; height: 2px"></div>
            </div>
        </div>

        <!--   Main Contant-->

        <?php
        try {
            $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
            $select = $con->prepare("SELECT * FROM notice WHERE publication_status=1 AND content ='Main Content' ORDER BY id DESC LIMIT 1");
            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            $p = $select->fetch();
            ?>
            <div class="row ml-1 mr-1">
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="col-md-12">
                            <img src="../admin/<?php echo $p['img'];?>" class="col-md-8 col-md-offset-2 mb-5" height="250px;"/>
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center mb-3"><b><?php echo $p['title_name'];?></b></h3>
                            <h5><?php echo $p['short_description'];?></h5>
                        </div>
                        <div class="col-md-12">
                            <a href="details.php?id=<?php echo $p['id'];?> & name=notice" class="btn btn-info btn-lg mt-1">Read more</a>
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

        <!--   Sub Contant-->

        <?php
        try {
        $con1 = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
        $select1 = $con1->prepare("SELECT * FROM notice WHERE publication_status=1 AND content ='Sub Content' ORDER BY id DESC limit 6");
        $select1->setFetchMode(PDO::FETCH_ASSOC);
        $select1->execute();
        ?>
        <div class="row">
            <?php while($p=$select1->fetch()){?>
                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-body bg-light">
                            <div class="col-md-12">
                                <img src="../admin/<?php echo $p['img'];?>" class="col-md-8 col-md-offset-2 mb-5" height="150px;"/>
                            </div>
                            <div class="col-md-12" style="height: 130px">
                                <h3 class="text-center mb-3"><b><?php echo $p['title_name'];?></b></h3>
                                <h5><?php echo $p['short_description'];?></h5>
                            </div>
                            <div class="col-md-12">
                                <a href="details.php?id=<?php echo $p['id'];?> & name=notice" class="btn btn-info btn-lg mt-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            }
            catch(PDOException $e)
            {echo "error" . $e->getMessage();
            }
            ?>
        </div>
    </div>

    <!--    Site-Bar-->
    <?php include 'site_bar.php' ?>

</div>
<!--    Big Footer-->
<?php include 'footer.php' ?>

