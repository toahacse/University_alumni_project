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
                <div class="ml-5 mr-5 p-0"><h3 class="p-2 text-light" style="background-color: #777777;font-size: 30px;text-align: center;">Executive Committee</h3></div>
            </div>
        </div>
        <?php
        try {
        $con1 = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
        $select1 = $con1->prepare("SELECT * FROM committee WHERE publication_status=1 AND type_of_committe='Executive Committe'");
        $select1->setFetchMode(PDO::FETCH_ASSOC);
        $select1->execute();
        ?>
        <div class="row ml-1 mr-1">
            <?php while($p=$select1->fetch()){?>
            <div class="col-md-4 mb-3">
                 <div class="card">
                    <div class="card-body">
                        <img src="../admin/<?php echo $p['img'];?>" class="w-100 mb-3" height="200px;"/>
                        <div class="bg-primary">
                            <h3 class="text-light p-2" align="center"><?php echo $p['name'];?></h3>
                            <h4 class="text-light pb-3" align="center"><?php echo $p['position'];?></h4>
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

