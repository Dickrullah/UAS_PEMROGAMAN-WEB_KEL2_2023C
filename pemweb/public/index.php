<?php include '../config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">

<header>
        <nav>
            <ul>
                <li><a href="homepage.php">Homepage</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="index.php">Jadwal</a></li>
            </ul>
        </nav>
</header>

<div class="isi">
        <h2 class="text-2xl font-bold text-center mb-6">Jadwal Pemesanan Tes Kesehatan Mental</h2>
        <div class="mt-6">
        <h3 class="text-lg font-semibold text-gray-800">Manfaat Tes Kesehatan Mental:</h3>
        
        <p class="mt-2">
            Tes kesehatan mental membantu mengidentifikasi dan memahami kondisi mental Anda. 
            Dengan menjadwalkan tes ini, Anda mengambil langkah penting dalam menjaga kesejahteraan diri 
            dan mengakses bantuan yang mungkin dibutuhkan.
        </p>
        <br>
    <section>
            <h2>Keuntungan Menggunakan Layanan Ini</h2>
            <ul class="list-decimal pl-6 mt-4 space-y-2 ">
                <li>Mempermudah perencanaan tes kesehatan mental secara online tanpa perlu datang langsung.</li>
                <li>Menyediakan jadwal yang fleksibel, dapat disesuaikan dengan waktu luang Anda (siang/malam).</li>
                <li>Memastikan kerahasiaan data Anda terjaga dengan baik.</li>
                <li>Menyediakan laporan hasil tes yang bisa diakses kapan saja.</li>
            </ul>
        </div>
    </section>

    <br>

    <!-- Langkah-langkah Pemesanan -->
    <section>
        <div class="bg-blue-100 p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-blue-800">Langkah-langkah Pemesanan</h2>
            <ol class="list-decimal pl-6 mt-4 space-y-2 text-blue-700">
                <li>Klik tombol <b>Tambah Data</b> untuk memulai.</li>
                <li>Isi formulir dengan nama lengkap, tanggal pemesanan, dan waktu (siang/malam).</li>
                <li>Pastikan data yang Anda masukkan sudah benar sebelum menyimpan.</li>
                <li>Jika perlu mengubah jadwal, gunakan opsi <b>Edit</b>.</li>
                <li>Hapus data yang tidak lagi diperlukan dengan tombol <b>Hapus</b>.</li>
            </ol>
        </div>
    </section>


    <!-- Informasi Tambahan -->

        <br>
        <br>
        <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Pesan Jadwal</a>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border">No</th>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">Tanggal Pemesanan</th>
                        <th class="py-2 px-4 border">Waktu</th>
                        <th class="py-2 px-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query('SELECT * FROM pemesanan');
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr class='hover:bg-gray-100'>
                            <td class='py-2 px-4 border'>{$no}</td>
                            <td class='py-2 px-4 border'>{$row['nama']}</td>
                            <td class='py-2 px-4 border'>{$row['tanggal']}</td>
                            <td class='py-2 px-4 border'>{$row['waktu']}</td>
                            <td class='py-2 px-4 border text-center'>
                                <a href='delete.php?id={$row['id']}' class='text-red-500 hover:underline'>Hapus</a>
                            </td>
                        </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p>&copy; kelompok 2 2024</p>
        <p>Contact us: <a href="mailto:contact@kelompok2.com">contact@kelompok2.com</a></p>
    </footer>
</body>
</html>
