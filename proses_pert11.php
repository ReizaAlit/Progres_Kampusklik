<?php


include "koneksi.php";

//mengambil data inputan
    $npm_mhs = $_POST['npm'];
    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];
  
    $proses = mysqli_query($koneksi,"INSERT INTO mahasiswa (npm,nama,prodi) VALUES ('$npm_mhs','$nama_mhs','$prodi_mhs') ")
    or die (mysqli_error($koneksi));

    if($proses){
        echo "<script>
             alert('Data Berhasil Disimpan')
             window.location.href = 'pert11.php'
        </script>";
    }else{
        "<script>
        alert('Data Gagal Disimpan')
        window.location.href = 'pert11.php'
   </script>";
    }
    
    if($nilai_mhs != ""){

        if($nilai_mhs >= 85){
            $huruf_mutu ='A';
        }else if($nilai_mhs >= 75){
            $huruf_mutu = 'B';
        }else if($nilai_mhs >= 65){
            $huruf_mutu = 'C';
        }else{
            $huruf_mutu = 'E';
        }

    }


