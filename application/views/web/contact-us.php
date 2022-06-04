<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('web/include/keyword');?>	
        <?php $this->load->view('web/include/css');?>
    </head>
    <body>
        
        <!--Header Area Start-->
        <?php $this->load->view('web/include/header');?>
        <!--End of Header Area-->
        <!--Google Map Area Start -->
        <div class="breadcrumb-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center">Contact Us</h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url()?>">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Google Map Area-->
        <!--Contact Area Strat-->
        <div class="contact-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-area-container">
                            <div class="single-title">
                                <h3>Contact Info</h3>
                            </div>
                            <p>. </p>
                            <div class="contact-address-container">
                                <div class="contact-address-info">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h4>Address</h4>
                                        <span><?=headoffice_address?></span>
                                    </div>
                                </div>
                                <div class="contact-address-info">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h4>Phone</h4>
                                        <span>+91-<?=phoneno?></span>
                                         <br><span><i class="fa fa-phone"></i>+91-8004641286 </span>
                                         <br><span><i class="fa fa-phone"></i>+91-7408106605 (Manager) </span>
                                         
                                    </div>
                                </div>
                                <div class="contact-address-info">
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h4>Email</h4>
                                        <span><?=emailid?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <div class="single-title">
                                <h3>Send A Message</h3>
                                <div id="info"></div>
                            </div>
                            <div class="contact-form-container">
                                <form id="formData" action="" method="post" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" id="name" name="name" class="letters" maxlength="100" placeholder="Your Name *">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" id="email" name="email" placeholder="Your Email *">
                                        </div>
                                    </div>
                                    <input type="text" id="subject" class="letters" maxlength="120" name="subject" placeholder="Subject *">
                                    <textarea name="message" maxlength="255" id="message" class="yourmessage  address" placeholder="Your message"></textarea>
                                    <button type="submit" class="button-default button-yellow submit"><i class="fa fa-send"></i>Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Contact Area-->
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
    </body>

</html>