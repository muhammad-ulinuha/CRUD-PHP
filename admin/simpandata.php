<?php 
//Ini untuk koneksi saja
include 'conn.php';


 $nim_user=$_POST['nim'];
 $nama_user= $_POST['nama'];  
 $alamat_user= $_POST['alamat'];  
 $no_telpon= $_POST['notelpon']; 
 $pendidikan_user= $_POST['jurusan']; 
 $minat_bakat= $_POST['minat_bakat'];

 echo "SELAMAT ANDA SUDAH TERDAFTAR <br><p>";
 echo "Nim : $nim_user <br>";
 echo "Nama : $nama_user <br>";
 echo "Alamat : $alamat_user <br>";
 echo "Nomer Telephone : $no_telpon <br>";
 echo "Jurusan : $pendidikan_user <br>";
 echo "Minat Bakat : $minat_bakat <br>";


    $sql ="INSERT INTO data_mhs (nim, nama, alamat, no_telpon, jurusan, minat_bakat)". 
    "VALUES ('$nim_user','$nama_user', '$alamat_user', '$no_telpon', '$pendidikan_user','$minat_bakat')";
 
 mysqli_query($conn, $sql);


 header("location:index.php");


?>