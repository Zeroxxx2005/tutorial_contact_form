<?php
    if($_POST){
        $nama=$_POST['nama'];
        $umur=$_POST['umur'];
        $tempat_lahir=$_POST['tempat_lahir'];
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $alasan=$_POST['alasan'];
        $alamat=$_POST['alamat'];
        $email=$_POST['email'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='index.php'</script>";
        }
        else {
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into contact (nama, umur, tempat_lahir, tanggal_lahir, jenis_kelamin, alasan, alamat, email)
            value ('".$umur."','".$nama."','".$tempat_lahir."','".$tanggal_lahir."','".$jenis_kelamin."','".$alasan."','".$alamat."','".$email."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Sukses menambahkan data');location.href='index.php';</script>";
            }
            else {
                echo "<script>alert('Gagal menambahkan data');location.href='index.php';</script>";
            }
        }
    }
?>