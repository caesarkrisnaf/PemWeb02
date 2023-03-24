<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "select pelanggan.*,kartu.nama as kartu_nama
FROM pelanggan LEFT JOIN 
kartu ON pelanggan.kartu_id = kartu.id";

$rs = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Data Pelanggan</title>
</head>

<body>
<a href="index.php" class="btn btn-success btn-md"><span class="fa fa-plus"></span> Tambah</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Email</th>
                        <th scope="col">Kartu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $nomor = 0;
                    foreach ($rs as $r) {
                    ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $r['kode'] ?></td>
                            <td><?= $r['nama'] ?></td>
                            <td><?= $r['jk'] ?></td>
                            <td><?= $r['tmp_lahir'] ?></td>
                            <td><?= $r['tgl_lahir'] ?></td>
                            <td><?= $r['email'] ?></td>
                            <td><?= $r['kartu_nama'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="view_produk.php?id=<?= $r['id'] ?>">View</a>
                                <a class="btn btn-primary" href="edit.php?id=<?= $r['id'] ?>">Edit</a>
                                <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="delete.php?id=<?php echo $r['id'];?>" 
							class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                    <?php
                        $nomor++;
                    }
                    ?>
            </table>
        </div>
        <div class="col-md-2">

        </div>
    </div>

</html>