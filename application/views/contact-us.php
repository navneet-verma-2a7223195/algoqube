<!DOCTYPE html>
<html lang="en">
<head>
    <!-- venms//hacket -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoquba - Contact Us</title>
    <link rel = "icon" href = "<?= base_url();?>assets/images/Algoqube_logo.png" width="50px" height="50px"type = "image/x-icon">
            <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/style_v2.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/nav-footer.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/style-home.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/slider.css');?>">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
<!--         
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
    <?php
    $this->load->view('header');
    ?>
<br><br>

<div class="container">
    <section id="mu-about-us" style="margin-bottom:0; margin-top:20px; padding-bottom:0; padding-top:20px;">
        <div class="container">
            <h1 class="sec-1 heading font-weight-bold text-center">Contact Us</h1> <hr>
            <div class="row">
                <div class="col-md-4">                 
    <!-- <p lang="" align="justify"> <strong>Address:</strong><br>-->
                    <p lang="" align="justify"> 
                        <strong>Address:</strong><br>
                        Algoqube <br>
                        Pune, Maharashtra,<br>
                        <br>
                        <strong>Phone:</strong><br>
                        +91 9595012234 <br>
                        +91 97161 71646<br>
                        <br>
                        <strong>Email:</strong> <br>
                        connectme@algoqube.com
                        <br>
                        <br>

                    </p><br><br><br>
                </div>
                <div class="col-md-8">
<div class="container">
    <!-- <h2 class="text-center">Contact Us</h2> -->
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->
                    <?php $Msg = "";
                        if(isset($_GET['error']))
                        {
                            $Msg = "Please fill in the blanks...";
                            echo '<div class="alert alert-danger">'.$Msg.'</div>';
                        }

                        if(isset($_GET['success']))
                        {
                            $Msg = "Email sent";
                            echo '<div class="alert alert-success">'.$Msg.'</div>';
     
                        }
                        ?>

                    <form action="email_process" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contact Us</h3>
                                    <p class="m-0"></p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="UName" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="Email" placeholder="example@gmail.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <input name="Subject"class="form-control" placeholder="Subject" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea name="msg"class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input name="btn-send"type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>
                </div>
                
            </div>
        </div>
    </section>
</div><br><br>

    <?php
    $this->load->view('footer');
    ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  
</body>
</html>