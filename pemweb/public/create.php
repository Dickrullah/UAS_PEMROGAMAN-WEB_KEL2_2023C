<?php include '../config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold text-center mb-6">Isi Data</h2>
        <form action="" method="POST" class="bg-white p-6 rounded shadow-md">
            <label class="block mb-2">Nama:</label>
            <input type="text" name="nama" class="w-full p-2 border rounded mb-4" required>
            
            <label class="block mb-2">Tanggal Pemesanan:</label>
            <input type="date" name="tanggal" class="w-full p-2 border rounded mb-4" required>
            
            <label class="block mb-2">Waktu:</label>
            <select name="waktu" class="w-full p-2 border rounded mb-4" required>
                <option value="">Pilih Waktu</option>
                <option value="Siang">Siang</option>
                <option value="Malam">Malam</option>
            </select>
            
            <button type="submit" name="add" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah</button>
        </form>
    </div>
    <?php
    if (isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];

    // Query tanpa backslash yang salah
    $conn->query("INSERT INTO pemesanan (nama, tanggal, waktu) VALUES ('$nama', '$tanggal', '$waktu')");

    // Redirect setelah berhasil
    header('Location: index.php');
    }
    ?>

</body>
</html>
