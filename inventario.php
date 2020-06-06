<!DOCTYPE html>
<html lang="en">

<?php
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
            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Inventario</h1>
                <p class="mb-4">Aqui se muestran todos los productos en existencia y algunas operaciones para los mismos.</p>




                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabla de Inventario  <a href="#" class="btn btn-info justify-content-end" role="button" >Agregar Producto</a></h6>

                    </div>
                    <div class="card-body">
                        <?php
                        include("controller/productos.php");

                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Id registro</th>
                                    <th>Descripcio</th>
                                    <th>Categoria</th>
                                    <th>Detalles</th>
                                    <th>Eliminar</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id registro</th>
                                    <th>Descripcio</th>
                                    <th>Categoria</th>
                                    <th>Detalles</th>
                                    <th>Eliminar</th>
                                </tr>
                                </tfoot>
                                <tbody>


                                <?php while ($row1 = mysqli_fetch_array($productos)): ?>
                                    <tr>
                                        <td><?php echo $row1[0]; ?></td>
                                        <td><?php echo $row1[1]; ?></td>
                                        <td><?php echo $row1[2]; ?></td>
                                        <td><a href="#" class="btn btn-primary" role="button">Ver Detalles</a></td>
                                        <td><a href="#" class="btn btn-danger" role="button">Eliminar</a></td>

                                    </tr>
                                <?php endwhile; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- Contenido -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php
        include("includes/_footer.php");
        ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

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
