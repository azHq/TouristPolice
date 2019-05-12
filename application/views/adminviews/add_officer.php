<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
    
</head>
<body>


    
    <nav class="navbar navbar-expand-sm z-depth-1"  >
	   <a href="index.html" class="navbar-brand" style="font-size:16px;font-weight:bold;color:#EF6C00"><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Bangladesh</span><img src="<?php echo base_url().'assets/images/logo.png'?>" alt="logo" height="55" width="55">Police</a>
    	<ul class="navbar-nav justify-content-end w-75">
            <li class="nav-item m-3">
              <a class="nav-link" href="manage_officers" style="color:#FFA000;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Officers</a>
            </li>
		    <li class="nav-item m-3">
		      <a class="nav-link" href="<?php echo base_url().'manageuser'?>" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage User</a>
		    </li> 
		    <li class="nav-item m-3">
		      <a class="nav-link" href="<?php echo base_url().'deploy'?>" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Deploy Duty</a>
		    </li>
		    <li class="nav-item m-3">
		      <a class="nav-link" href="<?php echo base_url().'touristplace'?>" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Tourist Place</a>
		    </li>
	  	</ul>
	  	<ul class="navbar-nav justify-content-end w-25">
	  		
		    <li class="nav-item m-2">
		      <a class="nav-link" href="#" style="color:black;font-weight:500px;font-size:14px;font-family:sans-serif;padding-right:6px">
		      	
				<i class="fa fa-user-circle-o" style="font-size:30px;color:green;display: block;"></i>
		      	Profile
		      </a>
		    </li>
	  	</ul>
    	
    </nav>

    
    <?php if($this->session->flashdata('error')){ ?>
        <div class="mt-3 w-100">
            <div class="alert alert-info w-50 m-auto" style="text-align:center;"> <?php echo $this->session->flashdata('error') ?></div>
        </div>
        
    <?php } ?>

   

    <div class="container w-50 m-auto" >
    	<div class="row m-5 card" style="border-radius:10px;padding:20px">
    		<form action="" method="POST" class="m-auto w-75">
                 <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="name" name="name" required="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rank">Rank*</label>
                    <select type="rank" name="rank" class="form-control" required="text">
                         <option selected="true">SI</option>
                         <option>ASI</option>
                         <option>Constable</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="location">Posted Location*</label>
                    <select  name="location" class="form-control">
                         <option selected="true">Dhaka</option>
                         <option>Chittagong</option>
                         <option>Barisal</option>
                         <option>Khulna </option>
                         <option>Mymensingh</option>
                         <option>Rajshahi</option>
                         <option>Rangpur</option>
                         <option>Sylhet</option>
                    </select>
                   
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" name="email" required="text" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="phn_number">Phone Number*</label>
                    <input type="text" name="number" required="text" class="form-control">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" name="submit" class="btn-md btn-primary" style="height:40px;border-radius:6px;width:120px">Submit</button>
            </form>
    	</div> 	
    </div>


	
	
	


    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
</body>
</html>