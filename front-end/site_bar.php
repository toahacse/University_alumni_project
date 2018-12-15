<style>
    .test{
        margin-top: 10px;
        margin-left: -20px;
        margin-right: 15px;
        float: left;
        list-style: none;
        border: 1px solid white;
        width: 30px;
        height: 30px;
        font-size: large;
        font-weight: 1000;
        text-align: center;
        color: white;
    }
    .test:hover{
        background-color: #2c3ba3;
        transition: 1s;
    }
    .test1{
        margin-top: 10px;
        margin-right: 15px;
        float: left;
        list-style: none;
        border: 1px solid white;
        width: 30px;
        height: 30px;
        font-size: 15px;
        font-weight: 1000;
        text-align: center;
        color: white;
    }
    .test1:hover{
        background-color: #CC0000;
        transition: 1s;
    }
    .test2{
        margin-top: 10px;
        margin-right: 15px;
        float: left;
        list-style: none;
        border: 1px solid white;
        width: 30px;
        height: 30px;
        font-size: 9px;
        font-weight: 1000;
        text-align: center;
        color: black;
    }
    .test2:hover{
        background-color: white;
        transition: 1s;
    }
    .test3{
        margin-top: 10px;
        float: left;
        list-style: none;
        border: 1px solid white;
        width: 30px;
        height: 30px;
        font-size: large;
        font-weight: 1000;
        text-align: center;
        color: white;
    }
    .test3:hover{
        background-color: #007bff;
        transition: 1s;
    }
</style>
<div class="col-md-3 mb-3">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="input-group p-2">
            <input type="text" style="height: 40px; font-size: 18px;" class="form-inline col-md-10text-light" placeholder=" Search" />
                <span class="input-group-addon bg-primary" style="padding-right: 25px; padding-top: 10px;"><span class="glyphicon glyphicon-search font-weight-bold text-light text-center"></span></span>
            </div>
        </div>

    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="col-md-8 m-0 p-0"><h3 class="p-2 text-light" style="background-color: red">Upcoming Events</h3></div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div  class="col-md-12" style="background-color: red; margin-top: -5px; height: 2px"></div>
        </div>
    </div>
    <?php
    try {
        $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
        $select = $con->prepare("SELECT * FROM events WHERE publication_status=1 AND content ='Main Content' ORDER BY id DESC LIMIT 1");
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $select->execute();
        $p = $select->fetch();
        ?>
        <div class="card">
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-md-12">
                        <img src="../admin/<?php echo $p['img'];?>" class="col-md-8 col-md-offset-2 mb-5" />
                    </div>
                    <div class="col-md-12">
                        <h3 class="text-center mb-3"><b><?php echo $p['title_name'];?></b></h3>
                        <h5><?php echo $p['short_description'];?></h5>
                        <a href="details.php?id=<?php echo $p['id'];?> & name=events" class="btn btn-info btn-lg mt-1">Read more</a>
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
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="col-md-4 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #a329c3">Notice</h3></div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div  class="col-md-12" style="background-color: #a329c3; margin-top: -5px; height: 2px"></div>
        </div>
    </div>
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
                        <img src="../admin/<?php echo $p['img'];?>" class="col-md-8 col-md-offset-2 mb-5"/>
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
    <div class="card mt-2">
        <div class="card-body bg-light">
            <div class="row">
                <h3 class="p-3">DUAA Press Conference at DRU</h3>
            </div>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body bg-light">
            <div class="row">
                <h3 class="p-3">DUAA Press Conference at DRU</h3>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="col-md-4 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #0d4022">যাত্রিক</h3></div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div  class="col-md-12" style="background-color: #0d4022; margin-top: -5px; height: 2px"></div>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <div class="row">
                <img src="../assests/images/s2.jpg" class="col-md-12" />
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="col-md-6 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #1e425d">Socile Media</h3></div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div  class="col-md-12" style="background-color: #1e425d; margin-top: -5px; height: 2px"></div>
        </div>
    </div>
    <div style="height: 50px; background-color: #1E3442; margin-top: -13px;">
        <ul>
            <a href=""><li class="test">f</li></a>
            <a href=""><li class="test1">G&plus;</li></a>
            <a href=""><li class="test2">you<br/><span style="color:white;background-color: red;text-align: center;">tube</span></li></a>
            <a href=""><li class="test3">t</li></a>
        </ul>
    </div>
</div>