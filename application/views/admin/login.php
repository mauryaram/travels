<!doctype html>
<html lang="en">

    
<head>

        <meta charset="utf-8" />
        <?php $this->load->view('admin/include/keyword');?>


        <!-- preloader css -->
        <link rel="stylesheet" href="<?=admin_assest('');?>css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?=admin_assest('');?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=admin_assest('');?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=admin_assest('');?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index-2.html" class="d-block auth-logo">
                                            <img src="<?= img_url(logo);?>" alt="" height="28"> <span class="logo-txt"><?=company_name?></span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Welcome Back !</h5>
                                            <p class="text-muted mt-2">Sign in to continue to Dason.</p>
                                        </div>
                                        <form class="mt-4 pt-2" action="<?= admin('login/check')?>" method="post">
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text" class="form-control" name="user_id" required="" id="input-username" placeholder="Enter User Name">
                                                <label for="input-username">Username</label>
                                                <div class="form-floating-icon">
                                                   <i data-feather="users"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                <input type="password" name="password" required="" class="form-control pe-5" id="password-input" placeholder="Enter Password">
                                                
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                </button>
                                                <label for="input-password">Password</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>

                                            
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="<?=admin_assest('');?>libs/jquery/jquery.min.js"></script>
        <script src="<?=admin_assest('');?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=admin_assest('');?>libs/metismenu/metisMenu.min.js"></script>
        <script src="<?=admin_assest('');?>libs/simplebar/simplebar.min.js"></script>
        <script src="<?=admin_assest('');?>libs/node-waves/waves.min.js"></script>
        <script src="<?=admin_assest('');?>libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?=admin_assest('');?>libs/pace-js/pace.min.js"></script>

        <script src="<?=admin_assest('');?>js/pages/pass-addon.init.js"></script>

        <script src="<?=admin_assest('');?>js/pages/feather-icon.init.js"></script>

    </body>


</html>