<?php
$n = $nama_k['nama_kegiatan'];
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=laporan-Data-$n.xls"); 
?>

<p align="center" style="font-weight:bold;font-size:16pt;text-transform: uppercase;">Laporan Data <?=$n;?></p>

<table border="1" align="center">
    <tr>
        <th width="50">Nama</th>
        <th width="100">NIM</th>
        <th width="50">No Hp</th>
        <th width="50">Email</th>
        <th width="100">Pembayaran</th>
        <th width="100">jabatan</th>
    </tr>
    <?php foreach ($kegiatan as $k): ?>
        </tr>
            <td><?= $k['nama_lengkap'];?></td>
            <td><?= $k['nim'];?></td>
            <td><?= $k['nomer_hp'];?></td>
            <td><?= $k['email'];?></td>
            <td><?= $k['pembayaran'];?></td>
            <td><?= $k['jabatan'];?></td>
        </tr>
    <?php endforeach; ?>
</table>