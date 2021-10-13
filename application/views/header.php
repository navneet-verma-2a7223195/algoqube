<div class="container-fluid p-0">

<nav class="navbar navbar-expand-lg navbar-light nav-padding fixed-top my-0">

    <a class="navbar-brand" href="<?php echo base_url();?>">
        <img src="<?php echo base_url('assets/images/Algoqube_logo.png');?>" height="50px" alt="algoquba_typeface">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

        <div class="mr-auto"></div>        <!-- For width b/w img and item -->

        <ul class="navbar-nav">
            <li class="nav-item " id="home_nav">
                <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            What We Offer
                        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url('index.php/welcome/Website_and_Software_Development');?>">Website and Software Development</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/welcome/Recruitment_and_Staffing');?>">Recruitment and Staffing</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/welcome/Digital_Marketing');?>">Digital Marketing</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/welcome/SEO_and_Content_Writer');?>">SEO and Content</a>
                </div>
                
            </li>
  
            <li class="nav-item" id="livesessions_nav">
                <a class="nav-link" href="<?php echo base_url('index.php/welcome/aboutus');?>">About Us</a>
            </li>
            <li class="nav-item" id="plans_nav">
                <a class="nav-link" href="<?php echo base_url('index.php/welcome/contactus');?>">Contact Us</a>
            </li>
            
        </ul>
    

        <div class="mr-auto"></div>

        

        
        

    </div>
</nav>
</div>
