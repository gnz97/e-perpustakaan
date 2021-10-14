
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
                            <!-- <h3>Data Mahasiswa</h3> -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data Mata Kuliah</h2>
                                    <div class="float-right"><a href="<?=base_url('admin/Kriteria/viewAddKriteria')?>" class="btn btn-primary"> Tambah Mata Kuliah</a></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="">
                                        <table class="table table-striped jambo_table bulk_action" id="mahasiswaTable">
                                            <thead>
                                            
                                                <tr class="headings">
                                                    <th class="column-title" style="display: table-cell;" width="5%">#</th>
                                                    <th class="column-title" style="display: table-cell;" width="7%">Kode</th>
                                                    <th class="column-title" style="display: table-cell;" width="70%">Nama Mata Kuliah</th>
                                                    <th class="column-title" style="display: table-cell;" width="10%">SKS</th>
                                                    <!-- <th class="column-title" style="display: table-cell;" width="70%">Kosentrasi</th> -->
                                                    <th class="column-title   text-center" style="display: table-cell;"><span class="nobr">Action</span></th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    $i = 1;
                                                    foreach($dataMK as $rowMK){
                                                ?>
                                           
                                                <tr>
                                                    <td><?=$i++?></td>
                                                    <td><?=$rowMK->mataKuliahKode?></td>
                                                    <td><?=$rowMK->mataKuliahNama?></td>
                                                    <td><?=$rowMK->mataKuliahSks?></td>
                                                    
                                                    <td class="d-flex justify-content-center">
                                                        <a href="<?=base_url('admin/chatKategori/viewEditChatKategori/'.$rowMK->mataKuliahID)?>" class="btn btn-primary"> Edit</a>
                                                        <button class="btn btn-danger" id="btn-delete" value="<?=$rowMK->mataKuliahID?>">Delete</button>
                                                    </td>
                                                </tr>
                                         
                                                <?php } ?>
                                                
                                               
                                            </tbody>
                                        </table>
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
        $('#mahasiswaTable').DataTable();


  
});
    
    </script>
</body>
</html>
