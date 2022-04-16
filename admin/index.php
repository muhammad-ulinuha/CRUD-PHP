<!DOCTYPE html>
<html>
<head>
    <title>FORM Biodata</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    
<div class="container">
    <div class="row" >
        <div class="col">
            <h1 class="mt-5">Data Calon Anggota</h1>
        </div>
    </div>
</div>
<div class="limiter">
		<div class="container">
			<div class="wrap-table100">
            <p>
            
            </p>
            <a href="tambahdata.php" class="btn btn-primary btn-lg">Add New User</a>
            <a href="../multi_user/logout.php" class="btn btn-danger btn-lg">Logout</a>
            <br>
            <br>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
                        
        <table width='10%' >
    <thead>
    <tr class="row100 body">
									<th class="col">No</th>
									<th class="col">Nim</th>
									<th class="col">Nama</th>
									<th class="col">Alamat</th>
                                    <th class="col">No Telpon</th>
                                    <th class="col">Jurusan</th>
                                    <th class="col">Minat & Bakat</th>
                                    <th class="col"></th>
                                    <th></th>
								</tr>
                            </thead>
	    <tbody>
	      
    <?php 
    include 'conn.php';
    $no = 1; 
    $data = mysqli_query($conn,"SELECT * from data_mhs");
    while($user_data = mysqli_fetch_array($data)) {         
        echo "<tr class=row100 body>";
        echo "<td class=cell100 column1>".$no++."</td>";
        echo "<td class=cell100 column1>".$user_data['nim']."</td>";
        echo "<td class= cell100 column1>".$user_data['nama']."</td>";
        echo "<td class=cell100 column1>".$user_data['alamat']."</td>"; 
        echo "<td class=cell100 column1>".$user_data['no_telpon']."</td>"; 
        echo "<td class=cell100 column1>".$user_data['jurusan']."</td>"; 
        echo "<td class=cell100 column1>".$user_data['minat_bakat']."</td>";     
        echo "<td class=cell100 column1><a href='update.php?id=$user_data[id]'>Edit|</a> <?td>";
        echo"<td class=cell100 column1><a href='delete.php?id=$user_data[id]'> Delete</a></td>";
        echo "</tr>";        
    }
    ?>
        </tbody>
    </table>
    
    </div>	
</div>

</body>
</html>