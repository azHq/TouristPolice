<!DOCTYPE html>
<html>
<head>
	<title>test</title>
   
    <link rel="stylesheet" href="assets/css/style2.css">

	<link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
	<?php

       echo $navbar;
    ?>

    <section  class="d-none d-sm-block" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-10" ></div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="mt-lg-5 mr-lg-3 card round position-fixed" style="border-radius:12px;height:500px;">
                    <p class="m-3 text-large" style="font-weight:bold;color:#222;
    text-transform: uppercase;
    font-weight: 700;">Find Your Places Here Which Place Do You Want To Book</p>
                    <form>
                      <div class="form-col m-4 mt-5" >
                      
                        <div class="row">
                                    
                                <select class="border-primary form-control">
                                    <option value="1" selected="true">Dhaka</option>
                                    <option value="2">Chittagong</option>
                                    <option value="3">Rajshahi</option>
                                    <option value="4">Barishal</option>
                                    <option value="5">Noakhali</option>
                               </select> 

                               
                            
                        </div>
                        
                        <div class="row mt-3">
                         
                          <input type="text" class="form-control" placeholder="Place Name" style="border:1px solid blue">
                        </div>

                        <div class="row mt-5">
                         
                          <button class="form-control" style="color:white;font-weight:bold; text-transform: uppercase;background-color:#4A148C;border:none;border-radius:10px;" type="text"  placeholder="Place Name" 
                          >FiND PLACE</button>
                        </div>
                       
                      </div>
                    </form>
                    
                </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <section class="m-5"></section>
	<section class="banner-area m-5">
        <div class="container-fluid">
            <div class="row">

                <?php
                    for($i=0;$i<10;$i++){

                    ?>
                    <div class="col-lg-6 col-md-11 col-sm-11 col-11 px-0 mt-4 ml-sm-4 mt-md-5 ml-4 mr-4 mr-md-5 mr-sm-5 mt-lg-5 ml-lg-5 mr-lg-5 ">
                        <div class="card">
                            <img src="assets/images/sajek.jpg" class="card">
                            <div>
                                <button class="btn1 btn-primary" style="font-weight:700;">Rate Us</button>
                                <button class="btn1" style="font-weight:700;">Book Service</button>
                                <button class="btn1 btn-primary" style="font-weight:700;">Map</button>
                                <button class="btn1" style="font-weight:700;">Road</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-11 col-sm-11 col-11 mt-lg-5 mt-3"  >
                        <div class="banner-text">
                            <h1>Safe your  <span>TOUR</span> with Tourist Police</h1>
                            <p class="py-3">Wherein herb beginning. Moved after gathering. Sea hi crate fowl man replenish place divided likeness herb one two lnetn Winged moving saw, may over.</p>
                            <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                        </div>               </div>
                <?php }?>
                
               
            </div>
        </div>
    </section>
     <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>