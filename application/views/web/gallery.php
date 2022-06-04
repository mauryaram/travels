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
        <!--Breadcrumb Banner Area Start-->
        <div class="breadcrumb-banner-area gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center">Gallery</h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url()?>">Home</a></li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb Banner Area-->
        <!--Gallery Area Start-->
        <div class="gallery-area section-padding gallery-full-width">
            <div class="container">
                
                <div class="filter-items">
                    <div class="row">
                        <?php if(!empty($gallery)){
                        foreach ($gallery as $key => $gval) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mix single-items drawing overlay-hover">
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
        <!--Footer Area Start-->
        <?php $this->load->view('web/include/footer');?>
        <!--End of Footer Area-->
        <?php $this->load->view('web/include/js');?>
    </body>

</html>