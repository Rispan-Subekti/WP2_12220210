<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<center>
<table>
<tr>
<th colspan="3">
Pemesanan Tiket Cinema 99
</th>
</tr>
<tr>
<td colspan="3">
<hr>
</td>
</tr>
<tr>
<td>Nama Pemesan</td>
<td>:</td>
<td>
<?= $nama; ?>
</td>
</tr>
<tr>
<td>Pukul</td>
<td>:</td>
<td>
<?= $waktu; ?>
</td>
</tr>
<tr>
<td>Type Studio</td>
<td>:</td>
<td>
<?= $type; ?>
</td>
</tr>
<tr>
<td>Jumlah Pesan</td>
<td>:</td>
<td>
<?= $jumlah; ?>
</td>
</tr>
<tr>
<td>Harga Tiket</td>
<td>:</td>
<td>
<?= $harga; ?>
</td>
</tr>
<tr>
<td>Total</td>
<td>:</td>
<td>
<?= $total; ?>
</td>
</tr>
<tr>
<td colspan="3" align="center">
<a href="<?= base_url('cinema'); ?>">Input Data Lagi</a>
</td>
</tr>
</table>
</center>
</body>
</html>