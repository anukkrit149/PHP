<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 07-07-2019
 * Summary-
 * API Used-
 * Limitations-
 */


include "classes/dbcontroller.php";

if (isset($_POST['cat-submit'])){
   $db = new DBController();
   $db->connectDB();

   $res=$db->runQuery("INSERT INTO category(ctName) VALUES(".$_POST['name'].");");
   if ($res)
       echo "<script>console.log('success')</script>";
   else
       echo "<script>console.log('failed')</script>";
}

?>


<html lang="en">
<?php include('elements/header.php'); ?>
<!-- Begin page -->
<div id="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <? include('elements/sidebar.php');?>
    <!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <!-- Top Bar Start -->
            <?php include('elements/navbar.php');?>
            <!-- Top Bar End -->
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title m-0">Add Category</h4>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end page-title-box -->
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <!--<h4 class="mt-0 header-title">Textual inputs</h4>-->
                                    <!--<p class="text-muted m-b-30 font-14">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>-->
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-10">
                                            <form method="post">
                                                <input name="name" class="form-control" type="text" id="">
                                                <br>
                                                <button type="submit" value="submit" name="cat-submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- container fluid -->
                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->
            <?php include('elements/footer.php');?>
        </div>
        <!-- End Right content here -->
    </div>
    <!-- END wrapper -->
    <!--Datatable JS Script-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


    <!--Data Table-->
    <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <!--Export table buttons-->
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
    <script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

    <!--Export table button CSS-->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">

    <script>
        $(document).ready(function(){
            var dataTable=$('#example').DataTable({
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:"fetch.php",
                    type:"post"
                }
            });
        })
    </script>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael.min.js"></script>
    <!-- dashboard js -->
    <script src="assets/pages/dashboard.int.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    </body>
</html>