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
    
    
</head>
<body >

    <header>
        <nav class="navbar navbar-expand-sm w-100 z-depth-1"  >
       <a href="index.html" class="navbar-brand" style="font-size:16px;font-weight:bold;color:#EF6C00"><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Bangladesh</span><img src="<?php echo base_url().'assets/images/logo.png'?>" alt="logo" height="55" width="55">Police</a>
        <ul class="navbar-nav justify-content-end w-75">
             <li class="nav-item m-3">
              <a class="nav-link" href="manage_officers" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Officers</a>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="manageuser" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage User</a>
            </li> 
            <li class="nav-item m-3">
              <a class="nav-link" href="deploy" style="color:#FFA000;font-weight:500px;font-size:18px;font-family:sans-serif;">Deploy Duty</a>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="touristplace" style="color:green;font-weight:500px;font-size:18px;font-family:sans-serif;">Manage Tourist Place</a>
           </li>
        
        </ul>
        <ul class="navbar-nav ml-5">
            </li class="nav-item m-3">
                <a href="newdeploy"> <button class="btn-md my-auto"  style="background-color:#6A1B9A ; width:120px;height:39px;color: white;outline:none;border: none;border-radius:8px;font-size:14px">DEPLOY</button></a>
               
            <li>
        </ul>
        <ul class="navbar-nav justify-content-end w-25">
            
            <li class="nav-item m-2">
              <a class="nav-link" href="" style="color:black;font-weight:500px;font-size:14px;font-family:sans-serif;padding-right:6px">
                
                <i class="fa fa-user-circle-o" style="font-size:30px;color:green;display: block;"></i>
                Profile
              </a>
            </li>
        </ul>
        
    </nav>

    </header>
    
    
    <?php if(isset($error)){ ?>
        <div class="mt-3 w-100">
            <div class="alert alert-info w-50 m-auto" style="text-align:center;"> <?php echo $error ?>
            </div>
        </div>
        
    <?php } ?>

 
    

    <section class="container mt-4">
        <table class="table table-borderless">
            <!--<tr class="z-depth-1" style="border-radius:8px;">
                <th style="text-align:center;font-size:19px;font-family:sans-serif; font-weight:bold;color:#1E88E5" class="align-middle">Profile</th>
                <th style="text-align:center;font-size:19px;font-family:sans-serif; font-weight:bold;color:#1E88E5" class="align-middle">District</th>
                <th style="text-align:center;font-size:19px;font-family:sans-serif; font-weight:bold;color:#1E88E5" class="align-middle">Area Name</th>
                <th style="text-align:center;font-size:19px;font-family:sans-serif; font-weight:bold;color:#1E88E5" class="align-middle">Route Name</th>
                <th style="text-align:center;font-size:19px;font-family:sans-serif; font-weight:bold;color:#1E88E5" class="align-middle">Police Officers</th>
                <th style="text-align:center;font-size:19px;font-family:sans-serif; font-weight:bold;color:#1E88E5" class="align-middle">Mobile</th>
                

            </tr>-->
            <tr>
                <td></td>
            </tr>
            <?php foreach($deployinfo as $row){ ?>
            <tr class="z-depth-1" style="border-radius:12px;padding-top: :20px">
                <td style="text-align:center;" class="align-middle"><img height="100" width="100" src="<?php echo base_url().'assets/images/profile3.png'?>"></td>
                <td style="text-align:center;" class="align-middle"><?php echo $row->district ?></td>
                <td style="text-align:center;" class="align-middle"><?php echo $row->area_name ?></td>
                <td style="text-align:center;" class="align-middle"><?php echo $row->route_name ?></td>
                <td style="text-align:center;" class="align-middle"><?php echo $row->officer_name ?></td>
                <td style="text-align:center;" class="align-middle"><?php echo $row->phone_number ?></td>

                <td>
                    
                </td>
                 <td style="width:120px" class="align-middle">
                    <a href="<?php echo 'admin/edit_deploy/'.$row->id ?>">
                         <button class="btn-md btn-success" style="height:37px;width:120px;outline:none;border-radius:8px;border:none">EDIT</button>
                    </a>
                    
                    <a href="<?php echo 'admin/delete_deploy/'.$row->id ?>">
                        <button class="btn-md btn-danger mt-2" style="height:37px;width:120px;outline:none;border-radius:8px;border:none">DELETE</button>
                    </a>
                    
                </td>
            </tr>
                
            <tr>
                <td></td>
            </tr>
        <?php }?>
        </table>
    </section>
    
    

	
	
	


    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
</body>
</html>