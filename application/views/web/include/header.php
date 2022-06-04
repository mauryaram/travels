<header>
    <!--Logo Mainmenu Start-->
    <div class="header-logo-menu sticker">
        <div class="container">
            <div class="logo-menu-bg">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo">
                            <a href="<?= base_url();?>"><img style="height: 80px;" src="<?= img_url(logo);?>" alt="<?=company_name?>"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="mainmenu-area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li><a href="<?= base_url();?>">Home</a></li>
                                        <li><a href="<?= base_url('about-us');?>">About us</a></li>
                                        <li><a href="#">From Our Pen <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <?php $r = fetchresult('dt_cms', ['status'=>'Active','page_type'=>'pen'],'slug,heading','priority ASC');
                                            foreach ($r as $key => $value) {
                                           ?>
                                            <li><a href="<?= base_url($value['heading']);?>"><?=$value['heading'];?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                        <li><a href="<?= base_url('our-faculty');?>">Our Faculty</a></li>
                                        <li><a href="<?= base_url('our-courses');?>">Our Courses</a></li>
                                        <li><a href="<?= base_url('gallery');?>">Gallery</a></li>
                                        <li><a href="<?= base_url('contact-us');?>">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!--End of Logo Mainmenu-->
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="<?= base_url();?>">Home</a></li>
                                <li><a href="<?= base_url('about-us');?>">About us</a></li>
                                <li><a href="#">From Our Pen </a>
                                 <ul>
                                    <?php foreach ($r as $key => $value) {
                                           ?>
                                            <li><a href="<?= base_url($value['heading']);?>"><?=$value['heading'];?></a></li>
                                            <?php } ?>
                                            </ul>
                                        </li>
                                <li><a href="<?= base_url('our-faculty');?>">Our Faculty</a></li>
                                <li><a href="<?= base_url('our-courses');?>">Our Courses</a></li>
                                <li><a href="<?= base_url('gallery');?>">Gallery</a></li>
                                <li><a href="<?= base_url('contact-us');?>">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>					
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->  
</header>
<marquee onMouseOver="this.stop()" onMouseOut="this.start()" direction="scroll">Get take direct Admission in Bachelor of Science Agriculture  at  Sri Rampal Mahavidyalaya Baheriya Bazar, Atrauli District Hardoi. There are many course choices after 12th for science students. One can choose any UG course and make a career. BSc Ag is the best option for the goverrment job because this course is huge dema...</marquee>
  </body>