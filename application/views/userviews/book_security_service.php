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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
   

    
</head>
<body >

   
    <div class="w-100 vh-100" style="position: fixed;z-index:-1;background-image:url('<?php echo base_url().'assets/images/sajek2.jpg' ?>');background-repeat:no-repeat;background-size:cover;opacity:.95;background-position:center center;">
         
    </div>

   <?php echo $navbar ?>
    
  
   <?php if($this->session->flashdata('error')){ ?>
        <div class="mt-3 w-100">
            <div class="alert alert-info w-50 m-auto" style="text-align:center;"> <?php echo $this->session->flashdata('error') ?></div>
        </div>
        
    <?php } ?>

    <section class="m-auto vh-100" style="max-width:600px;min-width:300px;">
        <form action="" onsubmit=" return form_Validation_Check()" method="POST" class="w-75 m-5" style="background-color:rgba(4,6,124,.4);border-radius:12px;padding:20px;">
            <div class="w-75 m-auto" style="height:540px">
                <div class="mt-1">
                    <label style="color:rgba(250,250,250,.9);font-family:serif;font-size:18px">Select Location*</label>
                    <select onclick ="search_officers_by_location();search_places_by_location()" name="location" id="area" type="text" class="w-100" style="height:40px;border-radius:6px;border:1px solid rgba(233,233,233,.5);background-color:rgba(244,244,244,.5);margin-top:-4px;padding-left:6px;font-weight:bold;">
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

                <div class="mt-4">
                     <label style="color:rgba(250,250,250,.9);font-family:serif;font-size:17px">Choose Place*</label>
                    <select name="palce_id" id="placename" autocomplete="off" required="true" class="w-100" style="height:40px;border-radius:6px;border:1px solid rgba(233,233,233,.5);background-color:rgba(244,244,244,.4);margin-top:-4px;padding-left:6px">

                       
                        <?php foreach ($places_info as $value) {?>
                           <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                        <?php } ?>
                         
                    </select>
                </div>
                 <div class="mt-4">
                    <label style="color:rgba(250,250,250,.9);font-family:serif;font-size:17px">Select a Police Officers*</label>
                    <select name="officer_id" id="officersList"  type="text" class="w-100" style="height:40px;border-radius:6px;border:1px solid rgba(233,233,233,.5);background-color:rgba(244,244,244,.4);margin-top:-4px;padding-left:6px;font-weight:bold;">

                       
                        <?php foreach ($officers_info as $value) {?>
                           <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                        <?php } ?>
                         
                    </select>
                </div>
                
                <div class="mt-5">
                
                    <div >
                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                   
                            <input type="text" type="date" name="start_date" required="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="Start Date" style="height:40px;border-radius:6px 0px 0px 6px;border:1px solid rgba(233,233,233,.5);background-color:rgba(244,244,244,.5);color:rgba(0,0,0,.8);font-weight:bold;color:black;"/>
                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker" style="height:40px;border-radius:0px 6px 6px 0px;border:1px solid rgba(233,233,233,.1);background-color:rgba(244,244,244,.5);">
                                <div class="input-group-text" style="border-radius:0px 6px 6px 0px;border:1px solid rgba(233,233,233,.1);background-color:rgba(244,244,244,.3);"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="mt-5">
                    
                    <div >
                        <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                   
                            <input type="text" type="date" name="end_date" required="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" placeholder="End Date" style="height:40px;border-radius:6px 0px 0px 6px;border:1px solid rgba(233,233,233,.5);background-color:rgba(244,244,244,.5);color:rgba(0,0,0,.8);font-weight:bold;color:black"/>
                            <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker" style="height:40px;border-radius:0px 6px 6px 0px;border:1px solid rgba(233,233,233,.1);background-color:rgba(244,244,244,.5);color:black">
                                <div class="input-group-text" style="border-radius:0px 6px 6px 0px;border:1px solid rgba(233,233,233,.1);background-color:rgba(244,244,244,.3);"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="mt-5">
                    <div class="row">
                        <button id="confirm-btn" type="submit" onclick="checkValidation()" name="submit" class="btn z-depth-1 m-auto w-50" style="border:1px solid white;color:black;font-size:14px;font-weight:bold;z-index:10" >Confirm</button>
                    </div>
                </div>
                
            </div>
            
        </form>  
    </section>
  
       
  
    

   

   
	
	
	


    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    format: 'YYYY/MM/DD'

                });
            });
            $(function () {
                $('#datetimepicker2').datetimepicker({
                     format: 'YYYY/MM/DD'
                });
            });
            /*$(document).ready(function(){  
                $('#placename').keyup(function(){  
                   var query = $(this).val();
                   var location=$('#area').val();

                   if(query != '')  
                   {  
                        $.ajax({  
                             url:"placesearch",  
                             method:"POST",  
                             data:{query:query,location:location},  
                             success:function(data)  
                             {  
                                  $('#placelist').fadeIn();  
                                  $('#placelist').html(data);  
                             }  
                        });  
                   } 
              });  
              
              $(document).on('click', 'li', function(){  
                   $('#placename').val($(this).text());  
                   $('#placelist').fadeOut();

                   console.log('area Id:'+$(this).attr('id'));
                   $('#area_id').val($(this).prop('id'));

              });
              $(document).on('click','body',function(){

                 $('#placelist').fadeOut();
              });
        });  */

        function search_officers_by_location(){

            var location = $('#area').val();
           if(location != '')  
            {  
                $.ajax({  
                    url:"search_officers",  
                    method:"POST",  
                    data:{location:location},  
                    success:function(data)  
                    {  
                        $('#officersList').fadeIn();  
                        $('#officersList').html(data);  
                    }  
                });  
            } 
        }

        function search_places_by_location(){

           
            var location = $('#area').val();
           if(location != '')  
            {  

                $.ajax({  
                    
                    url:"search_places",  
                    method:"POST",  
                    data:{location:location},  
                    success:function(data)  
                    {  
                        $('#placename').fadeIn();  
                        $('#placename').html(data);  
                    }  
                });  
            } 
        }

        function form_Validation_Check(){

            
            var place_name = $('#placename').val();
            var officer_name = $('#officersList').val();

            if(place_name==="no place to suggest"){

                alert("Fail to Booked Service.please select a place");
               return false;
            }
            else if(officer_name==="no place to suggest"){

                alert("Fail to Booked Service.please select a officer");

                return false;
            }
            else{

                return true;
            }


        }

       

           
    </script> 
    
    <script type="text/javascript" src="<?php echo base_url().'assets/js/vendor/jquery-ui.min.js'?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

</body>
</html>