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
            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Alta de Productos</h1>
                <p class="mb-4">Llene los campos para dar de alta un producto.</p>

                <!-- Begin Page Content -->
                <form class="container-fluid" autocomplete="off" action="registrarProducto.php" method="post">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripción del Producto</label>
                        <input type="text" name="Descripcion_P" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descripción" autofocus required maxlength="50">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Precio</label>
                        <input type="number" name="Precio_P" class="form-control" id="exampleInputPassword1" placeholder="Precio" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Existencia</label>
                        <input type="number" name="Existencia_P" class="form-control" id="exampleInputPassword1" placeholder="Existencia" required>
                    </div>

                    <?php
                    include_once "controller/Conectar.php";
                    $conexion = new Conectar();//constructor de la clase
                    $query = "select * from categoria_productos";
                    $result1 = mysqli_query($conexion->conexion(),$query);
                    ?>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Categoria</label>
                        <input type="search" name="Categoria_P" class="form-control" id="exampleInputPassword1" placeholder="Categoria" list="cat">
                        <datalist id="cat">
                            <?php while ($valores = mysqli_fetch_assoc($result1)): ?>
                                <option value=<?php echo $valores['id_categoria']; ?> > <?php echo $valores['descripcion']; ?></option>
                            <?php endwhile; ?>
                        </datalist>
                    </div>

                    <!--<div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>-->

                    <br>
                    <button type="submit" class="btn btn-primary">Dar de ALTA el Producto</button>
                </form>
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

<script type="text/javascript">
    $(document).ready(function () {
        if(window.location.href.indexOf("text=error") > -1) {
            alert("Error");
        }
        else if(window.location.href.indexOf("text=success") > -1) {
            alert("Producto registrado CORRECTAMENTE!");
        }
    });
</script>

</body>

</html>
