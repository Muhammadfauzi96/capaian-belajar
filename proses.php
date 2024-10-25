<?php
echo "<center>";
echo "<h1>PERPUSTAKAAN 'PINAR MEMBACA'</h1>";
echo "<h3>Pendaftaran Anggota Secara Online</h3>";
echo "<h5>Jl. Sejahtera no.11 Bekasi Tenggara</h5>";
echo "<hr color='green'>";
echo "******* BUKTI PENDAFTARAN *******<br>";

$nama = $_POST['nama'];
$tempat = $_POST['tempatlahir'];
$tgl = $_POST['tgllahir'];
$bln = $_POST['bulanlahir'];
$thn = $_POST['tahunlahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jk = $_POST['jk'];

$bulan = [
    1 => "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
];

echo "Tanggal Cetak: " . date('d-m-Y') . "<br>";
echo "Nama Lengkap: $nama<br>";
echo "TTL: $tempat - $tgl/" . $bulan[$bln] . "/$thn<br>";
echo "Alamat: $alamat<br>";
echo "No. Telp: $telp<br>";

if ($jk == 'L') {
    echo "Jenis Kelamin: Laki-Laki<br>";
} else {
    echo "Jenis Kelamin: Perempuan<br>";
}
echo "Jenis Kelamin : $jk<br>";
echo "Alamat        : $alamat<br>";
echo "No. Telp      : $telp<br>";

?>
<p>
    <a href="index.php">
        <<< INPUT LAGI</a>
            <hr color="red">
            <marquee direction="right">
                <i> Pendaftaran Anggota Perpustakaan secara Online ---</i>
            </marquee>

            "</center>";