

     <header class="header-area main-header bg-white fixed-top z-depth-1">
        <div class="container col-lg-12">
            <div class="row">
                <div class="col-lg-2" >
                    <div class="logo-area my-lg-2">
                        <a href="home" style="font-size:16px;font-weight:bold;color:#EF6C00"><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Bangladesh</span><img src="assets/images/logo.png" alt="logo" height="55" width="55">Police</a>
                    </div>
                </div>
                
                <div class="col-lg-8">
                
                        
                   
                    <div class="main-menu d-flex align-items-center justify-content-end my-lg-2">
                        <ul class="menu" >
                            <li class="active"><a href="home">Home</a></li>
                            <li><a href="security_service" id="textstyle">Book</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="transport_book">Transports</a></li>
                                    <li><a href="security_service">Security Services</a></li>
                                </ul>
                            </li>
                            <li><a href="view_blog_user" id="textstyle">Blog</a></li>
                            <li><a href="contact-us.html" id="textstyle">Tourist Areas</a>
                                <ul class="sub-menu">
                                    <li><a href="touristArea">Visit Area</a></li>
                                    <li><a href="write_FAQ">FAQ</a></li>
                                    <li><a href="elements.html">Offers</a></li>
                                </ul>
                            </li>
                            <li><a href="#" id="textstyle">Contacts</a>
                            </li>

                            <li class="menu-btn ">

                                <?php if($this->session->userdata('user_state')=="logged_in"){ ?>
                                <a href="user_logout" class="template-btn">Log out</a>
                            <?php } else { ?>
                                <a href="#login" role="button"  data-toggle="modal">Login</a>
                                
                                <a href="usersignup" class="template-btn">sign up</a>
                                <?php } ?>
                            </li> 
                                               
                        </ul>

                        <div class="mt-1">
                            <div class="custom-navbar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>  
                        </div>
                
                        
                    </div>
                    
                </div>
                <div class="col-lg-2">
                    <div class="logo-area my-lg-2 d-none d-lg-block my-lg-2">
                        <div class="d-flex justify-content-end">
                            <a href="index.html" style="font-size:16px;font-weight:bold;color:#EF6C00" ><span style="font-size:16px;font-weight:bold;color:#6A1B9A">Tourist</span><img src="assets/images/icon.png" alt="logo" height="55" width="55">Police</a>
                        </div>
                        
                    </div>
                </div>
                 
            </div>
        </div>
    </header>
 
 

