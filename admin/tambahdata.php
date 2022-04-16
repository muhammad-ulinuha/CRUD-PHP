<!DOCTYPE html>
<html>
<head>
 <title>Form Biodata</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head> <script type="text/javascript">
  function validate(){
   var nama= document.getElementById('nama').value;
   var Alamat= document.getElementById('alamat').value;
   var Jurusan= document.getElementById('pendidikan').value;
   var minat_bakat= document.getElementById('minat_bakat').value;
   if(nama==''||Alamat==''||Jurusan==''){
    alert("Maaf Form anda belum lengkap !!");
   }else{
    alert("Terima Kasih telah mendaftar "+nama);
   }
   return false;
  }
</script>
<script>
  function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
 </script>
<body>
  <br>
  <br>
  <br>
 <div class="container">
  <div class="row">
   <div class="col-md-3 col-sm-3 "></div>
   <div class="col-md-6 col-sm-6 ">
    <h2 style="align-content: center;">Form Pendaftaran</h2>
    
    <form onsubmit="return validate();" method="post" action="simpandata.php">
     <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" class="form-control" maxlength="10" onkeypress="return hanyaAngka(event)" name="nim" >
                </div>

      <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" name="nama" >
                </div>

        <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" name="alamat" >
                </div>


        <div class="form-group">
                  <label for="nomertelepon">Nomer Telephone</label>
                  <input type="text" class="form-control" maxlength="13" onkeypress="return hanyaAngka(event)" name="notelpon" >
                </div>

      <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" >
                </div>

      <div class="form-group">
                  <label for="minat_bakat">Minat & Bakat</label>
                  <input type="text" class="form-control" name="minat_bakat" >
                </div>
        
         <input type="submit" name="btn" class="btn btn-primary btn-block" value="REGISTER">
    </form>
   </div>
   <div class="col-md-3 col-sm-3"></div>
  </div>
 </div>
</body>
</html>