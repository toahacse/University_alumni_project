    <?php
    try {
    $con = new PDO ("mysql:host=localhost;dbname=alumni_association", "root", "");
    $select = $con->prepare("SELECT * FROM journey_of_DUAA WHERE publication_status=1 ORDER BY id DESC LIMIT 1");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $p = $select->fetch();
    ?>
<div class="row bg-dark pt-5 pb-3 mt-3">
    <div class="col-md-6">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="col-md-6 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #0fb2fc">Journey of DUAA</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #0fb2fc; margin-top: -5px; height: 2px"></div>
            </div>
        </div>
        <p style="color:#9FAFD1; font-size: 15px;">
            <?php echo $p['short_description'];?><a class="btn btn-lg btn-outline-info" href="journey_of_duaa.php">Read More..</a>
        </p>
    </div>
    <?php
    }
    catch(PDOException $e)
    {echo "error" . $e->getMessage();
    }
    ?>
    <div class="col-md-3">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="col-md-6 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #0fb2fc">Our Address</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #0fb2fc; margin-top: -5px; height: 2px"></div>
            </div>
        </div>
        <p style="color:#9FAFD1; font-size: 15px;">
            Alumni Floor,<br/>
            Nawbab ali Bhavan,<br/>
            University of Dhaka,<br/>
            Dhaka-1000,<br/>
            Bangladesh
        </p>
    </div>
    <div class="col-md-3">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="col-md-6 m-0 p-0"><h3 class="p-2 text-light" style="background-color: #0fb2fc">Contact Us</h3></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div  class="col-md-12" style="background-color: #0fb2fc; margin-top: -5px; height: 2px"></div>
            </div>
        </div>
        <table class="table text-light">
            <tr>
                <td> +88 01713-896743</td>
            </tr>
            <tr>
                <td> +88 01713-896743</td>
            </tr>
            <tr>
                <td> +88 01713-896743</td>
            </tr>
            <tr>
                <td><a href="">www.DUAA-bd.org</a> </td>
            </tr>
        </table>
    </div>
</div>
<div class="row p-3" style="background-color: #777777">
    <div class="col-md-9">
        <h5 class="text-light">Copyright &copy; 2018 Dhaka University Alumni Association</h5>
    </div>
    <div class="col-md-3">
        <h5 class="text-light">Design Adn Developed by <a href="">Ismat toaha</a> </h5>
    </div>
</div>
</div>
<script src="../js/bootstrap.js"></script>
<script src="../assests/jquery/jquery.min.js"></script>
</body>
</html>