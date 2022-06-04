<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Class List || TechEdu</title>
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
        <div class="breadcrumb-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center">Our Faculty</h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url();?>">Home</a></li>
                                    <li>Our Faculty</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb Banner Area-->
        <!--Class List Area Start-->
        <div class="class-list-area section-padding">
            <div class="container">
                
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <?php if(!empty($faculty)){
                        foreach ($faculty as $key => $fval) { ?>
                        <div class="class-list-item" id="id-<?=!empty($fval['id']) ? $fval['id'] : "";?>">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-6">
                                    <a href=""><img src="<?= img_url($fval['image'])?>" alt=""></a>
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6">
                                    <div class="class-list-text">
                                        <h3><a href=""><?=!empty($fval['heading']) ? $fval['heading'] : "";?></a></h3>
                                        <div class="class-information">
                                           <span>Experience: <?=!empty($fval['seats']) ? $fval['seats'] : "";?></span>
                                           <span>Degrees: <?=!empty($fval['affiliation']) ? $fval['affiliation'] : "";?></span>
                                        </div>
                                        <p><?=!empty($fval['description']) ? $fval['description'] : "";?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php }} ?>
                        
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="single-widget-item res-mrg-top-xs">
                            <div class="single-title">
                                <h3>All Faculty</h3>
                            </div>
                            <div class="single-widget-container">
                                <ul class="sidebar-categories class">
                                     <?php if(!empty($faculty)){
                                        foreach ($faculty as $key => $fval) { ?>
                                    <li><a href="#id-<?=!empty($fval['id']) ? $fval['id'] : "";?>"><?=!empty($fval['heading']) ? $fval['heading'] : "";?></a></li>
                                    <?php }} ?>
                                   
                                </ul>
                            </div>
                        </div>
                        
                        
                           
                    </div>
                </div>
            </div>
        </div>
        <!--End of Class List Area-->
        <!--Footer Area Start-->
        <?php $this->load->view('web/include/footer');?>
        <!--End of Footer Area-->
        <?php $this->load->view('web/include/js');?>
    </body>

</html>