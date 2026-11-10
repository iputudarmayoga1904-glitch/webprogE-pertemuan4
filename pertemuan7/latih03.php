<?php
   // transaksi penjualan produk
   $namaproduk = "Baju suka tidur";
   $harga_satuan = 115500;
   $qty = 2;

   // hitung harga yang harus di bayar

   $total_bayar = $harga_satuan * $qty;

    // Menampilkan hasil
    echo "Nama Produk: " . $namaproduk . "<br>";
    echo "Harga Satuan: Rp " . number_format($harga_satuan, 0, ',', '.') . "<br>";
    echo "Jumlah Beli: " . $qty . "<br>";
    echo "Total yang harus dibayar: Rp " . number_format($total_bayar, 0, ',', '.');

    // terdapat diskon 5% jika Sub Total lebih dari 500.000
    $diskon = 0; 
    if($total_bayar > 500000){
        $diskon = 0.05 * $total_bayar;
    }

    $total_akhir = $total_bayar - $diskon;
    echo "<br> Diskon : ". $diskon;
    echo "<br> Total Harga Akhir : ". $total_akhir;


?>