<?php
require_once 'dbkoneksi.php';
?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pelanggan WHERE id = ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();

?>

<table>
    <tr>
        <td>Kode:</td>
        <td><?= $hasil['kode'] ?></td>
</tr>
<tr>
        <td>Nama:</td>
        <td><?= $hasil['nama'] ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin :</td>
        <td><?= $hasil['jk'] ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir :</td>
        <td><?= $hasil ['tgl_lahir'] ?></td>
    </tr>
    <tr>
        <td>Email :</td>
        <td><?= $hasil ['email'] ?></td>
    </tr>
    <tr>
        <td>Kartu :</td>
        <td><?= $hasil['kartu_id'] ?></td>
    </tr>
</table>