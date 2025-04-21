<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "dbsiswa";
// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
// Memeriksa koneksi 
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Mengambil data dari form
$nis = htmlspecialchars($_POST['nis'], ENT_QUOTES, 'UTF-8');
$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES, 'UTF-8');
$kelas = htmlspecialchars($_POST['kelas'], ENT_QUOTES, 'UTF-8');
$jurusan = htmlspecialchars($_POST['jurusan'], ENT_QUOTES, 'UTF-8');
// Menyiapkan statement untuk menyimpan data siswa
$stmt = $conn->prepare("INSERT INTO tblsiswa (nis, nama, jenis_kelamin, kelas, jurusan) VALUES (?, ?, ?, ?, ?)");
// Bind parameter untuk masing-masing kolom
$stmt->bind_param("sssss", $nis, $nama, $jenis_kelamin, $kelas, $jurusan);
// Menjalankan statement
if ($stmt->execute()) {
echo "Data siswa berhasil disimpan.";
echo "<br><a href='tampilsiswa.php'>Kembali ke Data Siswa</a>";
} else {
echo "Error: " . $stmt->error;
}
// Menutup statement
$stmt->close();
}
// Menutup koneksi
$conn->close();
?>