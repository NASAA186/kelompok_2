<?php

// membuat koneksi ke database
$koneksi = mysqli_connect('localhost','root','','kendaraan');

// mengirim query ke database
$result= mysqli_query($koneksi, "SELECT * FROM beli INNER JOIN customer ON beli.id_customer = customer.id_customer INNER JOIN motor ON beli.no_rangka = motor.no_rangka");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Penjualan</title>
</head>
<body>
    <h1>Tabel Penjualan Motor</h1>

    <table border="1" cellpaddings="3" cellspacing="0">
        <tr>
            <td>ID Customer</td>
            <td>Nomor Rangka Motor</td>
            <td>Kode Transaksi</td>
            <td>Tanggal Pembelian</td>
            <td>Harga Total</td>
        </tr>

        <?php while($row=mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?php echo $row["id_customer"]; ?></td>
            <td><?php echo $row["no_rangka"]; ?></td>
            <td><?php echo $row["kode_pmbelian"]; ?></td>
            <td><?php echo $row["tgl_beli"]; ?></td>
            <td><?php echo $row["harga"]; ?></td>
        </tr>
        <?php endwhile ?>

    </table>
</body>
</html>
 