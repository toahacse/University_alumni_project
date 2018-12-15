<?php
include "header.php";
?>
    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Manage Committee</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <?php
                            try{
                                $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
                                $select=$con->prepare("SELECT * FROM committee");
                                $select->setFetchMode(PDO::FETCH_ASSOC);
                                $select->execute();
                                $i=1;
                                ?>
                                <tr class="bg-primary">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Type of Committee</th>
                                    <th>Image</th>
                                    <th>Publication Status</th>
                                    <th style="padding-left: 30px; padding-right: 30px;">Action</th>
                                </tr>
                                <?php while($p=$select->fetch()){?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $p['name']?></td>
                                        <td><?php echo $p['position']?></td>
                                        <td><?php echo $p['type_of_committe']?></td>
                                        <td><img src="<?php echo $p['img']?>" height="60px" width="80px;"/></td>
                                        <td><?php echo $p['publication_status']== 1 ? 'Published' : 'Unpublished'?></td>
                                        <td>
                                            <?php if($p['publication_status'] == 1){?>
                                                <a href="committee_published.php?id=<?php echo $p['id'];?>" class="btn btn-info btn-xs">
                                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                                </a>
                                            <?php }else{?>
                                                <a href="committee_unpublished.php?id=<?php echo $p['id'];?>" class="btn btn-warning btn-xs">
                                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                                </a>
                                            <?php }?>
                                            <a href="edit_committee.php?id=<?php echo $p['id'];?>" class="btn btn-success btn-xs">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            <a id="delete" href="committee_delete.php?id=<?php echo $p['id'];?>" onclick="return confirm('Are You Sure Delete this!!');" class="btn btn-danger btn-xs">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }
                                echo "</table>";
                            }
                            catch(PDOException $e)
                            {echo "error" . $e->getMessage();
                            }
                            ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--<script src="assests/jquery/jquery.js"></script>-->
    <!--    <script>-->
    <!--   $(document).ready(function () {-->
    <!--       $('#delete').onclick(function () {-->
    <!--           alert ("test");-->
    <!--           });-->
    <!--   });-->
    <!--    </script>-->
<?php
include "footer.php"
?>