<?php
include 'config/koneksi.php';

require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");

$html = "<h2 style='text-align:center;'>Laporan Data Mahasiswa</h2><hr><br>";

$html .= "<table border='1' width='100%' cellpadding='5' cellspacing='0'>
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Prodi</th>
<th>Usia</th>
</tr>";

$no = 1;
while($row = mysqli_fetch_assoc($query)){
    $html .= "<tr>
        <td>".$no++."</td>
        <td>".$row['nim']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['prodi']."</td>
        <td>".$row['usia']."</td>
    </tr>";
}

$html .= "</table>";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("data-mahasiswa.pdf", ["Attachment" => false]);