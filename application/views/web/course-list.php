<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Class Grid || TechEdu</title>
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
                            <h1 class="text-center">Our Courses</h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url()?>">Home</a></li>
                                    <li>Our Courses</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb Banner Area-->
        <!--Class Grid Area Start-->
        <div class="class-grid-area section-padding">
            <div class="container">
                
                <div class="row">
                    <?php if(!empty($courses)){
                        foreach ($courses as $key => $cval) { ?>
                    <div class="col-lg-4 col-md-6">
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
                    </div>
                    <?php }}?>
                    
                    
                    
                </div>
                
            </div>
        </div>
        <!--End of Class Grid Area-->
        <!--Footer Area Start-->
        <?php $this->load->view('web/include/footer');?>
        <!--End of Footer Area-->
        <?php $this->load->view('web/include/js');?>
    </body>

</html>