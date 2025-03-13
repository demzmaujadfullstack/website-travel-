<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simulasi penyimpanan data pembayaran
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    
    // Simpan bukti transfer (tidak ada validasi karena hanya simulasi)
    if (!empty($_FILES['receipt']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["receipt"]["name"]);
        move_uploaded_file($_FILES["receipt"]["tmp_name"], $target_file);
    }
    
    // Redirect ke beranda setelah pembayaran
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - TravelKu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-12">
        <h2 class="text-3xl font-bold text-center">Pembayaran</h2>
        <div class="mt-8 max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
            <p class="text-gray-700">Silakan transfer ke rekening berikut:</p>
            <p class="font-bold text-lg">Bank ABC - 1234567890 a/n TravelKu</p>
            <form action="payment.php" method="POST" enctype="multipart/form-data" class="mt-4">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama Pengirim</label>
                    <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="amount" class="block text-gray-700">Jumlah Transfer</label>
                    <input type="number" name="amount" id="amount" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="receipt" class="block text-gray-700">Upload Bukti Transfer</label>
                    <input type="file" name="receipt" id="receipt" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Konfirmasi Pembayaran</button>
            </form>
        </div>
    </div>
</body>
</html>
