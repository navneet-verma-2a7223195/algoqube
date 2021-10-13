<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoquba - Digital Marketing</title>
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
        <h1 class="sec-1 heading font-weight-bold text-center">Digital Marketing</h1><hr>
        <div class="mentor-card row">
       
            <div class="col-sm-12 col-md-7">

   
        <p class="h5 font-weight-medium mt-4 mb-0 pl-0 my-2">
        We are a team of creative professionals sharing a passion for enabling digital 
transformation for Corporates, MSMEs, and startups.
We bring together the expertise of Digital Marketing, Content Creation & Designing to 
empower brands with their digital presence through Social media marketing.
Our diverse skill-sets and a combined experience of 15 years have led us to successfully 
deliver multiple campaigns,
 build brand identities resulting in lead generations and multi-
fold growth for businesses across various verticals.

<br><br>
<b>Services we offer</b><br><br>

DIGITAL MARKETING  & LEAD GENERATION <br>

CONTENT CREATION, STRATEGY & BRAD MANAGEMENT <br>
 
GRAPHIC DESIGNING & PHOTOGRAPHY
        </p></div>
        <div class="col-sm-12 col-md-5">
        <img src="<?= base_url();?>assets/Personal 23.jpg" class="mx-auto img-fluid my-3 my-md-0"   alt="mentor-photo-thumbnail" id="digital_image">
        </div>
   
    </div>
    </div>
    <?php 
        $this->load->view('footer');    

    ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  
</body>
</html>