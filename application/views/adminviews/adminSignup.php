<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
   
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
    <link rel="stylesheet" href="assets/css/style2.css">
    
</head>
<body>

    <nav class="navbar navbar-expand-sm z-depth-1"  >
       <a href="index.html" class="navbar-brand" style="font-size:16px;font-weight:bold;color:#EF6C00"><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Bangladesh</span><img src="<?php echo base_url().'assets/images/logo.png'?>" alt="logo" height="55" width="55">Police</a>
        <ul class="navbar-nav justify-content-end w-100">

            <li>
                <button id="sign_in" onclick="show_signin_form()" class="btn btn-success mr-2" style="border-radius:12px" href="">Sign In</button>
            </li>
            <li>
                <button id="sign_up" onclick="show_signup_form()" class="btn btn-info mr-5" style="border-radius:12px" href="">Sign Up</button>
            </li>

            
            <li class="nav-item m-2">
               <div>
                            <a href="index.html" style="font-size:16px;font-weight:bold;color:#EF6C00" ><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Tourist</span><img src="assets/images/icon.png" alt="logo" height="55" width="55">Police</a>
                </div>
            </li>
        </ul>
        
    </nav>

    <?php if($this->session->flashdata('result')){ ?>
            <div class="w-100 m-3">
                <div class="alert alert-danger m-auto text-center w-50 "> <?php  echo $this->session->flashdata('result') ?> </div>
            </div>
    <?php } ?>

    <section id="signin_form" class="m-5 w-75" style="position:fixed;left:-1000px;transition:400ms">
        <form action="admin_signin" method="POST">
            <div class="container w-50 card p-5">

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" required="text" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" required="text" name="password" class="form-control" id="pwd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" name="submit" style="border-radius:10px" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
    </section>
    
    <section id="signup_form" class="w-100" style="margin-top:30px;position:relative;transition:400ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xl-6 m-auto">
                    <form action="" id="form" method="POST" class="card" style="border-radius:10px;background-image:url('assets/images/elements/formback.jpg');">

                        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

                        <div class="w-75 m-auto">
                            <div style="margin:20px;">
                                <label style="display: block; color: black;font-family:serif;">User Name*</label>
                                <input type="text" name="username" required="text" style="border-radius:6px;border-width: 1px;border-color:white;border:none;height:36px;width:75%;background-color:rgba(250,250,250,.7);padding-left:6px;margin-top:-5px">
                            </div>
                            <div style="margin:20px;">
                                <label style="display: block; color: black;font-family:serif;">Email*</label>
                                <input type="email" name="email" required="text" style="border-radius:6px;border-width: 1px;border-color:white;border:none;height:36px;width:75%;background-color:rgba(250,250,250,.7);padding-left:6px;margin-top:-5px">
                            </div>
                            <div style="margin:20px;">
                                <label style="display: block; color: black;font-family:serif;">Password*</label>
                                <input type="password" name="password" required="text" style="border-radius:6px;border-width: 1px;border-color:white;border:none;height:36px;width:75%;background-color:rgba(250,250,250,.7);padding-left:6px;margin-top:-5px">
                            </div> 
                            <div style="margin:20px;">
                                <label style="display: block; color: black;font-family:serif;">Phone Number*</label>
                               <input type="phone" name="phone" required="text" style="border-radius:6px;border-width: 1px;border-color:white;border:none;height:36px;width:75%;background-color:rgba(250,250,250,.7);padding-left:6px;margin-top:-5px">
                            </div> 

                            <div style="margin:20px;">
                                <label style="display: block; color: black;font-family:serif;">Type*</label>
                                <select name="type"  style="border-radius:6px;border-width: 1px;border-color:white;border:none;height:36px;width:75%;background-color:rgba(250,250,250,.7);padding-left:6px;margin-top:-5px">
                                    <option selected="true">General Admin</option>
                                    <option>Super Admin</option>
                                </select>
                            </div> 
                            <div style="margin:40px;">
                                <button type="submit" name="submit" style="border-radius:12px;background-color:rgba(255,255,255,.5);border-color:white;border-width:1px;width:50%;color:black;height:36px;font-family:sans-serif;margin-left:40px;" onmouseover="this.style.background='blue';this.style.color='white';" onmouseout="this.style.background='rgba(255,255,255,.3)';this.style.color='black'">Submit</button>
                            </div>
                        </div>
                       
                    </form>
                    
                </div>    
            </div>  
        </div>
    </section>

    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function show_signin_form(){

            

            var signin_left=document.getElementById('signin_form').style.left;
           

            if(signin_left=="-1000px"){
                document.getElementById('signin_form').style.left="200px";
                document.getElementById('signup_form').style.left="-2000px";
            }
            else{

                document.getElementById('signin_form').style.left="-1000px";
                 document.getElementById('signup_form').style.left="0px";
            }
           

        }
        function show_signup_form(){

             var signup_left=document.getElementById('signup_form').style.left;
        
            if(signup_left=="0px"){
                document.getElementById('signin_form').style.left="200px";
                document.getElementById('signup_form').style.left="-2000px";
            }
            else{

                 document.getElementById('signin_form').style.left="-1000px";
                document.getElementById('signup_form').style.left="0px";
            }
            
        }
    </script>
</body>
</html>