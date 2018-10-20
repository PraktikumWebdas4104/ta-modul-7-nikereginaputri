<?php 

include 'koneksi.php';
$query=msqli_query($conn,"SELECT * FROM db_mahasiswa ORDER BY nim ASC");

 ?>
 <body bgcolor="pink" aligan="center" >
 	<h1><b>LIHAT DATA SISWA </b></h1></hr>
 	<form action="" method="POST"> 
 		<table border="1" cellpadding="0" cellspacing="0">
 		<tr>
 			<th> NO </th>
 			<th> NIM </th>
 			<th> NAMA </th>
 			<th> AKSI </th>
 		</tr>
 		<?php if(mysqli_num_rows($query)>0)
 	 	{?>
 	 	<tr>
 	 	<td><?php echo $NO 	 ?></td>
 	 	<td><?php echo $DATA ?></td>
 	 	<td><?php echo $NAMA ?></td>
 	 	<td>
 	 		<a href="#">Delet</a>
 	 		<a href="#">Delet</a>
 	 		</td>
 	 	</tr>
 	 	<?php  $NO++; { ?>
 	 	<?php } ?>
</table>
<br><input type="submit" name="tambahdata" value=" INPUT DATA SISWA">
 	</form>
 	<?php 
 	if (isset($_POST['tambahdata'])) {
 	 	header("location : inputdata.php")
 	 } 
 	 
 	 ?>