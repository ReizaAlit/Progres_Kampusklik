<?php
include "tampilkan_data.php";
include "koneksi.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
       

    <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Input Nilai Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form action ="proses_pert11.php" method ="POST">
                                      <fieldset>
                                        <legend>Input Mahasiswa</legend>

                                        <div class="control-group">
                                        <label class="control-label" for="nama">Nama Mahasiswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="nama"  name="nama" value="">
                                        </div>
                                    </div>     
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="nnpm">NPM Mahasiswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="npm"  name="npm" value="">
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="prodi">Prodi Mahasiswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="prodi"  name="prodi" value="">
                                        </div>
                                    </div>


                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Proses data</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                    </div>
                                 </form> 
                     </div>
                         </div>
                                </div>
                                

                                    <div class="row-fluid">


                                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Pencarian Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form action ="pert11.php" method ="GET">
                                      <fieldset>
                                        <legend>Pencarian Mahasiswa</legend>    
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="npm">NPM Mahasiswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="npm"  name="cari" value="">
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                        <button type="reset" class="btn">Reset</button>
                                    </div>

                                    <?php 
                                        if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];                     
                                        }
                                        ?>

                                    <table class="table">
						              <thead>
						                <tr>
						                  <th>NPM Mahasiswa</th>
						                  <th>Nama Mahasiswa</th>
						                  <th>Prodi Mahasiswa</th>
						                </tr>
						              </thead>
						              <tbody>
                                      
                                      <?php 
                                            if(isset($_GET['cari'])){
                                            $cari = $_GET['cari'];
                                            if(!is_numeric($cari)){
                                                echo "<script>
                                                alert('Input NPM Harus Angka')
                                                window.location.href = 'pert11.php'
                                                </script>";
                                            }else if(strlen ($cari) > 13){
                                                echo "<script>
                                                alert('Input NPM Lebih dari 13')
                                                window.location.href = 'pert11.php'
                                                </script>";
                                            }else if(strlen ($cari) < 13){
                                                echo "<script>
                                                alert('Input NPM Kurang dari 13')
                                                window.location.href = 'pert11.php'
                                                </script>";
                                            }
                                            $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE npm LIKE '%".$cari."%'");    
                                            }else{
                                            $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
                                            }
                                            while($d = mysqli_fetch_array($data)){
                                        ?>
                                            <tr>
                                            <td><?php echo $d['npm']; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['prodi']; ?></td>
                                            </tr>
                                        <?php } ?>
						              </tbody>
						            </table>

                                    </div>
                                 </form> 
                     </div>
                         </div>
                                </div>
                                

                                    <div class="row-fluid">


                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>NPM Mahasiswa</th>
						                  <th>Nama Mahasiswa</th>
						                  <th>Prodi Mahasiswa</th>
						                  <th>Aksi</th>
						                </tr>
						              </thead>
						              <tbody>


                                      <?php
                                        while($data = mysqli_fetch_assoc($proses)){

                                      ?>
						                <tr>
						                  <td><?php echo $data['npm']?></td>
						                  <td><?php echo $data['nama']?></td>
						                  <td><?php echo $data['prodi']?></td>
						                  <td> <a href="pert13-edit.php?id=<?php echo $data['id']; ?>">Edit | </a><a href="pert12-hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                                            
                                          </td>
						                </tr>
						                <?php
                                        }
                                        ?>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
</body>
</html>