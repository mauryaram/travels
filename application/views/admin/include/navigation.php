<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?= admin('dashboard')?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?=admin_assest('');?>images/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=admin_assest('');?>images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Dason</span>
                                </span>
                            </a>

                            <a href="<?= admin('dashboard')?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?=admin_assest('');?>images/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?=admin_assest('');?>images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Dason</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        
                    </div>

                    <div class="d-flex">


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?=admin_assest('');?>images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Admin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="<?= admin('setting')?>"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= admin('logout')?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </header>
<div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="<?= admin('dashboard')?>" id="topnav-dashboard" role="button">
                                        <i data-feather="home"></i><span data-key="t-dashboard">Dashboard</span>
                                    </a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                        <i data-feather="grid"></i><span data-key="t-apps">CMS</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                            <a href="<?=admin('cms_list')?>" class="dropdown-item" data-key="t-calendar">List</a>
                                                </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                        <i data-feather="grid"></i><span data-key="t-apps">Our Pens</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <a href="<?=admin('pen_add')?>" class="dropdown-item" data-key="t-calendar">Add</a>
                                        <a href="<?=admin('pen_list')?>" class="dropdown-item" data-key="t-calendar">List</a>
                                                </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                        <i data-feather="grid"></i><span data-key="t-apps">Course</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                role="button">
                                                <span data-key="t-ecommerce">Course</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">

                                                <a href="<?= admin('course_add')?>" class="dropdown-item" data-key="t-products">Add</a>
                                                <a href="<?= admin('course_list')?>" class="dropdown-item" data-key="t-product-detail">List</a>
                                                
                                            </div>
                                        </div>
                                                </div>
                                </li>
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                        <i data-feather="grid"></i><span data-key="t-apps">Faculty</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                role="button">
                                                <span data-key="t-ecommerce">Faculty</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                <a href="<?= admin('faculty_add')?>" class="dropdown-item" data-key="t-products">Add</a>
                                                <a href="<?= admin('faculty_list')?>" class="dropdown-item" data-key="t-product-detail">List</a>
                                                
                                            </div>
                                        </div>
                                                </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                        <i data-feather="grid"></i><span data-key="t-apps">Gallery</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                role="button">
                                                <span data-key="t-ecommerce">Slider</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                <a href="<?= admin('slider_add')?>" class="dropdown-item" data-key="t-products">Add</a>
                                                <a href="<?= admin('slider_list')?>" class="dropdown-item" data-key="t-product-detail">List</a>
                                                
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                role="button">
                                                <span data-key="t-ecommerce">Gallery</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                <a href="<?= admin('gallery_add')?>" class="dropdown-item" data-key="t-products">Add</a>
                                                <a href="<?= admin('gallery_list')?>" class="dropdown-item" data-key="t-product-detail">List</a>
                                                
                                            </div>
                                        </div>
                                                </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="<?= admin('enquiry')?>" id="topnav-dashboard" role="button">
                                        <i data-feather="grid"></i><span data-key="t-dashboard">Enquiry</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>