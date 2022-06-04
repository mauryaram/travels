<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Class Details || TechEdu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <?php $this->load->view('web/include/keyword');?>	
        <?php $this->load->view('web/include/css');?>
    </head>
    <body>
      
         <?php $this->load->view('web/include/header');?>
        <!--End of Header Area-->
        <!--Breadcrumb Banner Area Start-->
        <div class="breadcrumb-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center"><?=!empty($about['heading']) ? $about['heading'] : ""?></h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url()?>">Home</a></li>
                                    <li>Course Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb Banner Area-->
        <!--Class Details Area Start-->
        <div class="class-details-area section-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="class-details-container">
                            <h1><?=!empty($about['heading']) ? $about['heading'] : ""?></h1>
                            <div class="class-details-carousel carousel-style-one owl-carousel">
                                <img src="<?=!empty($about['image']) ? img_url($about['image']) : ""?>" alt="">
                            </div>
                        </div>
                        <div class="class-details-tab">
                            
                            <div class="clearfix"></div>
                            <div class="tab-content">
                                <div id="overview" class="tab-pane active" role="tabpanel">
                                <h3>COURSE OVERVIEW</h3>
                                    <div class="teacher-info-text">
                                        <?php if(!empty($about['affiliation'])){?>
                                <span><i class="fa fa-check-circle"></i> Affiliation :  <?=$about['affiliation']?></span>
                                        <?php } ?>
                                <?php if(!empty($about['subject'])){?>
                                <span><i class="fa fa-check-circle"></i> Subject :  <?=$about['subject']?></span>
                                        <?php } ?>
                                <?php if(!empty($about['seats'])){?>
                                <span><i class="fa fa-check-circle"></i> No Of Seats :  <?=$about['seats'];?></span>
                                        <?php } ?>
                                <?php if(!empty($about['duration'])){?>
                                <span><i class="fa fa-check-circle"></i> Course Duration <?=$about['duration']?></span>
                                        <?php } ?>
                               
                               
                            </div>
                                <h3>COURSE DESCRIPTION</h3>
                                     <?=!empty($about['description']) ? $about['description'] : ""?>  
                                     </div>
                            <h4>COURSE SYLLABUS</h4>
                                     <?=!empty($about['syllabus']) ? $about['syllabus'] : ""?>  
                                    
                                
                                
                            </div>        
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        
                        <div class="single-widget-item">
                            <div class="single-title">
                                <h3>Teachers</h3>
                            </div>
                            <div class="single-widget-container">
                                <?php if(!empty($faculty)){
                                        foreach ($faculty as $key => $fval) { ?>
                                <div class="teacher-info-widget">
                                    <div class="widget-image">
                                        <a href="#"><img src="<?= img_url($fval['image'])?>" alt=""></a>
                                    </div>
                                    <div class="widget-infos">
                                        <h4><a href="#"><?=!empty($fval['heading']) ? $fval['heading'] : "";?></a></h4>
                                        <p><?=!empty($fval['affiliation']) ? $fval['affiliation'] : "";?></p>
                                    </div>
                                </div>
                                 <?php }} ?>
                            </div>
                        </div>
                        <div class="single-widget-item">
                            <div class="single-title">
                                <h3>Register Classes</h3>
                            </div>
                            <div class="single-widget-container">
                                <form id="formData" action="" method="post">
                                    <input type="text" id="name" name="name" class="letters" maxlength="100" placeholder="Your Name">
                                    <input type="text" class="numbers" id="mobileNo" maxlength="10" name="mobileNo" placeholder="Your Contact No">
                                    <input type="email" id="email" name="email" placeholder="Your Email">
                                    <textarea name="message" id="message" class="address" placeholder="Message"></textarea>
                                    <button type="submit" class="button-default button-yellow">Send</button>
                                </form>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
        <!--End of Class Details Area-->
        <!--Class Area Start-->
        <div class="class-area section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-title">
                            <h3>Register Courses</h3>
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
       
        
        <?php $this->load->view('web/include/footer');?>
        <!--End of Footer Area-->
         <?php $this->load->view('web/include/js');?>
        <script>
            $(document).ready(function () {
              $('#formData').on('submit', function (e) {
                $("#btn").prop("disabled", true);
                e.preventDefault();
                var name    = $('#name').val();
                var mobileNo = $('#mobileNo').val();
                function getFormData(formData) {
                  var unindexed_array = $('#' + formData).serializeArray();
                  var formdata = {}
                  $.map(unindexed_array, function (n, l) {
                    formdata[n['name']] = n['value'];
                  })
                  return formdata;
                }
                if (name.length != 0 && mobileNo.length != 0) {
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
                      $('#mobileNo').val('');
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
    </body>

</html>