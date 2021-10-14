
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/_partials/head.php')?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('admin/_partials/sidebar.php')?>
            <!-- top navigation -->
            <?php $this->load->view('admin/_partials/nav.php')?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Alternatif</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data Gejala </h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="">

                                        <form id="formAdd" class="form-horizontal form-label-left px-5">
                                            <div class="clearfix"></div>
                                            <div class="row" style="display: block;">
                                                <div class="clearfix"></div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="x_panel">
                                                        <div class="x_title">
                                                            <h2>KRITERIA</h2>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="x_content">
                                                            <div class="form-group row ">
                                                                <label class="control-label col-md-3 col-sm-3 ">Kode Alternatif</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <input type="text" id="alternatifKode" name="alternatifKode"  class="form-control">
                                                                    <span class="noRM_error text-danger"></span>
                                                                </div>
                                                            </div>
                                                         
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3 ">Alternatif Deskripsi/Topik</label>
                                                                <div class="col-md-9 col-sm-9 ">
                                                                    <!-- <input type="text" name="kriteriaDeskripsi" id="kriteriaDeskripsi" class="form-control"> -->
                                                                    <textarea name="alternatifDeskripsi" id="alternatifDeskripsi" class="form-control" id="" cols="10" rows="5"></textarea>
                                                                    <span class="namaPasien_error text-danger"></span>
                                                                </div>
                                                            </div>
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                    <!-- //////////////////////////////////////////// -->
                                                    <div id="container"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-9 col-sm-9  offset-md-3">
                                                            <!-- <button type="button" class="btn btn-primary">Cancel</button> -->
                                                            <a href="http://localhost/laboratorium_project/Pendaftaran" class="btn btn-primary">Cancel</a>
                                                            <button type="reset" class="btn btn-primary">Reset</button>
                                                            <button type="submit" id="add" class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                       
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <?php $this->load->view('admin/_partials/footer.php')?>
            <!-- /footer content -->
        </div>
    </div>

<?php $this->load->view('admin/_partials/js.php')?>

<script>
$(document).ready(function(){

   


        $('#add').on('click', function(){
        $.ajax({
            type : "POST",
            url  :"<?php echo base_url('admin/Alternatif/addAlternatif')?>",
            dataType : "JSON",
            data : $('#formAdd').serialize(),
            success: function(data){
                console.log(data);
                if(data.status == 'success'){
                    console.log("sukses");
                
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di Tambahkan!',
                    
                    }).then(function() {
                        window.location.assign("<?php echo base_url();?>admin/Alternatif");
                    });
                
                }else{
                    $('.gejalaCode_error').html(data.gejalaCode);
                    $('.gejalaNama_error').html(data.gejalaNama);
                } 
            }
        });
    return false;
    });


});
    
    </script>
</body>
</html>
