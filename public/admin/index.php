<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_BACK.DS."header.php"); ?>

<?php

    if(!isset($_SESSION['username'])){
        header("location: ../index.php");
    }

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php

                if($_SERVER['REQUEST_URI'] == "/ecom/public/admin/" || $_SERVER['REQUEST_URI']== "/ecom/public/admin/index.php") {

                    include(TEMPLATE_BACK.DS."/admin_content.php");

                }

                if(isset($_GET['categories'])){

                    include(TEMPLATE_BACK.DS."categories.php");

                }

                if(isset($_GET['orders'])){

                    include(TEMPLATE_BACK.DS."orders.php");

                }

                if(isset($_GET['add_product'])){

                    include(TEMPLATE_BACK.DS."add_product.php");

                }

                if(isset($_GET['prodcuts'])){

                    include(TEMPLATE_BACK.DS."products.php");

                }



                ?>

                 
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include(TEMPLATE_BACK.DS."footer.php"); ?>