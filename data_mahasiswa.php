<?php
include 'config/koneksi.php';

$data = mysqli_query(
$conn,
"SELECT * FROM mahasiswa ORDER BY id DESC"
);

$no = 1;
?>

<div class="table-box">

<table class="table table-bordered datatable">

<thead>
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Program Studi</th>
    <th>Usia</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>

<?php while($d=mysqli_fetch_assoc($data)){ ?>

<tr>

<td><?= $no++; ?></td>
<td><?= $d['nim']; ?></td>
<td><?= $d['nama']; ?></td>
<td><?= $d['prodi']; ?></td>
<td><?= $d['usia']; ?></td>

<td>

<a href="edit_mahasiswa.php?id=<?= $d['id']; ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus_mahasiswa.php?id=<?= $d['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>