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

    <?php echo $navbar ?>
   
    <div class="w-100" style="margin-top:80px">
        <div class="alert alert-success m-auto text-center w-50 " id="result" style="display:none"> <?php  echo $this->session->flashdata('result') ?> </div>
    </div>

    <section style="margin-top:120px">
        <div class="container w-75 d-flex justify-content-end">
            <button  class="btn btn-primary" style="border-radius:10px;font-weight:bold;" onclick="showRatingForm()" href="">Write Question</button>
        </div>
        <?php 

            if($FAQ_list!=null){?>

            <div class="container w-75 m-auto card" style="border-radius:12px">
                 <div class="container m-3">

               
                  
                      <?php foreach ($FAQ_list as $value){?>


                           
                                <div class="w-50 mr-4 mt-4 ml-auto  d-flex justify-content-end" style="border-radius:12px">
                                    
                                    <div>
                                        <h6>Question</h6>
                                        <p class="bg-info p-3" style="border-radius:12px;color:white">
                                            <?php  echo $value->question ?>
                                        </p>
                                    </div>              
                                    <div class="mt-3">
                                        <img height="80" width="80" src="<?php echo base_url().'assets/images/profile.png'?>">
                                        <h5 class="ml-4"></h5>
                                    </div>
                               </div>
                      
                               <div class="w-50 ml-2 mt-2 d-flex justify-content-start" style="border-radius:12px;color:white">
                                   
                                     <div class="mt-3">
                                        <img height="80" width="80" src="<?php echo base_url().'assets/images/profile.png'?>">
                                        <h5 class="ml-2"></h5>
                                    </div>
                                    <div>
                                       <h6>Answer</h6>
                                        <p class="bg-success p-3" style="border-radius:12px;color:white">
                                          <?php if($value->answer==null){

                                                    echo 'pending....';
                                                 }
                                                 else{
                                                    echo $value->answer;
                                                } 
                                             ?>
                                        </p>
                                    </div>
                                     
                                   
                                </div>

                        <?php 
                    }
                }?>

                
            </div> 
        </div>       
    </section>

    <div id="rating" class="m-auto  w-50" style="position:fixed;top:-500px;left:30%;transition:300ms">
        <div  class="w-75 m-auto card p-4" style="border-radius:10px">
            <div onclick="hideForm()" class="form-group d-flex justify-content-end" >
                <i class="fas fa-times"></i>
            </div>
             <div class="form-group">
                <label style="font-family:serif;">Write Your Question</label>
               <textarea id="answer" class="form-control" required="text" rows="5" cols="50"></textarea>
            </div>
            <button onclick="submitRating()" class="btn btn-success" style="border-radius:10px">Submit</button>
            
        </div>     
    </div>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>

    <script type="text/javascript">

        var count=0;
        var place_id=null;
        function showRatingForm(){


            
            var top=document.getElementById('rating').style.top;
            if(top=="-500px"){

                document.getElementById('rating').style.top="200px";
            }
            else{

               document.getElementById('rating').style.top="-500px";
            }
            
        }
        
        function hideForm(){

            document.getElementById('rating').style.top="-500px";
        }

        function submitRating(){

            var question=document.getElementById('answer').value;
            
            if(question.length>=2){

                    $.ajax({  
                    url:"add_FAQ_question",  
                    method:"POST",  
                    data:{question:question},  
                    success:function(data)  
                    {  

                        document.getElementById("answer").value='';
                        document.getElementById('result').style.display="block";
                        document.getElementById('result').innerHTML = data; 
                        document.getElementById('rating').style.top="-500px";
                    }  
                });  
               
            }
            else{

                alert('fail to upload.please write your question.');
            }

            
        }

    </script>

<body>