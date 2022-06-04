<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		
	<?php $this->load->view('web/include/keyword');?>	
        <?php $this->load->view('web/include/css');?>
    </head>
    <body>
        
        
        <!--Header Area Start-->
        <?php $this->load->view('web/include/header');?>
        <!--End of Header Area-->
        <!--Slider Area Start-->
        <div class="slider-area slider-style-1">
            <div class="preview-2">
                <div id="nivoslider" class="slides">	
                    <?php if(!empty($slider)){
                        $n = 1;
                        foreach ($slider as $key => $sval) { ?>
                    <img src="<?= img_url($sval['image'])?>" alt="<?=!empty($sval['alt_tag']) ? $sval['alt_tag'] : "";?>" title="#slider-1-caption<?=$n?>"/>
                    <?php $n++; } }?>
                </div> 
                <?php if(!empty($slider)){
                        $n = 1;
                        foreach ($slider as $key => $sval) { ?>
                <div id="slider-1-caption<?=$n?>" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="text-content">
                                        <p class="sub-title"><?=!empty($sval['heading']) ? $sval['heading'] : "";?></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                <?php $n++; } }?>
                  
            </div>
        </div>
        <!--End of Slider Area-->
        <!--Activity Area Start-->
        <div class="about-skill-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-skill-text">
                            <h2>Welcome to <?=company_name?></h2>
                            <?=!empty($about['description']) ? $about['description'] : ""?>  
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-image">
                            <img src="<?=!empty($about['image']) ? img_url($about['image']) : "";?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Activity Area-->
        <!--Class Area Start-->
        <div class="class-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Our Courses</h3>
                                <p></p>
                            </div>
                        </div> 
                    </div>       
                </div>
                <div class="class-carousel carousel-style-one owl-carousel">
                    <?php if(!empty($courses)){
                        foreach ($courses as $key => $cval) { ?>
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="<?= base_url($cval['slug']);?>">
                                <img src="<?= img_url($cval['image'])?>" alt="">
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="<?= base_url($cval['slug']);?>"><?=!empty($cval['heading']) ? $cval['heading'] : "";?></a></h4>
                                <p><?=!empty($cval['description']) ? strip_tags(substr($cval['description'], 0,100)) : "";?></p>
                            </div>
                            
                        </div>
                    </div>
                    <?php }}?>
                    
                    
                </div>  
            </div>
        </div>
        <!--End of Class Area-->
        <!--Register Area Start-->
        <div class="register-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="register-info text-center text-sm-start">
                            <h4>GET  OF ONLINE <span>ADMISSION OPEN  </span></h4>
                            <h1> (2022-2023) </h1>
                            <div class="timer">
                                <div data-countdown="2020/07/01" class="timer-grid"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="account-form">
                            <div class="register-title">
                                <i class="fa fa-lock"></i>
                                <h4>Admission Enquiry !</h4>
                                <div class="" id="info1"></div>
                            </div>
                            <form id="formData1" action="" method="post">
                                <input type="text" placeholder="Your Name *"id="name" maxlength="100" class="letters"  name="name">
                                <input type="email" placeholder="Email*" id="email" name="email">
                                <input type="text" placeholder="Phone *" id="mobile" maxlength="10" class="numbers" name="mobileNo">
                                <button type="submit" class="button-default">Enquire Now </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Register Area-->
        <!--Service Area Start-->
        <div class="service-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Our Facilities </h3>
                                <p>Our best services for your kids</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="single-service-item-wrapper">
                            <div class="single-service-item">
                                <div class="single-service-text">
                                    <h4>प्रयोगशालाएं </h4>
                                    <p></p>
                                </div>
                                <div class="single-service-icon">
                                    <i class="fa fa-flask"></i>
                                </div>
                            </div>
                            <div class="single-service-item">
                                <div class="single-service-text">
                                    <h4>पुस्तकालय </h4>
                                    <p></p>
                                </div>
                                <div class="single-service-icon">
                                    <i class="fa fa-book"></i>
                                </div>
                            </div>
                            <div class="single-service-item">
                                <div class="single-service-text">
                                    <h4>बहुउदेशीय कक्ष </h4>
                                    <p></p>
                                </div>
                                <div class="single-service-icon">
                                    <i class="fa fa-book-reader"></i>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-lg-4 col-md-4 col-12"> <div class="service-image">
                            <img src="<?=web_assest('')?>img/banner/2.png" alt="">
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="single-service-item-wrapper">
                            <div class="single-service-item">
                                <div class="single-service-icon">
                                    <i class="fa fa-calendar-check-o"></i>
                                </div>
                                <div class="single-service-text">
                                    <h4>खेलकूद </h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="single-service-item">
                                <div class="single-service-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="single-service-text">
                                    <h4>प्लेसमेंट सुबिधा </h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="single-service-item">
                                <div class="single-service-icon">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div class="single-service-text">
                                    <h4>कंप्यूटर लैब </h4>
                                    <p></p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--End of Service Area-->
        <!--Teachers Area Start-->
        <div class="class-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Our Faculty</h3>
                                <p></p>
                            </div>
                        </div> 
                    </div>       
                </div>
                <div class="class-carousel carousel-style-one owl-carousel">
                    <?php if(!empty($faculty)){
                        foreach ($faculty as $key => $fval) { ?>
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="<?= img_url($fval['image'])?>" alt="">
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#"><?=!empty($fval['heading']) ? $fval['heading'] : "";?></a></h4>
                                <p><?=!empty($fval['description']) ? strip_tags(substr($fval['description'], 0,100)) : "";?></p>
                            </div>
                            
                        </div>
                    </div>
                    <?php }} ?>
                    
                    
                </div>  
            </div>
        </div>
        <!--End of Teachers Area-->
        <!--Gallery Area Start-->
        <div class="gallery-area section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Our Gallery</h3>
                                <p></p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="gallery-row">
                    <div class="filter-items row">
                        <?php if(!empty($gallery)){
                        foreach ($gallery as $key => $gval) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items overlay-hover">
                            <div class="overlay-effect">
                                <a href="#"><img src="<?=!empty($gval['image']) ? img_url($gval['image']) : "";?>" alt="<?=!empty($gval['alt_tag']) ? $gval['alt_tag'] : "";?>"></a> 
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="<?=!empty($gval['image']) ? img_url($gval['image']) : "";?>"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text"><?=!empty($gval['heading']) ? $gval['heading'] : "";?></span>
                                </div>
                            </div>
                        </div>
                        <?php }} ?>
                                                                    
                    </div>  
                </div>
                
            </div>
        </div>
        <!--End of Gallery Area-->
        <!--Newsletter Area Start-->
        <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="formData" action="" class="newsletter-container">
                            <div class="row">
                                <div class="col-md-12" style="text-align: center;"><div id="info"></div></div>
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                  
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <input type="text" id="name" name="name" class="letters" maxlength="100" placeholder="Your Name*">
                                    <input type="email" id="email" name="email" placeholder="Your Email*">
                                    <input type="text" id="subject" name="subject" class="letters" maxlength="120" placeholder="Subject*">
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <textarea name="message" id="message" class="address" maxlength="255" placeholder="Your Message"></textarea>
                                    <button type="submit" class="button-default">Enquire Now </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Newsletter Area-->
        
        <!--Footer Area Start-->
        <?php $this->load->view('web/include/footer');?>
        <!--End of Footer Area-->
         <?php $this->load->view('web/include/js');?>
        
	<script>
            $(document).ready(function () {
              $('#formData').on('submit', function (e) {
                $("#btn").prop("disabled", true);
                e.preventDefault();
                var name    = $('#name').val();
                var message = $('#message').val();
                function getFormData(formData) {
                  var unindexed_array = $('#' + formData).serializeArray();
                  var formdata = {}
                  $.map(unindexed_array, function (n, l) {
                    formdata[n['name']] = n['value'];
                  })
                  return formdata;
                }

               

                if (name.length != 0 && message.length != 0) {
                  var formdata = getFormData('formData');
                   console.log(formdata); 
                  var request = {
                    'url': `<?= base_url('send-inq')?>`,
                    'method': 'POST',
                    'data': formdata
                  }

                  $.ajax(request).done((res) => {
                      console.log(res);
                      var dataObj = jQuery.parseJSON(res);
               if(dataObj.status == 'yes'){
                  
                      $('#name').val('');
                      $('#number').val('');
                      $('#message').val('');
                      $('#email').val('');
                      $("#btn").prop("disabled", false);
                      $('#info').html('<p style="color:green;font-style: italic;">' + dataObj.message + '</p>');
                      $("#info").show();
                      $("#info").delay(5000).fadeOut();
                    } else {
                      $("#btn").prop("disabled", false);
                      $('#info').html('<p style="color:red;font-style: italic;">' + dataObj.message + '</p>');
                      $("#info").show();
                      $("#info").delay(5000).fadeOut();
                    }
                  })
                }else {
                  $("#btn").prop("disabled", false);
                    $('#info').html('<p style="color:red;font-style: italic;">Please fill all required fields</p>');
                    $("#info").show();
                    $("#info").delay(5000).fadeOut();
                }
              });
            });
          </script>
          
          <script>
            $(document).ready(function () {
              $('#formData1').on('submit', function (e) {
                $("#btn").prop("disabled", true);
                e.preventDefault();
                var name    = $('#name').val();
                var mobile  = $('#mobile').val();
                function getFormData(formData) {
                  var unindexed_array = $('#' + formData).serializeArray();
                  var formdata = {}
                  $.map(unindexed_array, function (n, l) {
                    formdata[n['name']] = n['value'];
                  })
                  return formdata;
                }
                if (name.length != 0 && name.mobile != 0) {
                  var formdata = getFormData('formData');
                  var request = {
                    'url': `<?= base_url('send-inq')?>`,
                    'method': 'POST',
                    'data': formdata
                  }

                  $.ajax(request).done((res) => {
                      console.log(res);
                      var dataObj = jQuery.parseJSON(res);
               if(dataObj.status == 'yes'){
                      $('#name').val('');
                      $('#mobile').val('');
                      $('#email').val('');
                      $("#btn").prop("disabled", false);
                      $('#info1').html('<p style="color:#fff;font-style: italic;">' + dataObj.message + '</p>');
                      $("#info1").show();
                      $("#info1").delay(5000).fadeOut();
                    } else {
                      $("#btn").prop("disabled", false);
                      $('#info1').html('<p style="color:#fff;font-style: italic;">' + dataObj.message + '</p>');
                      $("#info1").show();
                      $("#info1").delay(5000).fadeOut();
                    }
                  })
                }else {
                  $("#btn").prop("disabled", false);
                    $('#info1').html('<p style="color:#fff;font-style: italic;">Please fill all required fields</p>');
                    $("#info1").show();
                    $("#info1").delay(5000).fadeOut();
                }
              });
            });
          </script>
    </body>

</html>