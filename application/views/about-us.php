<!DOCTYPE html>
<html lang="en">
<head>
    <!-- venms//hacket -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoquba - Home</title>
    <link rel = "icon" href = "<?= base_url();?>assets/images/Algoqube_logo.png" width="50px" height="50px"type = "image/x-icon">

            <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/style_v2.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/nav-footer.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/style-home.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/slider.css');?>">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
   <?php
      $this->load->view('header');
    ?>
        <div class="container-fluid nav-padding my-5 pt-5">
        
        <h1 class="sec-1 heading font-weight-bold text-center">About Us</h1><hr>
        <div class="row align-items-center my-5 py-md-5">
            <div class="col-12 col-md-5">
                <img src="<?php echo base_url('assets/images/Algoqube_logo.png');?>" class="img-fluid" width="300px" alt="small-top-icon">
            </div>
            <div class="col-12 col-md-7 sec-1-txt justify-content-end mt-4 mt-md-0 py-md-3 pl-md-4">
                <p class="h5 font-weight-medium mb-0">
                We at algoqube provide web development service for any level of business or ideas. We are a team of skilled web designers & developers, who brings your imaginations to reality. Our main focus is to make your website or web-application much easy to to use & make it more productive for you . At Algoqube, we love to build unique ideas, if you have any idea in your mind you can contact us, our team will communicate with you & provide you assistance on how to execute them. We are providing web development service on below concepts or business needs.                </p>
            </div>
        </div>
        <!-- <hr width="300px" color="#E9F7FF"> -->
        <!-- <div class="row align-items-center d-flex flex-md-row-reverse my-5 py-md-5"> -->
            <!-- <div class="col-12 col-md-4">
                <h1 class="font-weight-semibold text-md-right"> What we offer</h1>

            </div> -->
            <!-- <div class="col-12 col-md-8 sec-2-txt justify-content-end mt- mt-md-0 py-md-3 pr-md-5">
                <h2 class="font-weight-semibold text-nb-blue-alt">Digital marketing:</h2>
                
            </div> -->
        <!-- </div> -->
    </div>
    <hr width="300px" color="#E9F7FF">
    <!-- MAIN CONTENT END -->

    <?php
      $this->load->view('footer');
    ?>

    <!-- Optional JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  
    
</body>
</html>