<?php
include "header.php";

$con = new PDO ("mysql:host=localhost;dbname=alumni_association","root","");
$select1=$con->prepare("SELECT * FROM news");
$select1->setFetchMode(PDO::FETCH_ASSOC);
$select1->execute();
$a=0;
while($p=$select1->fetch()) {
    $p['id'];
    $a++;
}
$select2=$con->prepare("SELECT * FROM meeting");
$select2->setFetchMode(PDO::FETCH_ASSOC);
$select2->execute();
$b=0;
while($p=$select2->fetch()) {
    $p['id'];
    $b++;
}
$select3=$con->prepare("SELECT * FROM events");
$select3->setFetchMode(PDO::FETCH_ASSOC);
$select3->execute();
$c=0;
while($p=$select3->fetch()) {
    $p['id'];
    $c++;
}
$select4=$con->prepare("SELECT * FROM scholarship");
$select4->setFetchMode(PDO::FETCH_ASSOC);
$select4->execute();
$d=0;
while($p=$select4->fetch()) {
    $p['id'];
    $d++;
}
$select5=$con->prepare("SELECT * FROM documents");
$select5->setFetchMode(PDO::FETCH_ASSOC);
$select5->execute();
$e=0;
while($p=$select5->fetch()) {
    $p['id'];
    $e++;
}
$select6=$con->prepare("SELECT * FROM notice");
$select6->setFetchMode(PDO::FETCH_ASSOC);
$select6->execute();
$f=0;
while($p=$select6->fetch()) {
    $p['id'];
    $f++;
}
$select7=$con->prepare("SELECT * FROM gallery");
$select7->setFetchMode(PDO::FETCH_ASSOC);
$select7->execute();
$g=0;
while($p=$select7->fetch()) {
    $p['id'];
    $g++;
}
$select8=$con->prepare("SELECT * FROM journey_of_duaa");
$select8->setFetchMode(PDO::FETCH_ASSOC);
$select8->execute();
$h=0;
while($p=$select8->fetch()) {
    $p['id'];
    $h++;
}
$select9=$con->prepare("SELECT * FROM committee");
$select9->setFetchMode(PDO::FETCH_ASSOC);
$select9->execute();
$i=0;
while($p=$select9->fetch()) {
    $p['id'];
    $i++;
}
$select10=$con->prepare("SELECT * FROM activities");
$select10->setFetchMode(PDO::FETCH_ASSOC);
$select10->execute();
$j=0;
while($p=$select10->fetch()) {
    $p['id'];
    $j++;
}
$select11=$con->prepare("SELECT * FROM contact");
$select11->setFetchMode(PDO::FETCH_ASSOC);
$select11->execute();
$k=0;
while($p=$select11->fetch()) {
    $p['id'];
    $k++;
}

?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <!-- News -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $a;?></div>
                        <div>Total News</div>
                    </div>
                </div>
            </div>
            <a href="manage_news.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- meeting -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $b;?></div>
                        <div>Total meeting</div>
                    </div>
                </div>
            </div>
            <a href="manage_meeting.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Events -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $c;?></div>
                        <div>Total Events</div>
                    </div>
                </div>
            </div>
            <a href="manage_events.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Scholarship -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $d;?></div>
                        <div>Total Scholarship</div>
                    </div>
                </div>
            </div>
            <a href="manage_scholarship.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Documents -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $e;?></div>
                        <div>Total Documents</div>
                    </div>
                </div>
            </div>
            <a href="manage_documents.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Notice -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $f;?></div>
                        <div>Total Notice</div>
                    </div>
                </div>
            </div>
            <a href="manage_notice.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Gallery -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $g;?></div>
                        <div>Total Image</div>
                    </div>
                </div>
            </div>
            <a href="manage_gallery.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Journey Of DUAA -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $h;?></div>
                        <div>Journey Of DUAA</div>
                    </div>
                </div>
            </div>
            <a href="manage_journey_of_duaa.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Committee -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $i;?></div>
                        <div>Total Committee</div>
                    </div>
                </div>
            </div>
            <a href="manage_committie.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Activities -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $j;?></div>
                        <div>Total Activities</div>
                    </div>
                </div>
            </div>
            <a href="manage_activities.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- Contact Message -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $k;?></div>
                        <div>Contact Message</div>
                    </div>
                </div>
            </div>
            <a href="view_contact.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
    <?php
    include "footer.php"
    ?>
