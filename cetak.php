<?php
include('config.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM profil inner join admin on admin.id_admin=profil.id_admin");
$html = '<center><h3>Data Profil</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Sejarah</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Email</th>
                <th>No Hp</th>
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['sejarah'] . "</td>
                <td>" . $transaction['visi'] . "</td>
                <td>" . $transaction['misi'] . "</td>
                <td>" .$transaction['email'] . "</td>
                <td>" . $transaction['no_hp'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-profil.pdf');
?>
