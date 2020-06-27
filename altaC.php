<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include("includes/_head.php");
?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php
                include("includes/_side_bar.php");
            ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php
                        include("includes/_top_bar.php");
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                </div>

                 <!-- Footer -->
                <?php
                    include("includes/_footer.php");
                ?>
                <!-- End of Footer -->
            </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->

        <!-- Bootstrap core JavaScript-->
        <?php
            include("includes/_scripts.php");
        ?>
    </body>
</html>