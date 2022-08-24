<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=laporan-Data-Anggota.xls"); 
?>

<table border="1" align="center">
    <tr>
        <th width="50">Nama</th>
        <th width="100">NIM</th>
        <th width="50">No Hp</th>
        <th width="50">Alamat</th>
        <th width="100">Tgl lahir</th>
        <th width="100">jabatan</th>
    </tr>
    <?php foreach ($daftar_anggota as $d): ?>
        </tr>
            <td><?= $d['nama_lengkap'];?></td>
            <td><?= $d['nim'];?></td>
            <td><?= $d['nomer_hp'];?></td>
            <td><?= $d['alamat'];?></td>
            <td><?= $d['tgl_lahir'];?></td>
            <td><?= $d['jabatan'];?></td>
        </tr>
    <?php endforeach; ?>
</table>