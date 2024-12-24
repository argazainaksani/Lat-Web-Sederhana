<?php # membuka tag PHP

$nama = @$_GET['nama'];
$gmail = @$_GET['gmail'];
$perusahaan = @$_GET['perusahaan'];
$telepon = @$_GET['telepon'];
# di sini nanti kita akan tampilkan variabel $nama dan $alamat

# jangan lupa tutup tag PHP

if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($gmail) {
    echo "<strong>Alamat email:</strong> {$gmail} <br>";

}

   if ($perusahaan) {
    echo "<strong>Perusahaanl:</strong> {$perusahaan} <br>";
}

if ($telepon) {
    echo "<strong>Telepon:</strong> {$telepon} <br>";
    }
?>

<br><br>
<a href="kontak.html"><h2>Kembali</h2></a>