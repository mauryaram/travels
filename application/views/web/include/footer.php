<div class="footer-area">
        <span class="call_btn">
            <a href="tel:+91<?=phoneno?>">
<i class="fa fa-phone my-float" style="margin-top: 16px;color:rgb(255 255 255);"></i>

</a>
</span>
<span class="whatapp_btn mobile-none">  
          <a href="https://wa.me/+91<?=care_phoneno?>" target="_blank">
        <i class="fa fa-whatsapp my-float" style="margin-top: 16px;color:rgb(255 255 255);"></i>
        </a> 
        </span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-info-container text-center section-padding">
                            <div class="footer-logo">
                                <a href="<?= base_url()?>"><img src="<?= img_url(logo)?>" style="height: 75px"  alt="<?=company_name?>"></a>
                            </div>
                            <div class="footer-info">
                                <span><i class="fa fa-map-marker"></i><?=headoffice_address?></span>
                                <span><i class="fa fa-envelope"></i><?=emailid?></span>
                                <span><i class="fa fa-phone"></i>+91-<?=phoneno?></span>
                                
                                  <span><i class="fa fa-phone"></i>+91-8004641286/ 7408106605</span>
                                   <span><i class="fa fa-phone"> </i>+91-7408106605</span>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="footer-widget-container section-padding">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-4">
                            <div class="single-footer-widget">
                                <h4>About Us</h4>
                                <?php 
                                $ab = getftcharray('dt_cms',array('slug'=>'about-us'),'description');
                                
                                ?>
                                <p><?=!empty($ab) ? strip_tags(substr($ab, 0, 1000)) : "";?></p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="single-footer-widget">
                                <h4>Our Mahavidyalaya </h4>
                                <ul class="footer-widget-list">
                                    <li><a href="<?= base_url('about-us')?>">About Us</a></li>
                                    <li><a href="<?= base_url('gallery');?>">Gallery</a></li>
                                    <li><a href="<?= base_url('contact-us')?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="single-footer-widget">
                                <h4>Our Policies </h4>
                                <ul class="footer-widget-list">
                                    <li><a href="<?= base_url('privacy')?>">Privacy Policy</a></li>
                                    <li><a href="<?= base_url('terms');?>">Terms & Conditions</a></li>
                                    <li><a href="<?= base_url('admission-policies')?>">Admission Policies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="single-footer-widget">
                                <h4>Our Popular Courses</h4>
                                <ul class="footer-widget-list">
                                    <?php $c = fetchresult('dt_cms',['page_type'=>'course_category','status'=>'Active'],'`slug`, `heading`');
                                    if(!empty($c)){
                                        foreach ($c as $key => $ccval) { ?>
                                    <li><a href="<?= base_url($ccval['slug'])?>"><?=$ccval['heading']?></a></li>  
                                    <?php    } }?>
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <span>&copy; 2022 <a href="#">Shiv digital solutions</a>. All rights reserved</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="social-links">
                                        <a href="<?=facebook_link?>"><i class="fa fa-facebook"></i></a>
                                        <a href="<?=instagram_link?>"><i class="fa fa-instagram"></i></a>
                                        <a href="<?=twitter_link?>"><i class="fa fa-twitter"></i></a>
                                        <a href="<?=youtube_link?>"><i class="fa fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>