<?php
// include database connection file
include_once('conn.php');

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   

    $id = $_POST['id'];
    $nim_user=$_POST['nim'];
    $nama_user= $_POST['nama'];  
    $alamat_user= $_POST['alamat'];  
    $no_telpon= $_POST['no_telpon']; 
    $jurusan= $_POST['jurusan']; 
    $minat_bakat= $_POST['minat_bakat'];
   

    // update user data
    $result = mysqli_query($conn, "UPDATE data_mhs SET nama='$nama_user',alamat='$alamat_user', no_telpon='$no_telpon', jurusan='$jurusan', minat_bakat='$minat_bakat'  WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}

?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$sql = mysqli_query($conn, "SELECT * FROM data_mhs WHERE id=$id");

while($user_data = mysqli_fetch_array($sql))
{
    $nim_user=$user_data['nim'];
    $nama_user= $user_data['nama'];  
    $alamat_user= $user_data['alamat'];  
    $no_telpon= $user_data['no_telpon']; 
    $jurusan= $user_data['jurusan']; 
    $minat_bakat= $user_data['minat_bakat'];
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
    <title>Edit User Data</title>

</head>

<body>
    <br/><br/>
 <div class="container">
  <div class="row">
   <div class="col-md-3 col-sm-3 "></div>
   <div class="col-md-6 col-sm-6 ">
    <h2 style="align-content: center;">EDIT DATA MAHASISWA</h2>
    
    <form onsubmit="return validate();" method="post" action="update.php">
     <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" class="form-control" maxlength="10" onkeypress="return hanyaAngka(event)" name="nim" value=<?php echo $nim_user;?>>
                </div>

      <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" name="nama" value=<?php echo $nama_user;?>>
                </div>

        <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" name="alamat" value=<?php echo $alamat_user;?>>
                </div>


        <div class="form-group">
                  <label for="nomertelepon">Nomer Telephone</label>
                  <input type="text"  class="form-control" maxlength="13" onkeypress="return hanyaAngka(event)" name="no_telpon" value=<?php echo $no_telpon;?>>
                </div>

        <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" value=<?php echo $jurusan;?>>
                </div>

        <div class="form-group">
                  <label for="minat_bakat">Minat & Bakat</label>
                  <input type="text" class="form-control" name="minat_bakat" value=<?php echo $minat_bakat;?>>
                </div>

                  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
         <input type="submit" name="update" class="btn btn-primary btn-block" value="Update">
    </form>
   </div>
   <div class="col-md-3 col-sm-3"></div>
  </div>
 </div>
</body>
