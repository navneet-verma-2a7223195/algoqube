<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="container-fluid section-1">

            
<div class="row m-0">

    <div class="col-sm-12 col-md txt-sec1">

        <h1 class="heading head-sec1 font-weight-bold">
            <!-- Build Your, <br> Website &<br>JOBS. -->
            We help you to reimagine your journey..

        </h1>

        <p class="col-md description desc-sec1 font-weight-normal text-muted"><br>
        We at algoqube, truly believe that getting to know you, your business and your business’ goals is the only way to create and build a brand and presence that is effective and achieves positive results.
        </p>

    <!-- Section-1 BUTTONS -->

        <!-- <div class="btn-sec1">
            <a class="button-primary my-2 text-decoration-none" href="">Sign Up</a>
            <a class="button-secondary my-2 text-decoration-none" href="">Log In</a>
        </div> -->

    </div>
   
    <!-- Section 1 Image -->

    <div class="col-sm-12 col-md-7 px-0 mx-0">
       <br><br><br> <img src="<?php echo base_url();?>assets/Personal 28.png" class="img-sec1 float-right" alt="illustration-jobs-mentor-course">
    </div>
</div>
</div>


<div class="container-fluid section-2 py-5 bg-nb-light-blue">

<!-- Heading of Section - 3 -->
<div class="nav-padding">
    <!-- <h6 class="font-weight-bold pt-3 text-nb-orange "></h6> -->
    <h1 class="heading font-weight-bold text-center">About Us</h1><hr>
</div>
<div class="container-fluid nav-padding my-5 py-5">
<p class='h4 text-center'>
Algoqube is conceived to guide our partners in their digital journey. We are driven by group of passionate professionals with decades of experience in large corporates.

We have the passion to grow with our partners, to make them best in their business.
<br><br>
Algoqube is majorly into technology consulting, web and application development, recruitment and digital marketing.
</p>

</div>

</div>
<div class="container-fluid nav-padding my-5 py-5">

        <h1 class="heading font-weight-bold text-center" >What we do?</h1><hr><br>
        <div class="mentor-card row">
            <div class="col-sm-12 col-md-5 flex-column text-center">
            <img src="<?= base_url();?>assets/Personal 24.jpg" height="300px" width="400px" class="mx-auto img-fluid my-3 my-md-0" alt="mentor-photo-thumbnail" id="mentor_image">
            <!-- <h5 class="px-lg-3 mt-4 text-nb-blue font-weight-semibold d-none d-md-block"></h5> -->
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col order-first">
                    <h2 class="font-weight-semibold order-0" id="mentor_name"><br><br>Web and Software Development</h2><hr>
                    <!-- <h5 class="font-helvetica text-nb-muted" id="mentor_profession">Influencer and Personal Coach</h5> -->
                </div>
                <div class="order-last order-md-4 mt-4 mt-md-0 mr-0 mr-md-4">
                <a href="<?php echo base_url();?>index.php/welcome/Website_and_Software_Development" id="mentor_link" class="button-secondary px-3 py-3 py-md-2 align-middle text-decoration-none">
                <h6 class="font-weight-bold mb-0">View More</h6>
                <img src="https://nyabazar.com/assets/img/mentor-page/arrow-right.svg" class="pl-2" alt="arrow-btn">
                </a>
            </div>
                
                <p class="col-12 h5 order-2 order-md-3 font-weight-medium py-3" id="mentor_description">
                We provide web development service for any level of business or ideas. We are a team of skilled web designers & developers, who brings your imaginations to reality.            
                </p>
                
            </div> 
            
        </div> 

<br><hr><br>
        <div class="mentor-card row">
            
            <div class="col-sm-12 col-md-7">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col order-first">
                        <h2 class="font-weight-semibold order-0" id="mentor_name"><br><br>Recruitment and Staffing</h2><hr>
                        <!-- <h5 class="font-helvetica text-nb-muted" id="mentor_profession">Influencer and Personal Coach</h5> -->
                    </div>
                    <div class="order-last order-md-4 mt-4 mt-md-0 mr-0 mr-md-4">
                        <a href="<?php echo base_url();?>index.php/welcome/Recruitment_and_Staffing" id="mentor_link" class="button-secondary px-3 py-3 py-md-2 align-middle text-decoration-none">
                        <h6 class="font-weight-bold mb-0">View More</h6>
                        <img src="https://nyabazar.com/assets/img/mentor-page/arrow-right.svg" class="pl-2" alt="arrow-btn">
                        </a>
                    </div>
                    <p class="col-12 h5 order-2 order-md-3 font-weight-medium py-3" id="mentor_description">
                    Algoqube specializes in finding and recruiting top talent for a diverse range of disciplines and industries.</p>                    <div class="col-12 order-4 m-0 mt-4"> 
                        <div class="row m-0 p-0">
                            <!-- <h6 class="mentor-speciality-badge mentor-sepciality-main text-nowrap mr-2">Public speaking</h6> -->
                            
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="col-sm-12 col-md-5 flex-column text-center">
            <img src="<?= base_url();?>assets/Personal 25.jpg" class="mx-auto img-fluid my-3 my-md-0" alt="mentor-photo-thumbnail" id="mentor_image">
            <!-- <h5 class="px-lg-3 mt-4 text-nb-blue font-weight-semibold d-none d-md-block"></h5> -->
            </div>
        </div>

    
<br><hr><br>
        <div class="mentor-card row">
            <div class="col-sm-12 col-md-5 flex-column text-center">
            <img src="<?= base_url();?>assets/Personal 23.jpg" class="mx-auto img-fluid my-3 my-md-0" alt="mentor-photo-thumbnail" id="mentor_image">
            <!-- <h5 class="px-lg-3 mt-4 text-nb-blue font-weight-semibold d-none d-md-block"></h5> -->
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col order-first">
                    <h2 class="font-weight-semibold order-0" id="mentor_name"><br><br>Digital marketing</h2><hr>
                    <!-- <h5 class="font-helvetica text-nb-muted" id="mentor_profession">Influencer and Personal Coach</h5> -->
                </div>
                <div class="order-last order-md-4 mt-4 mt-md-0 mr-0 mr-md-4">
                    <a href="<?php echo base_url();?>index.php/welcome/Digital_Marketing" id="mentor_link" class="button-secondary px-3 py-3 py-md-2 align-middle text-decoration-none">
                    <h6 class="font-weight-bold mb-0">View More</h6>
                    <img src="https://nyabazar.com/assets/img/mentor-page/arrow-right.svg" class="pl-2" alt="arrow-btn">
                </a>
                </div>
                <p class="col-12 h5 order-2 order-md-3 font-weight-medium py-3" id="mentor_description">
                We bring together the expertise of Digital Marketing, Content Creation & Designing to 
empower brands with their digital presence through Social media marketing.
                </p>
                <div class="col-12 order-4 m-0 mt-4"> 
                        <div class="row m-0 p-0">
                            <!-- <h6 class="mentor-speciality-badge mentor-sepciality-main text-nowrap mr-2">Public speaking</h6> -->
                            
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>

    
<br><hr><br>
        <div class="mentor-card row">
            
            <div class="col-sm-12 col-md-7">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col order-first">
                        <h2 class="font-weight-semibold order-0" id="mentor_name"><br><br>SEO and Content</h2><hr>
                        <!-- <h5 class="font-helvetica text-nb-muted" id="mentor_profession">Influencer and Personal Coach</h5> -->
                    </div>
                    <div class="order-last order-md-4 mt-4 mt-md-0 mr-0 mr-md-4">
                        <a href="<?php echo base_url();?>index.php/welcome/SEO_and_Content_Writer" id="mentor_link" class="button-secondary px-3 py-3 py-md-2 align-middle text-decoration-none">
                        <h6 class="font-weight-bold mb-0">View More</h6>
                        <img src="https://nyabazar.com/assets/img/mentor-page/arrow-right.svg" class="pl-2" alt="arrow-btn">
                        </a>
                    </div>
                    <p class="col-12 h5 order-2 order-md-3 font-weight-medium py-3" id="mentor_description">
                    We have the capability to take your business ahead with quality content and SEO service.
                </p>                    
                <div class="col-12 order-4 m-0 mt-4"> 
                        <div class="row m-0 p-0">
                            <!-- <h6 class="mentor-speciality-badge mentor-sepciality-main text-nowrap mr-2">Public speaking</h6> -->
                            
                        </div> 
                    </div> 
                </div> 
            </div>
            <div class="col-sm-12 col-md-5 flex-column text-center">
            <img src="<?= base_url();?>assets/Personal 26.jpg" class="mx-auto img-fluid my-3 my-md-0" alt="mentor-photo-thumbnail" id="mentor_image">
            <!-- <h5 class="px-lg-3 mt-4 text-nb-blue font-weight-semibold d-none d-md-block"></h5> -->
            </div> 
        </div>
<hr>
        <!-- <div class="d-flex justify-content-center justify-content-md-end">
            <a class="sec-4-btn sec-3-btn text-white bg-nb-blue-2 text-center rounded-sm px-3 py-3 text-decoration-none " href="https://nyabazar.com/welcome/viewmentors">
                VIEW ALL MENTORS
                <img src="https://nyabazar.com/assets/img/mentor-page/arrow-right.svg" class="w-auto pl-2" alt="arrow-icon">
            </a>
        </div> -->

    



    </div><hr></div>


<!-- SECTION-2 -->




<!-- SECTION-3 -->



    <?php
    $this->load->view('footer');
    ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  
</body>
</html>