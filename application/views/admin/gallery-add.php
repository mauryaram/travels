<!doctype html>
<html lang="en">


    <head>

        <meta charset="utf-8" />
        <?php $this->load->view('admin/include/keyword'); ?>

        <!-- App favicon -->


        <!-- choices css -->
        <link href="<?= admin_assest(''); ?>libs/choices.js/public/<?= admin_assest(''); ?>styles/choices.min.css" rel="stylesheet" type="text/css" />

        <!-- color picker css -->
        <link rel="stylesheet" href="<?= admin_assest(''); ?>libs/%40simonwep/pickr/themes/classic.min.css"/> <!-- 'classic' theme -->
        <link rel="stylesheet" href="<?= admin_assest(''); ?>libs/%40simonwep/pickr/themes/monolith.min.css"/> <!-- 'monolith' theme -->
        <link rel="stylesheet" href="<?= admin_assest(''); ?>libs/%40simonwep/pickr/themes/nano.min.css"/> <!-- 'nano' theme -->

        <!-- datepicker css -->
        <link rel="stylesheet" href="<?= admin_assest(''); ?>libs/flatpickr/flatpickr.min.css">

        <!-- preloader css -->
        <link rel="stylesheet" href="<?= admin_assest(''); ?>css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?= admin_assest(''); ?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= admin_assest(''); ?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= admin_assest(''); ?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view('admin/include/navigation'); ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Gallery</a></li>
                                            <li class="breadcrumb-item active"><?=$title?></li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title"> <?=$title?></h4>

                                    </div>
                                    <div class="card-body p-4">
                                        <form enctype="multipart/form-data" method="Post" action="<?= admin('Gallery_add/saveup')?>">
                                            <input type="hidden" name="id" value="<?=$id;?>">
                                            <input type="hidden" name="oldimg" value="<?=$oldimage?>">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="heading" class="form-label">Heading</label>
                                                        <input class="form-control" type="text" value="<?=$heading;?>" name="heading" id="heading">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alt_tag" class="form-label">Alt Tag</label>
                                                        <input class="form-control" type="text" value="<?=$alt_tag;?>" name="alt_tag" id="alt_tag">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-6 mb-3">
                                                        <label for="status" class="form-label">Image</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select class="form-control" name="status">
                                                            <option <?php if($status == 'Active'){echo 'selected';}?> value="Active">Active</option>
                                                            <option <?php if($status == 'Inactive'){echo 'selected';}?> value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6 mt-4">
                                                        <button type="submit" class="btn btn-primary w-md"><?=$title?></button>
                                                        <button type="reset" class="btn btn-danger w-md">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <?php $this->load->view('admin/include/footer'); ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?= admin_assest(''); ?>libs/jquery/jquery.min.js"></script>
         <script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );
        </script>
        <script src="<?= admin_assest(''); ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= admin_assest(''); ?>libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= admin_assest(''); ?>libs/simplebar/simplebar.min.js"></script>
        <script src="<?= admin_assest(''); ?>libs/node-waves/waves.min.js"></script>
        <script src="<?= admin_assest(''); ?>libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?= admin_assest(''); ?>libs/pace-js/pace.min.js"></script>

        <!-- choices js -->
        <script src="<?= admin_assest(''); ?>libs/choices.js/public/<?= admin_assest(''); ?>scripts/choices.min.js"></script>

        <!-- color picker js -->
        <script src="<?= admin_assest(''); ?>libs/%40simonwep/pickr/pickr.min.js"></script>
        <script src="<?= admin_assest(''); ?>libs/%40simonwep/pickr/pickr.es5.min.js"></script>

        <!-- datepicker js -->
        <script src="<?= admin_assest(''); ?>libs/flatpickr/flatpickr.min.js"></script>

        <!-- init js -->
        <script src="<?= admin_assest(''); ?>js/pages/form-advanced.init.js"></script>
        <script src="<?= admin_assest(''); ?>fieldvalidation.js"></script>

        <script src="<?= admin_assest(''); ?>js/app.js"></script>

    </body>

</html>
