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
              <a class="nav-link" href="manage_officers" style="color:#FFA000;font-weight:500px;font-size:16px;font-family:sans-serif;">Manage Officers</a>
        </li>
		    <li class="nav-item m-3">
		      <a class="nav-link" href="manageuser" style="color:green;font-weight:500px;font-size:16px;font-family:sans-serif;">Manage User</a>
		    </li> 
		    <li class="nav-item m-3">
		      <a class="nav-link" href="deploy" style="color:green;font-weight:500px;font-size:16px;font-family:sans-serif;">Deploy Duty</a>
		    </li>
		    <li class="nav-item m-3">
		      <a class="nav-link" href="touristplace" style="color:green;font-weight:500px;font-size:16px;font-family:sans-serif;">Manage Tourist Place</a>
		    </li>
		    <li class="nav-item ml-3">
            <a class="btn btn-primary" href="add_officer" style="color:green;font-weight:bold;font-size:12px;font-family:sans-serif;text-align: center;color:white;border-radius:12px">Add Officer</a>
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


    <?php if($this->session->flashdata('successs')){ ?>

        <div class="w-100 m-5">
            <div class="alert alert-success m-auto w-50 "> <?php  echo $this->session->flashdata('successs') ?> </div>
        </div>

    <?php } ?>

    <?php

        foreach ($userdata as $row) { ?>
            

            <div class="w-100 card container mt-5" style="border-radius:12px;">
               <div class="row m-3">
                   <div class="col-2">
                       <img class="w-100" style="height:130px" src="<?php echo base_url().'assets/images/profile.png'?>">
                   </div>
                   <div class="col-1">
                       
                   </div>
                   <div class="col-6" style="padding-left:20px">
                       <h3 id="name"><?php echo $row->name ?></h3>
                       <h4><?php echo $row->rank ?></h4>
                       <h4><?php echo $row->email ?></h4>
                       <h4><?php echo $row->phone ?></h4>
                   </div>
                   <div class="col-3">
                       <a href="" class="btn btn-info delete_user" id="<?php echo $row->id ?>" >Edit</a>
                       <a href="<?php echo 'Manage_Officers_CI/delete_officer/'.$row->id ?>" class="btn btn-danger">Delete</a>
                   </div>
               </div>    
            </div>
    
    <?php } ?>
       


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script>  
     /* $(document).ready(function(){  
           $('.delete_user').click(function(){  
                var id = $(this).attr("id");  
               
                     window.location.href="<?php echo base_url(); ?>admin/delete/"+id;
                     console.log(id ); 


           });  
      }); */ 
      </script>  
</body>
</html>