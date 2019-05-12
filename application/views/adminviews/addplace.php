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

    
    <?php if(isset($error)){ ?>
        <div class="mt-3 w-100">
            <div class="alert alert-info w-50 m-auto" style="text-align:center;"> <?php echo $error ?></div>
        </div>
        
    <?php } ?>

   

    <div class="container w-100 m-5 card" style="border-radius:10px">
    	<div class="row">
    		<div class="col-8" style="border-radius:10px">

				<img class="w-100" src="assets/images/place3.jpg" style="border-radius:10px;margin-left:-15px">
    			
    			<?php echo form_open_multipart(''); ?>

    			<input type="file" name="pic" required="text" class="btn btn-info w-100" style="margin-left:-12px;border-radius:10px">
    		</div>
    		<div class="col-4">
    			<form action="" method="POST" class="m-3">
    				<div>
    					<label style="display:block;color:green">Place Name*</label>
    					<input type="text" required="text" name="placename" class="w-100" style="border:1px solid blue;border-radius:6px;height:37px;margin-top:-4px;padding-left:6px">
    				</div>
    				<div class="mt-3">
    					<label style="display:block;color:green">Description*</label>
    					<textarea  required="text" type="text" name="description" class="w-100" style="border:1px solid blue;border-radius:8px;height:120px;margin-top:-4px;vertical-align:top;padding-left:6px;"></textarea>
    				</div>
    				<div class="mt-4">
    					<label style="display:block;color:green">Location*</label>
    					<select required="text" name="location" class="w-100" style="border:1px solid blue;border-radius:8px;height:37px;margin-top:-4px">
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

    				<button  name="submit"   class="w-100 btn btn-success mt-5" style="border-radius:10px;font-weight:bold
    				">SUBMIT</button>
    				
    			</form>
    		</div>
    	</div> 	
    </div>


	
	
	


    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
</body>
</html>