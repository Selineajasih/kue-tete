<!DOCTYPE html>
<html>
<head>
    <title>Form Data Siswa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 100%;
        }
        form {
            margin-top: 20px;
        }
        label, select, input[type=text], input[type=submit] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .radio-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .radio-group label {
            display: inline-block;
            font-size: 16px;
        }
        input[type=radio] {
            margin-right: 5px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>INPUT DATA SISWA</h2>
        <form action="simpansiswa.php" method="post">
            <label for="nis">Nomor Induk:</label>
            <input type="text" id="nis" name="nis" pattern="[^a-zA-Z]+" title="hanya nomer">

            <label for="nama">Nama Siswa:</label>
            <input type="text" id="nama" name="nama" pattern="[^0-9]+" title="Hanya huruf dan spasi yang diperbolehkan">


            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <label for="laki-laki"><input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
                <label for="perempuan"><input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">Perempuan</label>
            </div>

            <label for="kelas">Kelas:</label>
            <select id="kelas" name="kelas">
                <option value="">Pilih Kelas</option>
                <option value="10-PPLG-1">10-PPLG-1</option>
                <option value="10-PPLG-2">10-PPLG-2</option>
                <option value="10-PPLG-3">10-PPLG-3</option>
            </select>

            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan">
                <option value="">Pilih Jurusan</option>
                <option value="PPLG">PPLG</option>
                <option value="Animasi">Animasi</option>
                <option value="TPL">TPL</option>
                <option value="Otomotif">Otomotif</option>
            </select>

            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>
