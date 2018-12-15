<?php

?>
<style>
    .des{
        margin:70px auto 0;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .des .box{
        position: relative;
        background: #ff0;
        margin: 20px;
        box-sizing: border-box;
        display: inline-block;
    }
    .des .box .imgbox{
        position: relative;
        overflow: hidden;
    }
    .des .box .imgbox img{
        max-width: 100%;
        transition: transform 2s;
    }
    .des .box:hover .imgbox img{
        transform: scale(1.2);

    }
    .des .box .details{
        position: absolute;
        top:10px;
        left: 10px;
        bottom: 10px;
        right: 10px;
        background: rgba(0,0,0,.8);
        transform: scaleY(0);
        transition: transform .5s;
    }
    .des .box:hover .details{
        transform: scaleY(1);
    }
    .des .box .details .area{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        padding: 15px;
        color: #fff;
    }
    .des .box .details .area h2{
        margin: 0;
        padding: 0;
        font-size: 20px;
        color: #ff0;
    }
    .des .box .details .area p{
        margin:10px 0 0;
        padding: 0;

    }
</style>

<!--Navbar-->
<?php include 'header.php' ?>

<!--    Contant-->

<div class="row mt-3">

    <!--    Main Contant-->

    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #2E183B;font-size: 30px;text-align: center;">Gallery</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #2E183B; margin-top: -5px; height: 2px"></div>
            </div>
        </div>
        <?php
        try {
        $con1 = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
        $select1 = $con1->prepare("SELECT * FROM gallery WHERE publication_status=1 ORDER BY id DESC limit 12");
        $select1->setFetchMode(PDO::FETCH_ASSOC);
        $select1->execute();
        ?>
        <div class="row">
            <div class="des">
            <?php while($p=$select1->fetch()) { ?>
                    <div class="card-body col-md-4">
                        <div class="box">
                            <div class="imgbox">
                                <img src="../admin/<?php echo $p['img'];?>" height="300px">
                            </div>
                            <div class="details">
                                <div class="area">
                                    <div>
                                        <h3 style="color: #00a946;"><?php echo $p['description']?></h3>
                                    </div>
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

    </div>

    <!--    Site-Bar-->
    <?php include 'site_bar.php' ?>

</div>
<!--    Big Footer-->
<?php include 'footer.php' ?>

