<?php
session_start();
include "config/database.php";
if($_SESSION['login']===false){
    header("Location:index.php");
}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->
    <?php include "sidebar.php"; ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include "header.php"; ?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus" ></i>&nbsp; Tambah Lantai</button>
            </div>
            
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <form action="model/lantai.php?model=tambah" method="post"/>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Tambah Data Lantai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group"><label for="company" class=" form-control-label">Lantai</label>
                            <select id="lantai" name="lantai" class="form-control">
                                <option value="1">1</option>
                                
                                <option value="2">2</option>
                            </select>
                            
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            <br>
            <br>
            <?php
          
            if(isset($_GET['status'])&&isset($_GET['id'])){
            
            if($_GET['status'] == "tambahSuccess"){  ?>
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Berhasil</span> Anda Berhasil Menambah Data Lantai <strong><?= $_GET['id']; ?></strong>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
          <?php  }
          else if($_GET['status'] == "tambahGagal0"){ ?>
            <div class="col-sm-12">
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-warning">Peringatan</span> Data Lantai <strong><?= $_GET['id']; ?></strong> Sudah Ada.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
          <?php  }
           else if($_GET['status'] == "tambahGagal1"){ ?>
            <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Gagal</span> Anda Gagal Menambah Data Lantai <strong><?= $_GET['id']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php  }
           else if($_GET['status'] == "deleteSuccess"){ ?>
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Berhasil</span> Anda berhasil menghapus Lantai <strong><?= $_GET['id']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php  }
           else if($_GET['status'] == "deleteGagal"){ ?>
            <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Gagal</span> Anda Gagal menghapus Data Lantai <strong><?= $_GET['id']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php  }
           else if($_GET['status'] == "ubahSuccess"){ ?>
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Berhasil</span> Anda berhasil merubah Lantai <strong><?= $_GET['id2']; ?> </strong>  menjadi lantai <strong><?= $_GET['id']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php  }
           else if($_GET['status'] == "ubahGagal"){ ?>
            <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Gagal</span> Anda Gagal merubah Lantai <strong><?= $_GET['id2']; ?> </strong>  menjadi lantai <strong><?= $_GET['id']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
           <?php } } ?>

            
            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Lantai</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" width="10%">No.</th>
                                            <th scope="col" width="70%">Lantai</th>
                                            <th scope="col" width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql = "SELECT * FROM tb_lantai";
                                            $query = mysqli_query($koneksi,$sql);
                                            $no=1;
                                            $cek = mysqli_num_rows($query);
                                            if ($cek>0){
                                            while ($row = mysqli_fetch_array($query)){ ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $row['lantai']; ?></td>
                                            <td>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?= $row['lantai']; ?>"><i class="fa fa-pencil" ></i>&nbsp; Ubah</button>&nbsp;
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $row['lantai']; ?>"><i class="fa fa-trash" ></i>&nbsp; Hapus</button>
                                          
                                            </td>
                                            <div class="modal fade" id="hapus<?= $row['lantai'] ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="smallmodalLabel">Baca Terebih dahulu?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                Apakah Anda ingin menghapus Lantai <strong><?= $row['lantai'] ?></strong> ?
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                            <a href="model/lantai.php?model=hapus&lantai=<?= $row['lantai'];?>" class="btn btn-primary">Ya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="modal fade" id="edit<?= $row['lantai']; ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <form action="model/lantai.php?model=edit&id=<?= $row['id'] ?>" method="post"/>
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="mediumModalLabel">Edit Data Lantai</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="form-group"><label for="company" class=" form-control-label">Lantai</label>
                                                        <select id="lantai" name="lantai" class="form-control">
                                <option value="1">1</option>
                                
                                <option value="2">2</option>
                            </select></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </tr>

                                           <?php } } else { ?>
                                            <tr>
                                                
                                                <td colspan="3" align="center"> Tidak ada Data Lantai </td>
                                                
                                            
                                             </tr>
                                       <?php } ?>
                                        
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
            <!--/.col-->

            


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
   

</body>

</html>
