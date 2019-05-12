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
<body style="background-image:url('assets/images/usersignupback3.png');">

    <?php

       echo $navbar;
    ?>

    <section class="w-100" style="margin-top:130px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xl-6 m-auto">
                    <form action="" id="form" method="POST" class="card" style="border-radius:10px;background-image:url('assets/images/usersignupback.png');">

                        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

                        <div class="w-75 m-auto">
                            <div style="margin:20px;">
                                <label style="display: block; color: black;font-family:serif;">User Name*</label>
                                <input type="text" autocomplete="off" name="name" required="text" style="border-radius:6px;border-width: 1px;border-color:white;border:none;height:36px;width:75%;background-color:rgba(250,250,250,.7);padding-left:6px;margin-top:-5px">
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
                            <div style="margin:40px;">
                                <button type="submit" name="submit" style="border-radius:12px;background-color:rgba(255,255,255,.5);border-color:white;border-width:1px;width:50%;color:black;height:36px;font-family:serif;margin-left:40px;font-weight:bold;" onmouseover="this.style.background='blue';this.style.color='white';" onmouseout="this.style.background='rgba(255,255,255,.3)';this.style.color='black'">Submit</button>
                            </div>
                        </div>
                       
                    </form>
                    
                </div>    
            </div>  
        </div>
    </section>

     <div id="login" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="form" role="form" autocomplete="off" action="user_login" id="formLogin"  method="POST">
                        <div class="form-group">
                            <a href="" class="float-right">New user?</a>
                            <label for="uname1">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="uname1" required="">
                            <div class="invalid-feedback">Oops, you missed this one.</div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" id="pwd1" required="" autocomplete="new-password">
                            <div class="invalid-feedback">Enter your password too!</div>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="rememberMe">
                          <label class="custom-control-label" for="rememberMe">Remember me on this computer</label>
                        </div>
                        <div class="form-group py-4">
                            <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" name="submit">Login</button>
                        </div>

                    </form>
                </div>
            </div>
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
</body>
</html>