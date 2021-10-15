<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this ->load->view('admin/_partials/head.php');?>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

        <!-- Top Navar -->
        <?php $this->load->view('admin/_partials/navbar.php');?>
        <!-- /Top Navbar -->

        <!-- Left Sidebar -->
        <?php $this->load->view('admin/_partials/sidebar.php');?>
        <!-- /Left Sidebar -->

        <!-- Main Content -->
        <div class="content-wrapper">

        <!-- Breadcrumb -->
        <?php $this->load->view('admin/_partials/breadcrumb.php');?>
        <!-- /Breadcrumb -->

            
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Petugas</h3>
                            </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <form role="form" id="quickForm" novalidate="novalidate">
                                <div class="card-body">
                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kode Petugas</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Petugas</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jurusan">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Petugas Role</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                        </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
                   
        </div>
        <!-- /Main Content -->

        <!-- Footer -->
        <?php $this->load->view('admin/_partials/footer.php');?>
        <!-- /Footer -->
    </div>

    <!-- JS -->
    <?php $this->load->view('admin/_partials/js.php');?>
    <!-- /Js -->
</body>
</html>