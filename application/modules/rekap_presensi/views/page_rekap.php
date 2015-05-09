<!DOCTYPE html>
<html>
<head>
	<title>Rekap</title>
	<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/ui.css">
	<script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<table border="1" class="table table-bordered table-condensed table-hover table-striped">
	<thead>
		<tr>
			<th colspan="2"><center>Data Siswa</center></th>
			<?php $col=0;foreach($absen as $a){?>
			<?php ++$col;?>
			<?php }?>
			<th colspan="<?php echo $col;?>"><center> Data Kehadiran</center></th>
		</tr>
		<tr>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<?php $no=0;foreach($absen as $a){?>
			<th><a href="#" title="<?php echo $a->tanggal;?>"><?php echo ++$no;?></a> </th>
			<?php }?>
		</tr>
	</thead>
	<tbody>
		<?php foreach($siswa as $siswa){?>
		<tr>
			<td><?php echo $siswa->nis;?></td>
			<td><?php echo $siswa->nama_siswa;?></td>	
		<?php foreach($absen as $z){
				echo "<td>".$list[$siswa->nis."-".$z->id_absensi]."</td>";
			?>

			<?php }?>
		</tr>
		<?php } $c=$col+2;?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2"><center>Jumlah Kehadiran</center></td>
		</tr>
	</tfoot>
</table>
</body>
</html>