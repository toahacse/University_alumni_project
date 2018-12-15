    <?php
    $db=mysqli_connect("localhost","root","","alumni_association");
    $mass=" ";
    if(isset($_POST['ok'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $query = "INSERT INTO contact(name,email,message)
                            VALUES ('$name','$email','$message')";
        if (mysqli_query($db, $query)) {
            $mass = "<h4 class='text-success text-center'>" . "Thanks for massaging us.We try to be as responsive as possible.We'll get back to you Email." . "</h4>";
        }
    }
    ?>
<style>
    /*our section*/
    .team-section{
        overflow: hidden;
        text-align: center;
        padding: 20px;
        background:;
    }
    .team-section h1{
        text-transform: uppercase;
        margin-bottom: 0px;
        color: #fff;
        font-size: 40px;
    }
    .border{
        display: block;
        margin: auto;
        width: 200px;
        height: 3px;
        background: #3498db;
        margin-bottom: 40px;
    }
    .ps{
        margin-top: 40px;
    }
    .ps a{
        display: inline-block;
        margin:0 15px;
        width: 170px;
        height: 170px;
        overflow: hidden;
        border-radius: 50%;
    }
    .ps a img{
        width:100%;
        filter: grayscale(100%);
        transition: 0.4s all;
    }
    .ps a:hover > img{
        filter: none;
    }
    .na{
        width: 600px;
        margin-top:50px;
        margin-bottom:50px;
        margin-left:130px;
        font-size: 20px;
        color:#fff;
        text-align: justify;
        height: 0;
        overflow: hidden;
    }
    .na:target{
        height: auto;
    }
    .name{
        display: block;
        margin-bottom: 5px;
        margin-top: 20px;
        text-align: center;
        text-transform: uppercase;
        font-size: 22px;
    }
    /*contact form*/
    .co-left{
        margin-top: 50px;
        padding: 20px;
        line-height: 20px;
    }
    .co-left h1{
        margin-right:  350px;
        color:#fff;
        font-size:30px;
        font-family:"roboto" sans-serif;



    }
    .co-left P{
        color: #fff;
        font-size: 18px;
        margin-left:310px;

    }
    .co-left h2{
        color: ;
        font-size: 18px;
        margin-right:  110px;

    }
    .g{
        color: #fff;
    }
    #contact{
        margin: 0;
        padding: 0;
        text-align: center;
        background: #35424a;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
    }
    .contact-title{
        margin-top: 50px;
        color: #fff;
        text-transform: uppercase;
        transition: all 4s ease-in-out;

    }
    .contact-title h2{
        font-size: 30px;
        line-height: 10px;
    }
    .contact-title h3{
        font-size: 16px;

    }
    #contact-form{
        margin-top: 30px;
        transition: all 4s ease-in-out;

    }
    .form-control1{
        width: 600px;
        background: transparent;
        border:none;
        outline: none;
        border-bottom: 1px solid grey;
        color: #35424a;
        font-size: 18px;
        margin-bottom: 16px;
    }
    input{
        height: 45px;
    }
    #contact-form .submit{
        background: #ff5722;
        border-radius: 5px;
        border-color: transparent;
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 2px;
        height: 50px;
        margin-top: 20px;
    }
    #contact-form .submit:hover{
        background-color: #f44336;
    }

    .leftbox{
        width: 40%;
        height: 100%;
        float: left;
        padding: 40px;
        box-sizing: border-box;

    }
    .leftbox .conr{
        color: #fff;
        background: rgba(0,0,0,.5);
        padding: 40px;
        transition: 0.5s;
        margin-bottom: 20px;
    }
    .leftbox .conr:hover{
        background: #dd4b39;
    }
    .leftbox .conr h4{
        margin: 0;
        padding: 0;
        text-transform: uppercase;
        font-size: 50px;
    }
    .leftbox .conr p{
        margin:10px 0 0;
        padding: 0;
    }
    .se{
        padding: 50px;
        margin-top: 10px;
        position: relative;
        width: 60%;
        height: 100%;
        background: rgba(0,0,0,.5);
        float: right;
        box-sizing: border-box;
    }

    .w3l-map iframe {
        width: 100%;
        height: 500px;
        margin-top: 0;
        outline: none;
        border: none;
    }
    .w3l-map {
        padding: 12px;
        border: 10px solid #ed1c24;
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
                <div class="card">
                    <div class="card-body">
                        <div class="team-section">
                            <h1 style="color: #007bff">About Me</h1>
                            <span class="border"></span>
                            <?php echo $mass;?>
                                <div class="ps">
                                    <a href="#p1"><img src="../persolan/toaha.jpg" alt=""></a>
                                </div>
                                <div class="na" id="p1">
                                    <h2 class="text-info"><span style="color: red">Name:</span> Md. Ismat Toaha</h2><br/>
                                    <h4 class="text-info" style="margin-top: -20px;"><span style="color: red; margin-right: 18px;">Phone:</span> 00110-011001</h4><br/>
                                    <h4 class="text-info" style="margin-top: -20px;"><span style="color: red;margin-right: 24px;">Email:</span> <a href="#" style="color: #007bff">toahacse@gmail.com</a></h4><br/>
                                    <h4 class="text-info" style="margin-top: -20px;"><span style="color: red;margin-right: 3px;">Address:</span> Muradpur,Chittagong,Bangladesh.</h4><br/>
                                    <h4 class="text-info" style="margin-top: -20px;"><span style="color: red;margin-right: 18px;">Expert:</span> HTML,CSS,Bootstrap,JavaScripts,Jquery,PHP,Laravel Framework.</h4>
                                </div>
                        </div>
                        <center>
                            <h1 class="text-info"><u>CONTACT US:</u></h1>
                            <h5>For any questions, comments, or concerns, please contact us using the information below.All messages are read promptly. </h5>
                        <div class="contact-form" >
                            <form id="contact-form" method="post" action="">
                                <input name="name" type="text" class="form-control1" placeholder="your name" required><br>
                                <input name="email" type="text"  class="form-control1" placeholder="your email" required><br>
                                <textarea name="message" class="form-control1" placeholder="message" rows="4" cols="5" required></textarea><br>
                                <input type="submit" name="ok" class="form-control1 submit" value="SEND MESSAGE"/>
                            </form>
                        </div>
                        </center>
                        <div class="w3l-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10446319.224363243!2d-101.53641366492933!3d40.52127641868563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1509778660321" style="border:0" allowfullscreen></iframe>
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

