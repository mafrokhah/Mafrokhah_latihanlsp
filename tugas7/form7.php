<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no = $_POST['no'] ?? '';
    $nim = $_POST['nim'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $jurusan = $_POST['jurusan'] ?? '';
    
    echo "<h2>Data Mahasiswa</h2>";
    echo "No: " . htmlspecialchars($no) . "<br>";
    echo "NIM: " . htmlspecialchars($nim) . "<br>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Jurusan: " . htmlspecialchars($jurusan) . "<br>";
}
?>

<form method="POST">
    <label>No: </label>
    <input type="text" name="no" required><br>
    
    <label>NIM: </label>
    <input type="text" name="nim" required><br>
    
    <label>Nama: </label>
    <input type="text" name="nama" required><br>
    
    <label>Gender: </label>
    <select name="gender" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    
    <label>Jurusan: </label>
    <input type="text" name="jurusan" required><br>
    
    <button type="submit">Submit</button>
</form>