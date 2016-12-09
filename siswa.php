<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();


/*print '<pre>';
print_r($data);
Print '</pre>';
*/?>

<h1>Data Siswa</h1>
<table border="1px">
	<tr>
		<th>NO</th>
		<th>NIS</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
	</tr>
	<?php 
		$n = 1;
		foreach($data as $a):
	?> 
	<tr>
		<td><?php echo $n++  ?></td>
		<td><?php echo $a['id_siswa']; ?></td>
		<td><?php echo $a['full_name']; ?></td>
		<td><?php echo $a['email'];?></td>
		<td><?php echo $a['nationality']; ?></td>
		<td><a href="dsiswa.php?a=<?php echo $a['id_siswa']?>"> Detail</a></td>
		<td><a href="usiswa.php?a=<?php echo $a['id_siswa']?>"> Edit</a></td>
		<td><a href="delsiswa.php?a=<?php echo $a['id_siswa']?>"> Delete</a></td>
	</tr>
	<?php endforeach?>
</table>