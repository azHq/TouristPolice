<!DOCTYPE html>
<html>
<head>
	<title>test</title>
   
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body >


    <nav class="navbar navbar-expand-sm z-depth-1"  >
	   <a href="index.html" class="navbar-brand" style="font-size:16px;font-weight:bold;color:#EF6C00"><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Bangladesh</span><img src="assets/images/logo.png" alt="logo" height="55" width="55">Police</a>
    	<ul class="navbar-nav justify-content-end w-75">
            <li class="nav-item m-3">
              <a class="nav-link" href="manage_officers" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Officers</a>
            </li>
		    <li class="nav-item m-3">
		      <a class="nav-link" href="manageuser" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage User</a>
		    </li> 
		    <li class="nav-item m-3">
		      <a class="nav-link" href="deploy" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Deploy Duty</a>
		    </li>
		    <li class="nav-item m-3">
		      <a class="nav-link" href="touristplace" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Tourist Place</a>
		    </li>
           
            <div class="my-auto dropdown">

                <button type="button" class="my-auto dropdown-toggle" style="border-radius:10px;height:40px;width:120px; color:#3F51B5;border:1.5px solid #0288D1;background-color:white;font-weight:bold;" data-toggle="dropdown">
                     Others
                    </button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="transport_management">Transport</a>
                        <a class="dropdown-item" href="view_blog_admin">Blog</a>
                        <a class="dropdown-item" href="view_FAQ">FAQ</a>
                    </div>
            </div>
            


             
	  	</ul>
	  	<ul class="navbar-nav justify-content-end w-25">
	  		<li class="nav-item m-3">
              <a class="btn-success btn-lg" href="admin_logout" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;color:white">Logout</a>
            </li>
		    <li class="nav-item my-auto">
		      <a class="nav-link" href="#" style="color:black;font-weight:500px;font-size:14px;font-family:sans-serif;padding-right:6px">
		      	
				<i class="fa fa-user-circle-o" style="font-size:30px;color:green;display: block;"></i>
		      	Profile
		      </a>
		    </li>
	  	</ul>
    	
    </nav>

    <div class="w-100 justify-content-center vh-100" style="background-image:url('assets/images/adminback2.jpg');background-repeat:no-repeat;background-size: cover;background-position: center;padding:100px">

        <div>
            <h1 style="text-align:center;color:gray;font-size:30px;color:rgba(255,255,255,.6);">Admin panel</h1>
            <br>
            <h3 class="w-100" style="text-align:center;color:rgba(255,255,255,.8);">
                This is a Tourist Service Website
            </h3>
        </div>
    	
    </div>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
</body>
</html>