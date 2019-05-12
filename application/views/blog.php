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

    <?php echo $navbar  ?>

    <section style="margin-top: 120px">
        <div class="container w-75 d-flex justify-content-end">
            <button  class="btn btn-primary" style="border-radius:10px;font-weight:bold;" onclick="showRatingForm()" href="">Write Blog</button>
        </div>
        <div class="container w-75 m-auto card" style="border-radius:12px">
            <div class="container m-3">
                <div class="w-50 mr-4 mt-4 ml-auto d-flex justify-content-end" style="border-radius:12px">
                    <p class="bg-info p-3" style="border-radius:12px">jsjsjjsssks
                        kjksjsjsjjsjsjsj
                        sssssssssssssssssssssssjsksskskskkskskss
                    sssssssjjssjjs</p>
               </div>
               <div class="w-50 ml-2 mt-2 d-flex justify-content-start" style="border-radius:12px">
                    <p class="bg-info p-3 " style="border-radius:12px">jsjsjsjjskkkkkkkkkkkksksjsj
                        sksjsjjs4
                        kkkkkkkkkkk
                    kkkkkkkkkkssjjs</p>
                </div>
            </div> 
        </div>       
    </section>

    <div id="rating" class="m-auto  w-50" style="position:fixed;top:-400px;left:30%;transition:300ms">
        <div  class="w-75 m-auto card p-4">
            <div onclick="hideForm()" class="form-group d-flex justify-content-end" >
                <i class="fas fa-times"></i>
            </div>
            <div class="form-group">
                <label style="font-family:serif;">Title</label>
                <textarea id="title" class="form-control" required="text" rows="1" cols="50"></textarea>
            </div>
             <div class="form-group">
                <label style="font-family:serif;">Write Your Blog</label>
               <textarea id="body" class="form-control" required="text" rows="5" cols="50"></textarea>
            </div>
            <button onclick="submitRating()" class="btn btn-success">Submit</button>
            
        </div>     
    </div>



    <script src="<?php echo base_url().'assets/js/vendor/bootstrap-4.1.3.min.js' ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>

    <script type="text/javascript">

        var count=0;
        var place_id=null;
        function showRatingForm(){


            
            var top=document.getElementById('rating').style.top;
            if(top=="-400px"){

                document.getElementById('rating').style.top="200px";
            }
            else{

               document.getElementById('rating').style.top="-400px";
            }
            
        }
        
        function hideForm(){

            document.getElementById('rating').style.top="-400px";
        }

        function submitRating(){

            var title=document.getElementById('title').value;
            var body=document.getElementById('body').value;

           

            if(title.length>=2&&body.length>=2){

                    $.ajax({  
                    url:"add_blog_user",  
                    method:"POST",  
                    data:{title:title,body:body},  
                    success:function(data)  
                    {  
                        
                        document.getElementById('rating').style.top="-400px";
                    }  
                });  
               
            }
            else{

                alert('fail to upload.please write blog with body and title.');
            }

            
        }

    </script>

<body>