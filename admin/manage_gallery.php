<?php
include "header.php";
?>
    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Manage Image Info</h3>
                </div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <?php
                        try{

                            $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
                            $select=$con->prepare("SELECT * FROM gallery");
                            $select->setFetchMode(PDO::FETCH_ASSOC);
                            $select->execute();
                            $i=1;
                            ?>
                            <tr class="bg-primary">
                                <th>SL</th>
                                <th>Description</th>
                                <th>Images</th>
                                <th>Publication Status</th>
                                <th style="padding-left: 30px; padding-right: 30px;">Action</th>
                            </tr>
                            <?php while($p=$select->fetch()){?>
                                <tr><td><?php echo $i++ ?></td>
                                <td><?php echo $p['description']?></td>
                                    <td><img src="<?php echo $p['img']?>" height="50px" width="80px"/></td>
                                    <td><?php echo $p['publication_status']== 1 ? 'Published' : 'Unpublished'?></td>
                                    <td>
                                        <?php if($p['publication_status'] == 1){?>
                                            <a href="images_published.php?id=<?php echo $p['id'];?>" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        <?php }else{?>
                                            <a href="images_unpublished.php?id=<?php echo $p['id'];?>" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        <?php }?>
                                        <a href="edit_images.php?id=<?php echo $p['id'];?>" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="images_delete.php?id=<?php echo $p['id'];?>" onclick="return confirm('Are You Sure Delete this!!');" class="btn btn-danger btn-xs">
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
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>