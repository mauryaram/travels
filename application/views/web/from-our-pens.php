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
        <div class="breadcrumb-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center"><?=!empty($about['heading']) ? $about['heading'] : ""?></h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?= base_url()?>">Home</a></li>
                                    <li><?=!empty($about['heading']) ? $about['heading'] : ""?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb Banner Area-->
        <!--Activity Area Start-->
       
        <!--End of Activity Area-->
        <!--About Area Start-->
        <div class="about-area section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3><?=!empty($about['heading']) ? $about['heading'] : ""?></h3>
                                <p>(<?=!empty($about['affiliation']) ? $about['affiliation'] : ""?>)</p>
                            </div>
                        </div> 
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-text-container">
                            <?=!empty($about['description']) ? $about['description'] : ""?>  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-image">
                            <img src="<?=!empty($about['image']) ? img_url($about['image']) : ""?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of About Area-->
        
        <!--Footer Area Start-->
        <?php $this->load->view('web/include/footer');?>
        <!--End of Footer Area-->
        
        <?php $this->load->view('web/include/js');?>
    </body>

</html>