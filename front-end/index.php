<?php

?>

<!--Navbar-->
<?php include 'header.php' ?>

<!--    Slider-->

   <?php include 'slider.php' ?>

<!--    Contant-->
<div class="row mt-3">
<!--    Main Contant-->
    <div class="col-md-9">

        <!-- DUAA Program News-->

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #00a946">DUAA Program News</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #00a946; margin-top: -5px; height: 2px"></div>
            </div>
        </div>
            <?php
            try {
            $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
            $select = $con->prepare("SELECT * FROM news WHERE publication_status=1 AND content ='Main News' ORDER BY id DESC LIMIT 1");
            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            $p = $select->fetch();
            ?>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <img src="../admin/<?php echo $p['img'];?>" class="col-md-12 mb-5" height="170px" />
                        <h3 class="text-center mb-3"><b><?php echo $p['title_name'];?></b></h3>
                        <h5><?php echo $p['short_description'];?></h5>
                        <a href="details.php?id=<?php echo $p['id'];?> & name=news" class="btn btn-info btn-lg mt-1">Read more</a>
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
            try {
            $con1 = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
            $select1 = $con1->prepare("SELECT * FROM news WHERE publication_status=1 AND content ='Sub News' ORDER BY id DESC limit 3");
            $select1->setFetchMode(PDO::FETCH_ASSOC);
            $select1->execute();
            ?>
            <div class="col-md-6">
                <?php while($p=$select1->fetch()){?>
                <div class="card">
                    <div class="card-body bg-light">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../admin/<?php echo $p['img'];?>" class="col-md-12" height="100px" />
                    </div>
                    <div class="col-md-6 mt-2"><h3><?php echo $p['title_name'];?></h3>
                        <a href="details.php?id=<?php echo $p['id'];?> & name=news" class="btn btn-info btn-lg mt-1">Read more</a>
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
        <!-- END DUAA Program News-->

        <!-- Executive Committee Meeting-->
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 m-0 p-0"><h3 class="p-2 text-light" style="background-color: black">Executive Committee Meeting</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: black; margin-top: -5px; height: 2px"></div>
            </div>
        </div>
        <?php
        try {
        $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
        $select = $con->prepare("SELECT * FROM meeting WHERE publication_status=1 AND content ='Main Content' ORDER BY id DESC LIMIT 1");
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $select->execute();
        $p = $select->fetch();
        ?>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <img src="../admin/<?php echo $p['img'];?>" class="col-md-12 mb-5" height="170px" />
                        <h3 class="text-center mb-3"><b><?php echo $p['title_name'];?></b></h3>
                        <h5><?php echo $p['short_description'];?></h5>
                        <a href="details.php?id=<?php echo $p['id'];?> & name=meeting" class="btn btn-info btn-lg mt-1">Read more</a>
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
            try {
            $con1 = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
            $select1 = $con1->prepare("SELECT * FROM meeting WHERE publication_status=1 AND content ='Sub Content' ORDER BY id DESC limit 3");
            $select1->setFetchMode(PDO::FETCH_ASSOC);
            $select1->execute();
            ?>
            <div class="col-md-6">
                <?php while($p=$select1->fetch()){?>
                    <div class="card">
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../admin/<?php echo $p['img'];?>" class="col-md-12" height="100px" />
                                </div>
                                <div class="col-md-6 mt-2"><h3><?php echo $p['title_name'];?></h3>
                                    <a href="details.php?id=<?php echo $p['id'];?> & name=meeting" class="btn btn-info btn-lg mt-1">Read more</a>
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

        <!-- END Executive Committee Meeting-->

        <!-- Madia Coverage-->

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #0000bf">Madia Coverage</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #0000bf; margin-top: -5px; height: 2px"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-light">
                <div class="row">
                    <h3 class="p-3">DUAA Press Conference at DRU</h3>
                </div>
            </div>
        </div>
         <div class="card mb-3">
                    <div class="card-body bg-light">
                        <div class="row">
                            <h3 class="p-3">অ্যালামনাই অ্যাসোসিয়েশন</h3>
                        </div>
                    </div>
                </div>

        <!-- END Madia Coverage-->

        <!-- Upcoming Events-->

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 m-0 p-0"><h3 class="p-2 text-light" style="background-color: red">Upcoming Events</h3></div>
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
                <img src="../admin/<?php echo $p['img'];?>" class="col-md-6 col-md-offset-3 mb-5" />
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

        <!-- Upcoming Events-->

        <!-- DUAA Scholarship-->

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="col-md-4 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #0c5460">DUAA Scholarship</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #0c5460; margin-top: -5px; height: 2px"></div>
            </div>
        </div>
        <?php
        try {
            $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
            $select = $con->prepare("SELECT * FROM scholarship WHERE publication_status=1 AND content ='Main Content' ORDER BY id DESC LIMIT 1");
            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            $p = $select->fetch();
            ?>
            <div class="card">
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="../admin/<?php echo $p['img'];?>" class="col-md-6 col-md-offset-3 mb-5" />
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center mb-3"><b><?php echo $p['title_name'];?></b></h3>
                            <h5><?php echo $p['short_description'];?></h5>
                            <a href="details.php?id=<?php echo $p['id'];?> & name=scholarship" class="btn btn-info btn-lg mt-1">Read more</a>
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

        <!-- End DUAA Scholarship-->

        <!-- DUAA Documents-->

        <div class="row">
            <div class="col-md-6">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="col-md-6 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #c69500">DUAA Documents</h3></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div  class="col-md-12" style="background-color: #c69500; margin-top: -5px; height: 2px"></div>
                    </div>
                </div>
                <?php
                try {
                $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
                $select = $con->prepare("SELECT * FROM documents WHERE publication_status=1 AND content ='Main Content' ORDER BY id DESC LIMIT 2");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $p = $select->fetch();
                ?>
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="../admin/<?php echo $p['img'];?>" class="col-md-6 col-md-offset-3 mb-5" />
                            </div>
                            <div class="col-md-12">
                                <h3 class="text-center mb-3"><b><?php echo $p['title_name'];?></b></h3>
                                <h5><?php echo $p['short_description'];?></h5>
                                <a href="details.php?id=<?php echo $p['id'];?> & name=documents" class="btn btn-info btn-lg mt-1">Read more</a>
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
                try {
                $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
                $select = $con->prepare("SELECT * FROM documents WHERE publication_status=1 AND content ='Sub Content' ORDER BY id DESC LIMIT 1");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $p = $select->fetch();
                ?>
                <div class="card mt-2">
                    <div class="card-body bg-light">
                        <div class="row">
                            <a class="text-dark" href="details.php?id=<?php echo $p['id'];?> & name=documents">
                            <div class="col-md-6">
                                <img src="../admin/<?php echo $p['img'];?>" class="col-md-12" />
                            </div>
                            <div class="col-md-6 mt-2"><h3><?php echo $p['title_name'];?></h3></div>
                            </a>
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

            <!-- End DUAA Documents-->

            <div class="col-md-6">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="col-md-6 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #0b2e13">100 Years Of DU</h3></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div  class="col-md-12" style="background-color: #0b2e13; margin-top: -5px; height: 2px"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="../assests/images/p2.jpg" class="col-md-6 col-md-offset-3 mb-5" />
                            </div>
                            <div class="col-md-12">
                                <h3 class="text-center mb-3"><b>ইউনিভার্সিটি অ্যালামনাই অ্যাসোসিয়েশন.</b></h3>
                                <h5>
                                    ঢাকা ইউনিভার্সিটি অ্যালামনাই অ্যাসোসিয়েশন ।ঢাকা ইউনিভার্সিটি অ্যালামনাই অ্যাসোসিয়েশন ।
                                    ঢাকা ইউনিভার্সিটি অ্যালামনাই অ্যাসোসিয়েশন ।ঢাকা ইউনিভার্সিটি অ্যালামনাই অ্যাসোসিয়েশন ।
                                    ঢাকা ইউনিভার্সিটি অ্যালামনাই অ্যাসোসিয়েশন ।ঢাকা ইউনিভার্সিটি অ্যালামনাই অ্যাসোসিয়েশন ।
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    Site-Bar-->
<?php include 'site_bar.php' ?>

</div>
    <!--    Big Footer-->
<?php include 'footer.php' ?>

