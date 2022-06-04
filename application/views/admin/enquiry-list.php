<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <?php $this->load->view('admin/include/keyword');?>

        <!-- DataTables -->
        <link href="<?=admin_assest('');?>libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=admin_assest('');?>libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?=admin_assest('');?>libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <!-- preloader css -->
        <link rel="stylesheet" href="<?=admin_assest('');?>css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?=admin_assest('');?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=admin_assest('');?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=admin_assest('');?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php $this->load->view('admin/include/navigation');?>
            

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
                                    <h4 class="mb-sm-0 font-size-18">Enquiry</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Enquiry</a></li>
                                            <li class="breadcrumb-item active">LIST</li>
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
                                        <h4 class="card-title">Enquiry List</h4>
                                        
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Full Name</th>
                                                <th>Mobile No/<br>Email Id</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($data)){
                                                $n = 1;
                                                foreach ($data as $key => $value) { ?>
                                            <tr>
                                                <td><?=$n?></td>
                                                <td><?=$value['full_name']?></td>
                                                <td><?=$value['phone_no']?><br><?=$value['email_id']?></td>
                                                <td><?=$value['subject']?></td>
                                                <td><?=$value['message']?></td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="<?= admin('Enquiry/delete?id='.$value['id'])?>" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $n++; }  }?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php $this->load->view('admin/include/footer');?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?=admin_assest('');?>libs/jquery/jquery.min.js"></script>
        <script src="<?=admin_assest('');?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=admin_assest('');?>libs/metismenu/metisMenu.min.js"></script>
        <script src="<?=admin_assest('');?>libs/simplebar/simplebar.min.js"></script>
        <script src="<?=admin_assest('');?>libs/node-waves/waves.min.js"></script>
        <script src="<?=admin_assest('');?>libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?=admin_assest('');?>libs/pace-js/pace.min.js"></script>

        <!-- Required datatable js -->
        <script src="<?=admin_assest('');?>libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?=admin_assest('');?>libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?=admin_assest('');?>libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?=admin_assest('');?>libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?=admin_assest('');?>libs/jszip/jszip.min.js"></script>
        <script src="<?=admin_assest('');?>libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?=admin_assest('');?>libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?=admin_assest('');?>libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?=admin_assest('');?>libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?=admin_assest('');?>libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="<?=admin_assest('');?>libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?=admin_assest('');?>libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?=admin_assest('');?>js/pages/datatables.init.js"></script>    

        <script src="<?=admin_assest('');?>js/app.js"></script>

    </body>

</html>
