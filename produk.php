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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus" ></i>&nbsp; Tambah Produk</button>
            </div>
            <div class="col-sm-2">
            <a href="pdf.php" class="btn btn-success" ><i class="fa fa-qrcode" ></i>&nbsp; Print Barcode</a>
         
            </div>
            
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <form action="model/produk.php?model=tambah" method="post" enctype="multipart/form-data"/>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Tambah Data Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Nama UPB</label>
                                <input type="text" id="nama_upb" name="nama_upb" placeholder="NUP" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Satker</label>
                                <input type="text" id="satker" name="satker" placeholder="Satker" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Kode Barang</label>
                                <input type="text" id="kode_barang" name="kode_barang" placeholder="Kode Barang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Tahun Peroleh</label>
                                <input type="text" id="th_peroleh" name="th_peroleh" placeholder="Tahun Peroleh" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Jumlah Barang</label>
                                <input type="number" id="jumlah_barang" name="jumlah_barang" placeholder="Jumlah Barang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Penguasaan</label>
                                    <select name="penguasaan" id="select" class="form-control">   
                                         <option value="Milik Sendiri">Milik Sendiri</option>
                                         <option value="Bukan Milik Sendiri ">Bukan Milik Sendiri</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">NUP</label>
                                <input type="text" id="nup" name="nup" placeholder="NUP" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">No. Register</label>
                                <input type="text" id="no_register" name="no_register" placeholder="NUP" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Nama Barang</label>
                                <input type="text" id="nama_barang" name="nama_barang" placeholder="NUP" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">No. KIB</label>
                                <input type="text" id="no_kib" name="no_kib" placeholder="NO KIB" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Kondisi</label>
                                    <select name="kondisi" id="select" class="form-control">   
                                         <option value="baik"> Baik</option>
                                         <option value="tidak_baik">Tidak Baik</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Kategori</label>
                                <?php 
                                            $sql = "SELECT * FROM tb_kategori";
                                            $query = mysqli_query($koneksi,$sql);
                                            $no=1;
                                            $cek = mysqli_num_rows($query);
                                            if ($cek>0){ ?>
                                                <select name="merk" id="select" class="form-control">
                                           <?php while ($rowc = mysqli_fetch_array($query)){ ?>
                                                    <option value="<?= $rowc['kategori']?>"> <?= $rowc['kategori']?></option>
                                        <?php } ?>
                                        </select>
                                  <?php  } else { ?>
                                            <tr>
                                                
                                            <input type="text" id="lantai" value="Tidak ada lantai" name="lantai" disabled/>
                                                
                                            
                                             </tr>
                                       <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Letak Barang</label>
                                <?php 
                                            $sql = "SELECT * FROM tb_ruangan";
                                            $query = mysqli_query($koneksi,$sql);
                                            $no=1;
                                            $cek = mysqli_num_rows($query);
                                            if ($cek>0){ ?>
                                                <select name="ruangan" id="select" class="form-control">
                                           <?php while ($rowz = mysqli_fetch_array($query)){ ?>
                                                    <option value="<?= $rowz['id']?>"> Lantai <?= $rowz['lantai']?> Ruang <?= $rowz['ruangan']?></option>
                                        <?php } ?>
                                        </select>
                                  <?php  } else { ?>
                                            <tr>
                                                
                                            <input type="text" id="lantai" value="Tidak ada lantai" name="lantai" disabled/>
                                                
                                            
                                             </tr>
                                       <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Gambar Barang</label>
                                <input type="file" id="gambar" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Keterangan</label>
                                <textarea id="keterangan" name="keterangan" class="form-control"> </textarea>
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
                    <span class="badge badge-pill badge-danger">Gagal</span> Anda Gagal menghapus Data  <strong><?= $_GET['id']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php  }
           else if($_GET['status'] == "ubahSuccess"){ ?>
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Berhasil</span> Anda berhasil merubah  <strong><?= $_GET['id2']; ?> </strong>  menjadi lantai <strong><?= $_GET['id']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php  }
           else if($_GET['status'] == "ubahGagal"){ ?>
            <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Gagal</span> Anda Gagal merubah  <strong><?= $_GET['id2']; ?> </strong>  menjadi lantai <strong><?= $_GET['id']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
           <?php } } ?>

            
           <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">No</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Foto</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Nama Barang</th>
                                            <th colspan="3" style="vertical-align : middle;text-align:center;">Identitas Barang</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Jumlah</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Penguasaan</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Keterangan</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Ruangan</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Kondisi</th>
                                            <th rowspan="2" style="vertical-align : middle;text-align:center;">Aksi</th>
                                        </tr>
                                       <tr>
                                            <th style="vertical-align : middle;text-align:center;">Merk</th>
                                            <th style="vertical-align : middle;text-align:center;">Kd. Barang</th>
                                            <th style="vertical-align : middle;text-align:center;">Th. Peroleh</th>
                                       </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                            $sql = "SELECT * FROM tb_inventori";
                                            $query = mysqli_query($koneksi,$sql);
                                            $no=1;
                                            $cek = mysqli_num_rows($query);
                                            if ($cek>0){
                                            while ($row = mysqli_fetch_array($query)){ ?>
                                        <tr>
                                            <td style="vertical-align : middle;text-align:center;"><?= $no++;?></td>
                                            <td><img  src="https://kejaksaan.wargaid.online/alvin/model/images/<?= $row['foto']; ?>" height="80" width="80"></td>
                                            <td><?= $row['nama_barang']; ?></td>
                                            <td><?= $row['merk']; ?></td>
                                            <td><?= $row['kode_barang']; ?></td>
                                            <td><?= $row['th_peroleh']; ?></td>
                                            <td><?= $row['jumlah_barang']; ?></td>
                                            <td><?= $row['ruangan']; ?></td>
                                            <td><?= $row['penguasaan']; ?></td>
                                            <td><?= $row['keterangan']; ?></td>
                                            <td><?= $row['kondisi']; ?></td>
                                            <td><div class="dropdown float-right">
                                                <button class="btn bg-transparent dropdown-toggle theme-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <div class="dropdown-menu-content">
                                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#lihat<?=$row['id']; ?>">Lihat Detail</a>
                                                        <a href="qrcode.php?id=<?=$row['id']; ?>" class="dropdown-item" >QR Code</a>
                                                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit<?=$row['id']; ?>">Edit</a>
                                                        <a  class="dropdown-item" href="model/produk.php?model=hapus&id=<?= $row['id'] ?>">Hapus</a>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            <div class="modal fade" id="lihat<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <form method="post"/>
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="mediumModalLabel">Detail</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <img class="rounded-circle mx-auto d-block" width="300" height="300" src="https://kejaksaan.wargaid.online/alvin/model/images/<?= $row['foto']; ?>" alt="Card image cap">
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Nama Barang</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['nama_barang']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Satker</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['satker']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Ruangan</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['ruangan']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Nama UPB</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['nama_upb']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Kode Barang</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['kode_barang']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">NUP</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['nup']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">No. KIB</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['no_kib']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Kondisi</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['kondisi']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Merk</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['merk']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">No. Register</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['no_register']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Th. Peroleh</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['th_peroleh']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Jumlah Barang</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['jumlah_barang']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Penguasaan</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['penguasaan']; ?>" class="form-control" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Keterangan</label>
                                                                <textarea id="lantai" name="lantai" class="form-control" disabled> <?= $row['keterangan']; ?> </textarea>
                                                            </div>
                                                            <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?= $row['id'] ?>">
                                                        </div>
                                                       
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="edit<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <form method="post"/>
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="mediumModalLabel">Detail</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <img class="rounded-circle mx-auto d-block" width="300" height="300" src="https://kejaksaan.wargaid.online/alvin/model/images/<?= $row['foto']; ?>" alt="Card image cap">
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Nama Barang</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['nama_barang']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Satker</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['satker']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Ruangan</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['ruangan']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Nama UPB</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['nama_upb']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Kode Barang</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['kode_barang']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">NUP</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['nup']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">No. KIB</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['no_kib']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Kondisi</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['kondisi']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Merk</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['merk']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">No. Register</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['no_register']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Th. Peroleh</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['th_peroleh']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Jumlah Barang</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['jumlah_barang']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Penguasaan</label>
                                                                <input type="text" id="lantai" name="lantai" value="<?= $row['penguasaan']; ?>" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company" class=" form-control-label">Keterangan</label>
                                                                <textarea id="lantai" name="lantai" class="form-control" > <?= $row['keterangan']; ?> </textarea>
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
                                        </td>
                                        </tr>
                                    <?php } }?>
                                        
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


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
   

</body>

</html>
