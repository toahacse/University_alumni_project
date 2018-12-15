<?php
include "header.php";
?>
    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">View All Contact Message</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <?php
                            try{
                                $con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
                                $select=$con->prepare("SELECT * FROM contact");
                                $select->setFetchMode(PDO::FETCH_ASSOC);
                                $select->execute();
                                $i=1;
                                ?>
                                <tr class="bg-primary">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                <?php while($p=$select->fetch()){?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $p['name']?></td>
                                        <td><?php echo $p['email']?></td>
                                        <td><?php echo $p['message']?></td>
                                        <td>
                                            <a id="delete" href="contact_delete.php?id=<?php echo $p['id'];?>" onclick="return confirm('Are You Sure Delete this!!');" class="btn btn-danger btn-xs">
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