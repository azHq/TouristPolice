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
    	<?php echo $navbar; ?>


        <?php if($transport_list!=null){?>
            <div class="w-100 d-flex justify-content-center" style="margin-top:110px" > <h3>Transport Agencies</h3></div>
           <?php foreach($transport_list as $value){?>
          
           <div class="card container mt-4 mb-4" style="border-radius:12px;">
               <div class="row" style="box-sizing: border-box;">
                
                   <div class="col-2 ">
                      <img style="border-radius:10px 0px 0px 10px;margin-left:-20px" height="150" width="180" src="<?php echo $value->img_path ?>">
                   </div>
                   <div class="col-2 m-auto">
                       <p style="font-size:18px;color:black;font-weight:bold;"><?php echo $value->name ?></p>
                   </div>
                   <div class="col-2 m-auto">
                     <p style="font-size:18px;color:black;font-weight:bold;"><?php echo $value->location ?></p>
                   </div>
                   <div class="col-2 m-auto">
                     <p style="font-size:18px;color:black;font-weight:bold;"><?php echo $value->email ?></p>
                   </div>
                   <div class="col-2 m-auto">
                     <p style="font-size:18px;color:black;font-weight:bold;" ><?php echo $value->phone_number ?></p>
                   </div>
                            
               </div>    
            </div>
            <?php }
          }
          ?>
    
  
       


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