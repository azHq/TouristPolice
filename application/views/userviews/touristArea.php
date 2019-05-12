<!DOCTYPE html>
<html>
<head>
	<title>test</title>
   
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style2.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate-3.7.0.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome-4.7.0.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/fonts/flat-icon/flaticon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-4.1.3.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl-carousel.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/nice-select.css'?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url().'assets/css/mdb.min.css'?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    
</head>
<body>
	<?php

       echo $navbar;
    ?>

   
    <section  class="d-none d-sm-block m-4" >
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

	<section class="banner-area">
        <div class="container-fluid">
            <div class="row m-5" >

                <?php
                     foreach ($placeinfo as $row) {

                    ?>
                    <div class="col-lg-6 col-md-11 col-sm-11 col-11 px-0 mt-4 ml-sm-4 mt-md-5 ml-4 mr-4 mr-md-5 mr-sm-5 mt-lg-5 ml-lg-3 mr-lg-5"  >
                        <div class="card" style="border-radius:12px;">
                            <img height="400" src="<?php echo $row->path ?>" style="border-radius:12px;border-radius:12px 12px 0px 0px " >
                            <div style="background-color:#0277BD" onclick="showRatingForm(<?php echo $row->id ?>)">
                                <button class="btn1 btn-white">  

                                   
                                    <?php if($row->rating<=.5&&$row->rating>=0){?>

                                        <i class="fa fa-star-half-o fa-md" style="color:green"></i>

                                    <?php }else{ ?>
                                        <i class="fa fa-star fa-md" style="color:green"></i> 
                                    <?php
                                    }?>


                                   
                                   <?php if($row->rating<=1){?>

                                        <i class="far fa-star fa-sm" style="color:green"></i> 

                                    <?php }else if($row->rating<=1.5&&$row->rating>=1){ ?>
                                       <i class="fa fa-star-half-o fa-md" style="color:green"></i>
                                    <?php
                                    }else{?>

                                       <i class="fa fa-star fa-md" style="color:green"></i> 

                                   <?php }?>

                                   
                                   <?php if($row->rating<=2){?>

                                        <i class="far fa-star fa-sm" style="color:green"></i> 

                                    <?php }else if($row->rating<=2.5&&$row->rating>=2){ ?>
                                       <i class="fa fa-star-half-o fa-md" style="color:green"></i>
                                    <?php
                                    }else{?>

                                       <i class="fa fa-star fa-md" style="color:green"></i> 

                                   <?php }?>

                                   
                                   <?php if($row->rating<=3){?>

                                        <i class="far fa-star fa-sm" style="color:green"></i> 

                                    <?php }else if($row->rating<=3.5&&$row->rating>=3){ ?>
                                       <i class="fa fa-star-half-o fa-md" style="color:green"></i>
                                    <?php
                                    }else{?>

                                       <i class="fa fa-star fa-md" style="color:green"></i> 

                                   <?php }?>

                                  
                                   <?php if($row->rating<=4){?>

                                        <i class="far fa-star fa-sm" style="color:green"></i> 

                                    <?php }else if($row->rating<=4.5&&$row->rating>=4){ ?>
                                       <i class="fa fa-star-half-o fa-md" style="color:green"></i>
                                    <?php
                                    }else{?>

                                       <i class="fa fa-star fa-md" style="color:green"></i> 

                                   <?php }?>


                                   
                                </button>
                               
                                <button class="btn1" style="font-weight:700;">Book Service</button>
                                <button class="btn1" style="font-weight:700;">Map</button>
                                <button class="btn1" style="font-weight:700;">Road</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 position-sticky col-md-11 col-sm-11 col-11 mt-lg-5 mt-3"  >
                        <div class="banner-text mt-4 vh-25">
                            <h2><span><?php echo $row->name ?></span></h2>
                            <h4  class="py-3 w-100 d-inline"><?php echo $row->description ?></h4>
                            <h5 class="py-1">Location : <?php echo $row->location ?></h5>
                            <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                        </div>               
                    </div>
                <?php }?>
                
               
            </div>
        </div>
    
    </section>

     <div id="rating" class="m-auto" style="position:fixed;top:-300px;left:30%;transition:300ms">
        <div   class="w-100 m-auto card p-4">
            <div onclick="hideForm()" class="form-group d-flex justify-content-end" >
                <i class="fas fa-times"></i>
            </div>
            <div class="form-group">
                <label>Write Your Comment</label>
                <textarea id="comment" class="form-control"></textarea>
            </div>
             <div class="form-group">
                <label>Please Rate Us</label>
                <div class="form-control">
                        <i id="star1" onclick="star1()" class="far fa-star" style="color:green"></i>
                        <i id="star2" onclick="star2()" class="far fa-star" style="color:green"></i>
                        <i id="star3" onclick="star3()" class="far fa-star" style="color:green"></i>
                        <i id="star4" onclick="star4()" class="far fa-star" style="color:green"></i>
                        <i id="star5" onclick="star5()" class="far fa-star" style="color:green"></i>
                    
                </div>
            </div>
            <button onclick="submitRating()" class="btn btn-success">Submit</button>
            
        </div>     
    </div>

     <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        var count=0;
        var place_id=null;
        function showRatingForm(id){

            place_id=id;
            var top=document.getElementById('rating').style.top;
            
            if(top=="-300px"){

                document.getElementById('rating').style.top="200px";
            }
            else{

               document.getElementById('rating').style.top="-300px";
            }
            
        }
        function star1(){

           
            var className=document.getElementById('star1').className;

            if(className=="far fa-star"){

                count++;
                document.getElementById('star1').className="fas fa-star";
            }
            else{

                count--;
                document.getElementById('star1').className="far fa-star";
            }
            
        }
        function star2(){

            var className=document.getElementById('star2').className;

            if(className=="far fa-star"){

                count++;
                document.getElementById('star2').className="fas fa-star";
            }
            else{

                 count--;
                document.getElementById('star2').className="far fa-star";
            }
            
        }
        function star3(){

            var className=document.getElementById('star3').className;

            if(className=="far fa-star"){

                count++;
                document.getElementById('star3').className="fas fa-star";
            }
            else{

                 count--;
                document.getElementById('star3').className="far fa-star";
            }
            
        }
        function star4(){

            var className=document.getElementById('star4').className;

            if(className=="far fa-star"){

                count++;
                document.getElementById('star4').className="fas fa-star";
            }
            else{

                 count--;
                document.getElementById('star4').className="far fa-star";
            }
            
        }
        function star5(){

            var className=document.getElementById('star5').className;

            if(className=="far fa-star"){

                count++;
                document.getElementById('star5').className="fas fa-star";
            }
            else{

                 count--;
                document.getElementById('star5').className="far fa-star";
            }
            
        }
        $(document).on('click', 'body', function(){  
                   


              });
        function hideForm(){

            document.getElementById('rating').style.top="-300px";
        }

        function submitRating(){

            var comment=document.getElementById('comment').value;

            if(comment.length>=2){

                    $.ajax({  
                    url:"security_review",  
                    method:"POST",  
                    data:{comment:comment,rating:count,place_id:place_id},  
                    success:function(data)  
                    {  
                        document.getElementById('rating').style.top="-300px";
                    }  
                });  
               
            }

            
        }

    </script>
</body>
</html>